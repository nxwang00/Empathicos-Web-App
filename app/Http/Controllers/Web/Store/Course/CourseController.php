<?php

namespace App\Http\Controllers\Web\Store\Course;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::where('status', 1)->orderBy('id', 'desc')->take(15)->get();
        return view('store.pages.courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course  = Course::findOrFail(base64url_decode($id));
        $courses = Course::where('status', 1)->orderBy('id', 'desc')->whereNotIn('id', [base64url_decode($id)])->take(15)->get();
        return view('store.pages.courses.show', compact('course', 'courses'));
    }

    public function search(Request $request)
    {
        $courses = Course::where('status', 1);

        if (!empty($request->search)) {
            $q        = $request->input('search');
            $courses = $courses->where(function ($query) use ($q) {
                $query->where('title', 'LIKE', "%{$q}%")->orWhere('description', 'LIKE', "%{$q}%");
            });
        }

        $courses = $courses->get();

        return view('store.pages.courses.search', compact('courses'));
    }

}
