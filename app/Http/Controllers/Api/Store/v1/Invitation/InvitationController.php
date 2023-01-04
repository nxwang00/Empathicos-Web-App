<?php

namespace App\Http\Controllers\Api\Store\v1\Invitation;

use App\Http\Controllers\Controller;
use App\Invitation;
use App\Mail\Invitations\SendInvitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;
/**
 * Invitation
 *
 * @package    Invitation Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class InvitationController extends Controller
{

    public function send(Request $request)
    {

        if(!($request->user('api'))){
            return failedApiResponse('Oops, authentication failed.',null, '201');
        }

        $invitation          = new Invitation();
        $invitation->user_id = $request->user('api')->id;
        $invitation->name    = $request->input('name');
        $invitation->email   = $request->input('email');
        $invitation->message = $request->input('message');
        if ($invitation->save()) {
            Mail::to($invitation->email)->cc(get_setting_field('email'))->send(new SendInvitation($invitation));
            return successApiResponse('Invitation has been sent successfully...', [
                'invitation' => $invitation,
            ], 200);
        }

        return failedApiResponse('Not able to sent invitation, please try again...', null, 201);
    }
}
