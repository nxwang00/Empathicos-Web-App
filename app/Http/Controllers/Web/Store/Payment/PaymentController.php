<?php

namespace App\Http\Controllers\Web\Store\Payment;

use App\Http\Controllers\Controller;
use App\Mail\Orders\OrderSuccess;
use App\Payment;
use App\Payment as PaymentModel;
use Auth;
use Cart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

/**
 * Payment
 *
 * @package    Payment Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class PaymentController extends Controller
{

    public function index(Request $request)
    {
        if (Cart::getTotalQuantity() > 0) {
            return view('store.pages.payments.index');
        }
        return redirect()->route('items.index');
    }

    public function status()
    {
        if (Cart::getTotalQuantity() > 0) {

            //empty card...
            Cart::clear();

            return view('store.pages.payments.status', [
                'status'  => Session::get('status'),
                'message' => Session::get('message'),
            ]);
        }

        return redirect()->route('home');
    }

    public function process(Request $request)
    {

        if (empty(request()->get('stripeToken'))) {
            session()->flash('error', 'Some error while making the payment. Please try again');
            return back();
        }

        /** I have hard coded amount. You may fetch the amount based on customers order or anything */

        $grand_total = (Cart::getTotal() + get_setting_field('shipping_charges'));
        $amount      = 100 * number_format($grand_total, 2);
        $currency    = 'usd';

        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
            /** Add customer to stripe, Stripe customer */
            $customer = Customer::create([
                'email'  => Auth::user()->email,
                'source' => request('stripeToken'),
            ]);
        } catch (Exception $e) {
            $apiError = $e->getMessage();
        }

        if (empty($apiError) && $customer) {
            /** Charge a credit or a debit card */
            try {
                /** Stripe charge class */
                $charge = Charge::create([
                    'customer'    => $customer->id,
                    'amount'      => $amount,
                    'currency'    => $currency,
                    'description' => 'Empathicos product purchase payment: $' . number_format($grand_total,2),
                ]);
            } catch (Exception $e) {
                $apiError = $e->getMessage();
            }

            if (empty($apiError) && $charge) {
                // Retrieve charge details
                $paymentDetails = $charge->jsonSerialize();

                if ($paymentDetails['amount_refunded'] == 0 && empty($paymentDetails['failure_code']) && $paymentDetails['paid'] == 1 && $paymentDetails['captured'] == 1) {
                    /** You need to create model and other implementations */

                    if (Cart::getTotalQuantity() > 0) {

                        /**
                         * add transaction to DB...
                         */
                        $items       = Cart::getContent();
                        $payer_email = Auth::user()->email;

                        $payment                 = new PaymentModel();
                        $payment->payment_id     = $paymentDetails['balance_transaction'];
                        $payment->payer_id       = $paymentDetails['id'];
                        $payment->payer_email    = $payer_email;
                        $payment->currency       = strtoupper($currency);
                        $payment->payment_status = 'success';
                        $payment->payment_method = 'stripe';
                        //card items...
                        $payment->items       = json_encode(Cart::getContent()->toArray());
                        $payment->total       = Cart::getTotal();
                        $payment->shipping    = get_setting_field('shipping_charges');
                        $payment->grand_total = $grand_total;
                        $payment->save();

                        //Order Success Mail...
                        Mail::to($payer_email)->cc(get_setting_field('email'))->send(new OrderSuccess($payment));

                        Session::put('status', 'Success');
                        Session::put('message', 'Payment success');

                        return redirect()->route('payments.status');

                    }
                    return redirect()->route('home');

                    // return redirect('/thankyou/?receipt_url=' . $paymentDetails['receipt_url']);
                } else {
                    session()->flash('error', 'Transaction failed');
                    return back();
                }
            } else {
                session()->flash('error', 'Error in capturing amount: ' . $apiError);
                return back();
            }
        } else {
            session()->flash('error', 'Invalid card details: ' . $apiError);
            return back();
        }
    }

}
