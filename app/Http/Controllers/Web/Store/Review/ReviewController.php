<?php

namespace App\Http\Controllers\Web\Store\Review;

use App\Http\Controllers\Controller;
use App\Review;
use Auth;
use Illuminate\Http\Request;

/**
 * Review
 *
 * @package    Review Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ReviewController extends Controller
{

    public function send(Request $request)
    {
        $request->validate([
            'product' => 'required|string|max:255',
            'name'    => 'required|string|max:255',
            'rating'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'review'  => 'required|max:5000',
        ]);

        $review             = new Review();
        $review->name       = $request->input('name');
        $review->review     = $request->input('review');
        $review->rating      = $request->input('rating');
        $review->email      = $request->input('email');
        $review->product_id = $request->input('product');
        $review->status     = 1;
        $review->user_id    = $request->user()->id;
        if ($review->save()) {
            flashWebResponse('saved', 'review');
            return redirect()->back();
        }
    }
}
