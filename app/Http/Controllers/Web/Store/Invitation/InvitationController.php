<?php

namespace App\Http\Controllers\Web\Store\Invitation;

use App\Http\Controllers\Controller;
use App\Invitation;
use App\Mail\Invitations\SendInvitation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

/**
 * Invitation
 *
 * @package    Invitation Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class InvitationController extends Controller
{

    public function index(Request $request)
    {
        return view('store.pages.invitations.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            // 'email'   => 'required|email|unique:invitations,email',
            'message' => 'required|max:5000',
        ], [
            'required.email' => '',
        ]);

        $invitation          = new Invitation();
        $invitation->user_id = Auth::id();
        $invitation->name    = $request->input('name');
        $invitation->email   = $request->input('email');
        $invitation->message = $request->input('message');
        if ($invitation->save()) {
            Mail::to($invitation->email)->cc(get_setting_field('email'))->send(new SendInvitation($invitation));
            flashWebResponse('message', 'Invitation has been sent successfully.');
            return redirect()->route('invitation');
        }
    }

    public function accept($id)
    {

        $invitation = Invitation::findOrFail(base64url_decode($id));

        if ($invitation->status == '2') {
            return redirect()->route('home');
        }

        $invitation->status = 2;
        if ($invitation->save()) {
            $user = User::create([
                'name'     => $invitation->name,
                'email'    => $invitation->email,
                'password' => Hash::make(rand(10000, 10000000)),
                'birthday' => date('Y-m-d'),
                'about'    => 'Write your bio here...',
                'image'    => '',
            ]);
            Auth::login(User::find($user->id));
            return redirect()->route('profile');
        }

        return redirect()->route('home');
    }

}
