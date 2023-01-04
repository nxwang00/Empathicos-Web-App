<?php

namespace App\Http\Controllers\Api\Store\v1\Feedback;

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

    public function send(Request $request)
    {
        if(!($request->user('api'))){
            return failedApiResponse('Oops, authentication failed.',null, '201');    
        }
        
        $request->validate([
            'message' => 'required|max:5000',
        ]);

        $user          = new Feedback();
        $user->message = $request->input('message');
        $user->user_id = $request->user('api')->id;
        if ($user->save()) {
            return successApiResponse('Feedback send successfully...', [
                'user' => $user,
            ], 200);
        }
    }
}
