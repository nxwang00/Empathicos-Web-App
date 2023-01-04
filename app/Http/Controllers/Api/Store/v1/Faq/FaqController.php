<?php

namespace App\Http\Controllers\Api\Store\v1\Faq;

use App\Faq;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\Faq\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Faq\IndexRequest;
use Illuminate\Http\Request;
/**
 * Faqs
 *
 * @package    Faq Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FaqController extends Controller
{

    public function index(Request $request)
    {
        $faqs = Faq::All();
        if($faqs){
            return showApiResponse('FAQ data', $faqs);
        }
        return failedApiResponse('Oops, could not fetch the data.',null, '201');     
    }
}
