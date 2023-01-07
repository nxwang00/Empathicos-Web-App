<?php

namespace App\Http\Controllers\Api\Store\v1\Maincat;

use App\Http\Controllers\Controller;
use App\Maincat;
use App\Mainsubcat;
use Auth;
use Exception;
use Illuminate\Http\Request;

/**
 * Payment
 *
 * @package    Payment Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class MaincatController extends Controller
{

    public function get(Request $request)
    {
        if(!($request->user('api') )){
            return failedApiResponse('Unauthorized', null, 401);
        }

        $cats = Maincat::All();

        if($cats->isEmpty()){
           return failedApiResponse('No data found.', null, 400);
        }

        if($cats){
            return successApiResponse('Main Categories Data', $cats, 200);
        }

        return failedApiResponse('No data found.', null, 400);

    }

    public function getSubCategories(Request $request, $cat_id){
        $catArr = [];

        $cats = Mainsubcat::where('cat_id', $cat_id)->get();

        if($cats->isEmpty()){
            return failedApiResponse('No data found.', null, 400);
        }
        if($cats){
            foreach($cats as $ct){
                $catArr[] = array(
                    'id' => $ct->id,
                    'title' => $ct->title,
                    'description' => $ct->description,
                    'cat_id' => $ct->cat_id,
                    'image' => !empty($ct->image) ? asset('/storage/main-subcategories/'.$ct->image) : '',
                    'created_at' => $ct->created_at
                );
            }
            return successApiResponse('Dashboard Sub Categories Data', $catArr, 200);
        }
        return failedApiResponse('No data found.', null, 400);
    }

    public function getPersonalMessage()
    {
        $mainCat = Maincat::where('title', "Personal Message")->first();
        $subCat = Mainsubcat::where('cat_id', $mainCat->id)->first();
        if ($subCat) {
            $rst = [];
            $rst['id'] = $subCat->id;
            $rst['title'] = $subCat->title;
            $rst['description'] = $subCat->description;
            $rst['image'] = !empty($subCat->image) ? asset('/storage/main-subcategories/'.$subCat->image) : '';
            $rst['created_at'] = $subCat->created_at;

            return successApiResponse('Personal Message Data', $rst, 200);
        }
        return failedApiResponse('No data found.', null, 400);
    }
}