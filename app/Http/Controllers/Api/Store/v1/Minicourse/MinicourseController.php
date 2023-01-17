<?php

namespace App\Http\Controllers\Api\Store\v1\Minicourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MiniCourse;

class MinicourseController extends Controller
{
    public function getCourses($cat_id)
    {
        $courseArr = [];
        $courses = MiniCourse::where('category_id', $cat_id)->get();
        if(!empty($courses)) {
            foreach($courses as $course){
                $courseArr[] = array(
                    'id' => $course->id,
                    'title' => $course->title,
                    'description' => $course->description,
                    'cat_id' => $course->category_id,
                    'image' => !empty($course->image) ? asset('/storage/mini-course/'.$course->image) : '',
                    'created_at' => $course->created_at
                );
            }
            return successApiResponse('Mini Courses Data', $courseArr, 200);
        }
        return failedApiResponse('No data found.', null, 400);
    }
}
