<?php

namespace App\Http\Controllers\Web\Store\Promo;

use App\Http\Controllers\Controller;
use App\User;
use Cookie;
use Illuminate\Http\Request;
use Session;

class PromoController extends Controller
{

    public function index()
    {
        if (Cookie::has('code')) {
            return redirect()->route('home');
        }

        return view('store.pages.promo.index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'code' => 'required|max:5000',
        ]);

        $user = User::where('promo_code', $request->code)->first();
        if (!empty($user)) {
            Cookie::queue('code', $request->code,'2628000'); //2628000 (five years)
            Session::put('promo_code', $user->promo_code);
            return redirect()->route('home');
        }

        flashWebResponse('message', 'This coupon code is invalid or has expired.');
        return redirect()->route('promo');
    }

}
