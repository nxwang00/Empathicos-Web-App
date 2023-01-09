<?php

namespace App\Http\Controllers\Web\Dashboard\Minicourse;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Minicourse\IndexDataProvider;
use App\MiniCourse;
use App\Mainsubcat;
use Storage;
use Illuminate\Http\Request;

/**
 * Templates
 *
 * @package    Template Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class MinicourseController extends Controller
{
    public function index(Request $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.mini-course.index', $provider->meta());
    }

    public function create()
    {
        $categories = Mainsubcat::where('is_mini_course', 1)->pluck('title', 'id');
        return view('dashboard.pages.mini-course.create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $course = new MiniCourse;
        $course->category_id = $request->category;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->image = $this->storeFilesIfExists($request, 'image');

        $saved = $course->save();

        if ($saved) {
            flashWebResponse('created', 'Mini Course');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.mini-courses.show', $course->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show($id)
    {
        $course = MiniCourse::find($id);
        $category = Mainsubcat::where('id', $course->category_id)->pluck('title')->implode('');
        return view('dashboard.pages.mini-course.show', ['course'=>$course, 'category'=>$category]);
    }

    public function edit($id)
    {
        $course = MiniCourse::find($id);
        $categories = Mainsubcat::where('is_mini_course', 1)->pluck('title', 'id');
        return view('dashboard.pages.mini-course.edit', ['course'=>$course, 'categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $category_id = $request->input('category');
        $title       = $request->input('title');
        $description = $request->input('description');
        $image       = $this->storeFilesIfExists($request, 'image');

        $course = MiniCourse::find($id);
        $course->category_id = $category_id;
        $course->title = $title;
        $course->description = $description;
        $course->image = $image;

        $saved = $course->save();

        if($saved){
            flashWebResponse('updated', 'Mini Course');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.mini-courses.show', $course->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        if (request()->ajax()) {
            $course = MiniCourse::find($id);

            if (!empty($course->image)) {
                Storage::delete('public/mini-course/' . $course->image);
            }

            $deleted = $course->delete();

            return $deleted ? trashedWebResponse('Mini Course') : errorWebResponse();
        }
        return httpWebResponse();
    }

    protected function storeFilesIfExists($request, $file_name = ''): string
    {
        //delete old file & template...
        if ($request->hasFile($file_name)) {
            if ($file_name == 'image' && $request->old_image) {
                Storage::delete('public/mini-course/' . $request->old_image);
            }

            $filenameWithExt = $request->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . rand(10, 100) . '.' . $extension;
            $path            = $request->file($file_name)->move('storage/mini-course', $image_name);
            return $image_name;
        }
        return $request->old_image;
    }
}
