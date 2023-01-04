<?php

namespace App\Http\Controllers\Web\Dashboard\Feedback;

use App\Feedback;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Feedback\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Feedback\CreateRequest;
use App\Http\Requests\Web\Dashboard\Feedback\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Feedback\IndexRequest;
use App\Http\Requests\Web\Dashboard\Feedback\StoreRequest;

/**
 * Feedbacks
 *
 * @package    Feedback Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FeedbackController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return view('dashboard.pages.feedbacks.index', $provider->meta());
    }

    public function store(StoreRequest $request)
    {
        if ($Feedback = $request->persist()->getFeedback()) {
            flashWebResponse('created', 'Feedback');
            return redirect()->route('admin.feedbacks.show', $Feedback->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Feedback $Feedback)
    {
        if (request()->ajax()) {
            if ($request->persist()->getMsg()) {
                flashWebResponse('trashed', 'Feedback');
                return response()->json(['status' => 'success', 'redirect' => true, 'title' => 'Deleted!', 'text' => 'Feedback has been trashed successfully.','redirect'=>true]);
            }
            return errorWebResponse();

        }
        return httpWebResponse();
    }
}
