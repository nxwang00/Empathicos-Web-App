<?php

namespace App\Http\Controllers\Api\Store\v1\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{

    /**
     * Sign up user
     *
     * @param [string] name
     * @param [string] email
     * @param [string] password
     * @param [string] password_confirmation
     * @return [string] about
     * @return [string] birthday
     * @return [string] image
     */
    public function signup(Request $request)
    {

        $request->request->add(['password' => rand(1000, 100000)]);
        // $request->request->add(['email' => $request->device_id . '@gmail.com', 'password' => rand(1000, 100000)]);
        if(!($request->device_id)){
           return failedApiResponse('device_id can not be null', null, 400);
        }



        $user = $request->user('api');

        if (empty($user)) {
            // $data['email']    = $request->email;
            $data['password'] = $request->password;

            $updateOrCreate      = ['device_token' => isset($request->device_token) ? $request->device_token : ''];
            $check_if_exist_user = User::where('device_id', $request->device_id)->first();

            if (!empty($check_if_exist_user)) {
                $updateOrCreate = [
                    // 'email' => $request->email,
                    'device_id' => $request->device_id,
                    'password'  => $request->password,
                    'device_token' => isset($request->device_token) ? $request->device_token : '',
                ];
            } else {
                $updateOrCreate = [
                    // 'email'     => $request->email,
                    'promo_code' => base64url_encode($request->device_id),
                    'device_id' => $request->device_id,
                    'password'  => $request->password,
                    'device_token' => isset($request->device_token) ? $request->device_token : '',
                ];
            }


                $user = User::updateOrCreate(['device_id' => $request->device_id], $updateOrCreate);

        }
        $user = User::where('email', $user->email)->first();
        if (!Auth::login($user)) {

            $user        = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token       = $tokenResult->token;
            // if ($request->remember_me) {
            // $token->expires_at = Carbon::now()->addWeeks(1);
            // }
            $token->save();

            //update image of user...
            $user->image = asset('storage/profiles/' . $user->image);

            return successApiResponse('Login Successfully...', [
                'user'         => $user,
                'access_token' => $tokenResult->accessToken,
                'token_type'   => 'Bearer',
                'expires_at'   => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            ], 200);

        }

        return failedApiResponse('Invalid Credentials.', null, 400);

        // return successApiResponse('Sign Up Successfully...', [
        // 'user' => $user,
        // ], 200);

    }

    public function register(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
            //'remember_me' => 'boolean',
        ]);

        $email = $request->email;
        $password = $request->password;

        $existUser = User::where('email', $email)->first();
        if (!is_null($existUser)) {
            return failedApiResponse('Email already exists', null, 400);
        }

        $user = new User;
        $user->email = $email;
        $user->password = Hash::make($request->password);
        $user->save();

        if (!Auth::login($user)) {
            $newUser = User::find($user->id);
            $tokenResult = $newUser->createToken('Personal Access Token');
            $token       = $tokenResult->token;
            // if ($request->remember_me) {
            // $token->expires_at = Carbon::now()->addWeeks(1);
            // }
            $token->save();

            //update image of user...
            // $user->image = asset('storage/profiles/' . $user->image);

            return successApiResponse('Login Successfully...', [
                'user'         => $newUser,
                'access_token' => $tokenResult->accessToken,
                'token_type'   => 'Bearer',
                'expires_at'   => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            ], 200);

        }

        return failedApiResponse('Register failed.', null, 400);

        // return successApiResponse('Sign Up Successfully...', [
        // 'user' => $user,
        // ], 200);

    }

    protected function storeFilesIfExists(Request $request, $file_name = ''): string
    {
        if ($request->hasFile($file_name)) {
            $filenameWithExt = $request->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $request->file($file_name)->storeAs('public/profiles', $avatar);
            return $avatar;
        }
        return '';
    }

}
