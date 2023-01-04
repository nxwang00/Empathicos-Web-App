<?php

namespace App\Http\Controllers\Web\Store\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Store\Profile\UpdateRequest;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * User Profile
 *
 * @package    Profile Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ProfileController extends Controller
{

    public function index(Request $request)
    {

        // $user = User::findOrFail(Auth::id());
        return view('store.pages.profile.show', ['user' => $request->user()]);
    }

    public function edit(Request $request)
    {

        return view('store.pages.profile.edit', ['user' => $request->user()]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'name'     => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $request->user()->id,
            'image'    => 'image|mimes:jpg,jpeg,png|max:2048',
            'about'    => 'required|max:5000',
        ]);

        $user = User::findOrFail(Auth::id());

        // image for user profile...
        if ($request->hasFile('image')) {
           
           //delete old file...
            Storage::delete('public/profiles/' . $user->image);

            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $avatar          = $filename . '_' . time() . '.' . $extension;
            $path            = $request->file('image')->storeAs('public/profiles', $avatar);
            //upload image...
            $user->image = $avatar;
        }
        
        $user->name  = $request->input('name');
        $user->email = $request->input('email');
        $user->about = $request->input('about');
        $user->birthday = date('Y-m-d',strtotime($request->input('birthday')));

        if ($user->save()) {
            flashWebResponse('updated', 'profile');
            return redirect()->route('profile');
        }
    }
}
