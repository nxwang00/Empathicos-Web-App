<?php

namespace App\Http\Controllers\Api\Store\v1\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Store\v1\Profile\ShowRequest;
use App\Http\Requests\Api\Store\v1\Profile\UpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Api\Store\v1\User\UserResource;
use Auth;
use File;
use Illuminate\Support\Facades\Storage;
/**
 * Profile
 *
 * @package    Profile Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ProfileController extends Controller
{

    public function profile(Request $request)
    {
        $user = $request->user('api');
        if(!($request->user('api'))){
            return failedApiResponse('Oops, could not fetch user profile.',null, '201');
        }
        $userId = $request->user('api')->id;
        if($userId){
           $userData = User::findOrFail($userId);
           if($userData){
            $response =  [
                'id'         => $userData->id,
                'name'       => $userData->name,
                'email'      => $userData->email,
                'birthday'   => $userData->birthday,
                'about'      => $userData->about,
                'device_id'  => $userData->device_id,
                'promo_code' => $userData->promo_code,
                'image'      => asset('storage/profiles/' . $userData->image),
                'status'     => $userData->status,
                'created_at' => (string) $userData->created_at,
                'updated_at' => (string) $userData->updated_at,
            ];

            return showApiResponse('User profile', $response);
           }
            return failedApiResponse('Oops, could not fetch user profile.',null, '201');
        }

    }

    // public function update(UpdateRequest $request, User $user)
    // {
    //     return $request->persist()->getUser();
    // }

    public function update(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $userId = Auth::id();
        $name = $request->name;
        $email = $request->email;
        $birthday = $request->birthday;
        $about = $request->about;

        $user = User::find($userId);
        if (isset($request->image))
        {
            // delete existing file
            if (!empty($user->image)) {
                Storage::delete('public/profiles/' . $user->image);
            }

            $filenameWithExt = $request->image->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->image->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $request->image->storeAs('public/profiles', $avatar);
            $user->image = $avatar;
        }

        $user->name = $name;
        $user->email = $email;
        $user->birthday = $birthday;
        $user->about = $about;
        $user->save();

        return successApiResponse('Update Profile', [
            'user' => $user,
        ], 200);
    }

}
