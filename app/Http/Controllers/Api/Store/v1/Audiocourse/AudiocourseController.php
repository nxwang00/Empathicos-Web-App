<?php

namespace App\Http\Controllers\Api\Store\v1\Audiocourse;

use App\Http\Controllers\Controller;
use App\Maincat;
use App\Mainsubcat;
use Auth;
use Exception;
use Illuminate\Http\Request;
use App\AudioCourse;
use App\AudioCategory;
/**
 * Payment
 *
 * @package    Payment Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class AudiocourseController extends Controller
{

    public function getCategories(Request $request)
    {
        if(!($request->user('api') )){
            return failedApiResponse('Unauthorized', null, 401);
        }

        $cats = AudioCategory::All();

        if($cats->isEmpty()){
           return failedApiResponse('No data found.', null, 400);
        }

        if($cats){
            return successApiResponse('Audio course Categories Data', $cats, 200);
        }

        return failedApiResponse('No data found.', null, 400);

    }

     public function getCategoryCourses(Request $request, $cat_id){
        $catArr = [];
        if(!($request->user('api') )){
            return failedApiResponse('Unauthorized', null, 401);
        }

        if(!($cat_id) && empty($cat_id)){
            return failedApiResponse('category_id can not be null', null, 400);
        }

        $cats = AudioCourse::where('cat_id', $cat_id)->get();

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
                    'image' => !empty($ct->image) ? asset('project/storage/app/public/audio-course/images/'.$ct->image) : '',
                    'audio' => !empty($ct->audio) ? asset('project/storage/app/public/audio-course/audio/'.$ct->audio) : '',
                    'created_at' => $ct->created_at
                );
            }
            return successApiResponse('Audio courses Data', $catArr, 200);
        }
        return failedApiResponse('No data found.', null, 400);
    }

}