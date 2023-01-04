<?php

namespace App\Http\Controllers\Api\Store\v1\Payment;

use App\Http\Controllers\Controller;
use App\Payment;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
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

    public function create(Request $request)
    {
        $request->validate([
            'amount'   => 'required',
            'shipping' => 'required',
            'items'    => 'required|array',
        ]);

        /** I have hard coded amount. You may fetch the amount based on customers order or anything */
        $grand_total = (float) $request->amount;
        $amount      = (100 * $grand_total);
        $currency    = 'usd';

        $items = $request->items;

        $description = 'Isaac product purchase payment: $' . number_format($grand_total, 2) . ' | ';
        foreach ($items as $key => $item) {
            $description .= ' Name: ' . ucfirst($item['name']) . ' Quantity: ' . $item['quantity'] . ' Price: $' . number_format($item['price'],2) . ' | ';
        }
        $description .= 'Shipping: $' . number_format($request->shipping,2);

        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
           
            /** Add customer to stripe, Stripe customer */
            $customer = \Stripe\Customer::create([
                'email'  => $request->user('api')->email,
            ]);
            
        } catch (Exception $e) {
            $apiError = $e->getMessage();
        }

        if (empty($apiError) && $customer) {

            /** Charge a credit or a debit card */
            try {
                /** Stripe charge class */
                $payment = PaymentIntent::create([
                    'amount'      => $amount,
                    'currency'    => $currency,
                    'description' => $description,
                ]);
                
            } catch (Exception $e) {
                $apiError = $e->getMessage();
            }

            if (empty($apiError) && $payment) {

                // Retrieve charge details
                // $paymentDetails = $charge->jsonSerialize();

                // if ($paymentDetails['amount_refunded'] == 0 && empty($paymentDetails['failure_code']) && $paymentDetails['paid'] == 1 && $paymentDetails['captured'] == 1) {
                //     /** You need to create model and other implementations */

                //     if (Cart::getTotalQuantity() > 0) {

                //         /**
                //          * add transaction to DB...
                //          */
                //         $items       = Cart::getContent();
                //         $payer_email = Auth::user()->email;

                //         $payment                 = new PaymentModel();
                //         $payment->payment_id     = $paymentDetails['balance_transaction'];
                //         $payment->payer_id       = $paymentDetails['id'];
                //         $payment->payer_email    = $payer_email;
                //         $payment->currency       = strtoupper($currency);
                //         $payment->payment_status = 'success';
                //         $payment->payment_method = 'stripe';
                //         //card items...
                //         $payment->items       = json_encode(Cart::getContent()->toArray());
                //         $payment->total       = Cart::getTotal();
                //         $payment->shipping    = get_setting_field('shipping_charges');
                //         $payment->grand_total = $grand_total;
                //         $payment->save();

                //         //Order Success Mail...
                //         Mail::to($payer_email)->cc(get_setting_field('email'))->send(new OrderSuccess($payment));

                //         Session::put('status', 'Success');
                //         Session::put('message', 'Payment success');

                //         return redirect()->route('payments.status');

                //     }
                //     return redirect()->route('home');

                //     // return redirect('/thankyou/?receipt_url=' . $paymentDetails['receipt_url']);
                // }

                $data = ['client_secret' => $payment->client_secret, 'publishable_key' => env('STRIPE_PUBLISH_KEY')];

                return successApiResponse('Payment send successfully...', [
                    'data' => $data,
                ], 200);

            }
        }

        return failedApiResponse('Payment Faild.', [], 400);

        /** Charge a credit or a debit card */
        // try {
        //     /** Stripe charge class */
        //     $payment = PaymentIntent::create([
        //         'amount'      => $amount,
        //         'currency'    => $currency,
        //         'description' => 'Empathicos product purchase payment: $' . number_format($grand_total, 2),
        //     ]);

        //     $data = ['client_secret' => $payment->client_secret, 'publishable_key' => env('STRIPE_PUBLISH_KEY')];

        //     return successApiResponse('Payment send successfully...', [
        //         'data' => $data,
        //     ], 200);

        // } catch (Exception $e) {
        //     $apiError = $e->getMessage();
        // }

        // return failedApiResponse('Payment Faild.', [], 400);

    }

    // public function payment($req)
    // {
    //     try {

    //         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //         $stripe = Stripe\PaymentIntent::create([
    //             "amount"      => $req->amount * 100,
    //             "currency"    => $req->currency,
    //             "description" => $req->description,
    //         ]);

    //         return response()->json(['data' => ['client_secret' => $stripe->client_secret, 'publishable_key' => env('STRIPE_KEY')], "errorMessage" => 'Payment successfull', "resultCode" => 0], 200);

    //     } catch (Exception $e) {

    //         return response()->json(['data' => null, "errorMessage" => $e, "resultCode" => 1], 200);
    //     }
    // }
}
