<?php

namespace App\Http\Controllers\Api\Store\v1\About;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\About\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\About\IndexRequest;
use App\Http\Requests\Api\Store\v1\About\ShowRequest;
use App\About;
use Illuminate\Http\Request;
/**
 * Abouts
 *
 * @package    About Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class AboutController extends Controller
{

    public function index(Request $request)
    {
        $faqs = About::All();
        if($faqs){
            return showApiResponse('About data', $faqs);
        }
        return failedApiResponse('Oops, could not fetch the data.',null, '201');     
    }

    public function show(ShowRequest $request, About $About)
    {
        return $request->getAbout();
    }

}
