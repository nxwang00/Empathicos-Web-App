<?php

namespace App\Http\Controllers\Web\Dashboard\Setting;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{

    public function index()
    {
        return view('dashboard.pages.settings.index');
    }

    public function update(Request $request)
    {
        if ($request->has('general_settings')) {
            return $this->general_settings($request);
        }

        if ($request->has('social_media_settings')) {
            return $this->social_media_settings($request);
        }

        if ($request->has('logo_and_favicon_settings')) {
            return $this->logo_and_favicon_settings($request);
        }

        flashWebResponse('updated', 'settings');
        return redirect()->route('admin.settings.index');
    }

    public function social_media_settings(Request $request)
    {
        $request->validate([
            'facebook'  => 'required|max:100',
            'twitter'   => 'required|max:100',
            'instagram' => 'required|max:100',
            'linkedin'  => 'required|max:100',
        ]);

        $settings = Setting::all();
        foreach ($settings as $setting) {
            if ($setting->field == 'facebook') {
                $setting->value = $request->input('facebook');
            }
            if ($setting->field == 'twitter') {
                $setting->value = $request->input('twitter');
            }
            if ($setting->field == 'instagram') {
                $setting->value = $request->input('instagram');
            }
            if ($setting->field == 'linkedin') {
                $setting->value = $request->input('linkedin');
            }
            $setting->save();
        }
        flashWebResponse('updated', 'settings');
        return redirect()->route('admin.settings.index');
    }

    public function general_settings(Request $request)
    {
        $request->validate([
            'company'          => 'required|max:120',
            'contact'          => 'required|max:100',
            'address'          => 'required|max:100',
            'email'            => 'required|string|email|max:100',
            'phone'            => 'required|max:100',
            'mobile'           => 'required|max:100',
            'fax'              => 'required|max:100',
            'website'          => 'required|max:100',
            'shipping_charges' => 'required|max:100',
        ]);

        $settings = Setting::all();
        foreach ($settings as $setting) {
            if ($setting->field == 'company') {
                $setting->value = $request->input('company');
            }
            if ($setting->field == 'contact') {
                $setting->value = $request->input('contact');
            }
            if ($setting->field == 'address') {
                $setting->value = $request->input('address');
            }
            if ($setting->field == 'email') {
                $setting->value = $request->input('email');
            }
            if ($setting->field == 'phone') {
                $setting->value = $request->input('phone');
            }
            if ($setting->field == 'mobile') {
                $setting->value = $request->input('mobile');
            }
            if ($setting->field == 'fax') {
                $setting->value = $request->input('fax');
            }
            if ($setting->field == 'website') {
                $setting->value = $request->input('website');
            }
            if ($setting->field == 'shipping_charges') {
                $setting->value = $request->input('shipping_charges');
            }
            $setting->save();
        }
        flashWebResponse('updated', 'settings');
        return redirect()->route('admin.settings.index');
    }

    public function logo_and_favicon_settings(Request $request)
    {
        $request->validate([
            'logo'    => 'image|max:2048',
            'favicon' => 'image|max:2048',
        ]);

        // Create Template
        $settings = Setting::all();
        foreach ($settings as $setting) {
            if ($setting->field == 'logo') {
                // Handle File Upload
                if ($request->hasFile('logo')) {
                    //delete old file...
                    Storage::delete('public/settings/' . $setting->value);

                    $filenameWithExt = $request->file('logo')->getClientOriginalName();
                    $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension       = $request->file('logo')->getClientOriginalExtension();
                    $logo            = rand(10, 100) . time() . '.' . $extension;
                    $path            = $request->file('logo')->storeAs('public/settings', $logo);
                    $setting->value  = $logo;
                }
            }
            if ($setting->field == 'favicon') {
                if ($request->hasFile('favicon')) {

                    //delete old file...
                    Storage::delete('public/settings/' . $setting->value);

                    $filenameWithExt = $request->file('favicon')->getClientOriginalName();
                    $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension       = $request->file('favicon')->getClientOriginalExtension();
                    $favicon         = rand(10, 100) . time() . '.' . $extension;
                    $path            = $request->file('favicon')->storeAs('public/settings', $favicon);
                    $setting->value  = $favicon;
                }
            }
            $setting->save();
        }
        flashWebResponse('updated', 'settings');
        return redirect()->route('admin.settings.index');
    }
}
