<?php

namespace App\Http\Controllers\Web\Dashboard\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Dashboard\Profile\UpdateRequest;
use App\Admin;
use Auth;
use Hash;
use WebResponse;
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

    public function show()
    {
        $user = Admin::findOrFail(Auth::id());
        return view('dashboard.pages.users.profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Admin::findOrFail(Auth::id());
        return view('dashboard.pages.users.profile.edit', compact('user'));
    }

    public function update(UpdateRequest $request)
    {
        $user = Admin::findOrFail(Auth::id());

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

        $user->name = $request->input('name');
        $user->email      = $request->input('email');
        $user->about      = $request->input('about');
        if (!empty($request->input('want_change_pass'))) {
            $user->password = Hash::make($request->input('password'));
        }
        if ($user->save()) {
            flashWebResponse('updated', 'profile');
            return redirect()->route('admin.user.profile.show');
        }
    }
}
