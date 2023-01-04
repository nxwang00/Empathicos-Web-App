<?php

namespace App\Http\Controllers\Web\Store\Faq;

use App\Faq;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

/**
 * Faq
 *
 * @package    Faq Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FaqController extends Controller
{

    public function index(Request $request)
    {
        $faqs = Faq::where('status', 1)->get();
        return view('store.pages.faqs.index',compact('faqs'));
    }

}
