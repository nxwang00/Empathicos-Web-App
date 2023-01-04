<?php

namespace App\Http\Controllers\Web\Store\About;

use App\About;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    public function show($id)
    {
        $about = About::findOrFail(base64url_decode($id));
        return view('store.pages.abouts.show', compact('about'));
    }

}
