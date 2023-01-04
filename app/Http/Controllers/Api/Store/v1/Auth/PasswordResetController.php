<?php
namespace App\Http\Controllers\Api\Store\v1\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\Store\Auth\PasswordResetRequest;
use App\Notifications\Store\Auth\PasswordResetSuccess;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{

    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function email(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return failedApiResponse('We canot find a user with that e-mail address.', [], 400);
        }

        $password = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'email' => $user->email,
            'token' => str_random(60),
        ]);

        if ($user && $password) {
            $user->notify(new PasswordResetRequest($password->token));
        }

        return successApiResponse('We have e-mailed your password reset link!', [], 200);
    }

    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $password = PasswordReset::where('token', $token)->first();

        if (!$password) {
            return failedApiResponse('This password reset token is invalid.', [], 404);
        }

        if (Carbon::parse($password->updated_at)->addMinutes(720)->isPast()) {
            $password->delete();
            return failedApiResponse('This password reset token is invalid.', [], 404);
        }

        return successApiResponse('This password reset token is valid.', [
            'password' => $password,
        ], 200);
    }

    /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token'    => 'required|string',
        ]);

        $password = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->email],
        ])->first();

        if (!$password) {
            return failedApiResponse('This password reset token is invalid.', [], 404);
        }

        $user = User::where('email', $password->email)->first();
        if (!$user) {
            return successApiResponse('We can not find a user with that e-mail address.', [
                'password' => $password,
            ], 200);
        }

        $user->password = bcrypt($request->password);
        $user->save();
        $password->delete();
        $user->notify(new PasswordResetSuccess($password));

        return successApiResponse('Your password changed successfully.', [
            'user' => $user,
        ], 200);

    }
}
