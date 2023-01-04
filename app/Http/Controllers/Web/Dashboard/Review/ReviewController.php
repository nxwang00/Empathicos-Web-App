<?php

namespace App\Http\Controllers\Web\Dashboard\Review;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Review\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Review\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Review\IndexRequest;
use App\Http\Requests\Web\Dashboard\Review\StatusRequest;
use App\Review;

/**
 * Reviews
 *
 * @package    Review Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ReviewController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return view('dashboard.pages.reviews.index', $provider->meta());
    }

    public function destroy(DestroyRequest $request, Review $review)
    {
        if (request()->ajax()) {
            if ($request->persist()->getMsg()) {
                flashWebResponse('trashed', 'Review');
                return response()->json(['status' => 'success', 'redirect' => true, 'title' => 'Deleted!', 'text' => 'Review has been trashed successfully.', 'redirect' => true]);
            }
            return errorWebResponse();

        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Review $review)
    {
        if (request()->ajax()) {
            if ($request->persist()->getReview()) {
                return response()->json(['status' => 'success', 'redirect' => true, 'title' => 'Deleted!', 'text' => 'Review status has been changed successfully.', 'redirect' => true]);
            }
        }
        return httpWebResponse();
    }
}
