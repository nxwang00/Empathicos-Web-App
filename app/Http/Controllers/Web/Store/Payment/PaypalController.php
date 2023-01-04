<?php

namespace App\Http\Controllers\Web\Store\Payment;

use App\Http\Controllers\Controller;
use App\Mail\Orders\OrderSuccess;
use App\Payment as PaymentModel;
use Cart;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

class PaypalController extends Controller
{
    private $_api_context;

    public function __construct()
    {

        $paypal_conf        = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function pay(Request $request)
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items     = Cart::getContent();
        $items_arr = [];

        foreach ($items as $item) {
            $add_item    = new Item();
            $items_arr[] = $add_item->setName($item->name) /** item name **/
                ->setCurrency('USD')
                ->setQuantity($item->quantity)
                ->setPrice($item->price); /** unit price **/
        }

        $item_list = new ItemList();
        $item_list->setItems($items_arr);

        $setSubtotal = Cart::getTotal();
        $setShipping = get_setting_field('shipping_charges');
        $setTotal    = $setSubtotal + $setShipping;

        $details = new Details();
        $details->setShipping($setShipping)
            ->setTax(0)
            ->setSubtotal($setSubtotal);

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($setTotal)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your ' . get_setting_field('company') . ' transaction');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('payments.paypal.return')) /** Specify return URL **/
            ->setCancelUrl(route('payments.paypal.cancel'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        // dd($payment->create($this->_api_context));exit;
        try {

            $payment->create($this->_api_context);

        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            //   } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (Config::get('app.debug')) {

                Session::put('error', 'Connection timeout');
                return redirect()->route('home');

            } else {

                Session::put('error', 'Some error occur, sorry for inconvenient');
                return redirect()->route('home');

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return redirect()->route('home');

    }

    public function cancel()
    {

        if (Cart::getTotalQuantity() > 0) {

            Session::put('status', 'Cancelled');
            Session::put('message', 'Payments Cancelled');

            return view('store.pages.payments.status', [
                'status'  => Session::get('status'),
                'message' => Session::get('message'),
            ]);

            // return redirect()->route('payments.status');

        }
        return redirect()->route('home');
    }

    public function return(Request $request) {

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** Clear the session payment ID **/
        Session::forget('paypal_payment_id');

        /** Payment failed **/
        if (empty($request->get('PayerID')) || empty($request->get('token'))) {

            if (Cart::getTotalQuantity() > 0) {

                Session::put('status', 'Failed');
                Session::put('message', 'Payment failed');

                return redirect()->route('payments.status');

            }
            return redirect()->route('home');
        }

        /** Payment success **/
        $payment   = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            if (Cart::getTotalQuantity() > 0) {

                /**
                 * add transaction to DB...
                 */
                $payer_email = $result->payer->payer_info->email;
                $items       = Cart::getContent();

                $payment                 = new PaymentModel();
                $payment->payment_id     = $request->get('paymentId');
                $payment->payer_id       = $request->get('PayerID');
                $payment->payer_email    = $payer_email;
                $payment->currency       = 'USD';
                $payment->payment_status = 'success';
                $payment->payment_method = 'paypal';
                //card items...
                $payment->items       = json_encode(Cart::getContent()->toArray());
                $payment->total       = Cart::getTotal();
                $payment->shipping    = get_setting_field('shipping_charges');
                $payment->grand_total = (Cart::getTotal() + get_setting_field('shipping_charges'));
                $payment->save();

                //Order Success Mail...
                Mail::to($payer_email)->cc(get_setting_field('email'))->send(new OrderSuccess($payment));

                Session::put('status', 'Success');
                Session::put('message', 'Payment success');

                return redirect()->route('payments.status');

            }
            return redirect()->route('home');

        }

        Session::put('status', 'Failed');
        Session::put('message', 'Payment failed');

        return redirect()->route('payments.status');

    }

}
