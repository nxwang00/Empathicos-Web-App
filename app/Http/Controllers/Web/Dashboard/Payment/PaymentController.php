<?php

namespace App\Http\Controllers\Web\Dashboard\Payment;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Payment\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Payment\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Payment\IndexRequest;
use App\Http\Requests\Web\Dashboard\Payment\ShowRequest;
use App\Http\Requests\Web\Dashboard\Payment\StatusRequest;
use App\Payment;

/**
 * Payments
 *
 * @package    Payment Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class PaymentController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {

        return view('dashboard.pages.payments.index', $provider->meta());
    }

    public function show(ShowRequest $request, Payment $payment)
    {
        return view('dashboard.pages.payments.show', $request->getPayment());
    }

    public function status(StatusRequest $request, Payment $payment)
    {
        if (request()->ajax()) {
            if ($request->persist()->getPayment()) {
                return response()->json(['status' => 'success', 'title' => 'Changed!', 'text' => 'Order has been changed successfully.', 'redirect' => true]);
            }
        }
        return httpWebResponse();
    }

    public function destroy(DestroyRequest $request, Payment $payment)
    {
        if (request()->ajax()) {
            if ($request->persist()->getMsg()) {
                flashWebResponse('trashed', 'order');
                return response()->json(['status' => 'success', 'title' => 'Deleted!', 'text' => 'Order status has been trashed successfully.', 'redirect' => true]);
            }
            return errorWebResponse();

        }
        return httpWebResponse();
    }
}
