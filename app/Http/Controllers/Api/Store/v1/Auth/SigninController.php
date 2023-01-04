<?php

namespace App\Http\Controllers\Api\Store\v1\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    /**
     * Sign in user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function signin(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
            //'remember_me' => 'boolean',
        ]);

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return failedApiResponse('Invalid Credentials.', null, 400);
        }

        $user        = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token       = $tokenResult->token;
        // if ($request->remember_me) {
        //     $token->expires_at = Carbon::now()->addWeeks(1);
        // }
        $token->save();

        //update image of user...
        if (!empty($user->image))
            $user->image = 'http://'.request()->getHttpHost().'/project/storage/app/public/profiles/' . $user->image;
            // $user->image = asset('storage/profiles/' . $user->image);

        return successApiResponse('Login Successfully...', [
            'user'         => $user,
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
        ], 200);

    }

    /**
     * Sign out user (Revoke the token)
     *
     * @return [string] message
     */
    public function signout(Request $request)
    {
        $request->user()->token()->revoke();
        return successApiResponse('Successfully logged out', [], 200);
    }

}
