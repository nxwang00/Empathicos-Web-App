<?php

namespace App\Http\Controllers\Web\Store\Feedback;

use App\Feedback;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

/**
 * Feedback
 *
 * @package    Feedback Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FeedbackController extends Controller
{

    public function index(Request $request)
    {
        return view('store.pages.feedbacks.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|max:5000',
        ]);

        $user          = new Feedback();
        $user->message = $request->input('message');
        $user->user_id = $request->user()->id;
        if ($user->save()) {
            flashWebResponse('message', 'Feedback has been sent successfully.');
            return redirect()->route('feedback');
        }
    }
}
