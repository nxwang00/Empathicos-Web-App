<?php

namespace App\Http\Controllers\Web\Dashboard\Mainsubcategory;

use App\Maincat;
use App\Mainsubcat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
/**
 * Badge Categories
 *
 * @package    Badge Category Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class MainsubcategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Mainsubcat::All();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            // $btn = viewButton('admin.main-categories', $row);
                            $btn = editButton('admin.main-subcategories', $row);
                            $btn .= trashButton('admin.main-subcategories', $row);
                            return $btn;
                    })
                    ->addColumn('description', function($row){


                            return strip_tags($row->description);
                    })
                     ->addColumn('cat_id', function($row){
                        $mainCat = Maincat::where('id',$row->cat_id)->first();
                        return $mainCat->title;
                    })
                    ->rawColumns(['action','description'])
                    ->make(true);
        }
        return view('dashboard.pages.main-subcategories.index', []);
    }

    public function create(Request $request)
    {
        $mainCat = Maincat::All();
        return view('dashboard.pages.main-subcategories.create', compact('mainCat'));
    }

    public function store(Request $request)
    {
        if($request->title == ""){
            flashWebResponse('error','Please enter the title');
            return redirect()->back();
        }
        if($request->cat_id == ""){
            flashWebResponse('error','Please select the category');
            return redirect()->back();
        }

        if ($request->hasFile('image')) {
            $destinationPath = 'images';
            $filenameWithExt = $request->image->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
           $request->image->storeAs('public/main-subcategories', $avatar);
        } else {
            $avatar = '';
        }

        $title = $request->title;
        $description = $request->description;
        $catId = $request->cat_id;
        $minicourse = $request->minicourse;

        $already = Mainsubcat::where('title', $title)->where('cat_id', $catId)->first();
        if($already){
            flashWebResponse('error','The title already exists');
            return redirect()->back();
        }

        $mainCat = new Mainsubcat();
        $mainCat->title = $title;
        $mainCat->cat_id = $catId;
        $mainCat->description = $description;
        $mainCat->image = $avatar;
        if (!is_null($minicourse))
            $mainCat->is_mini_course = true;

        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('created', 'Sub Category created successfully!');
            return redirect()->route('admin.main-subcategories.index');
        }

        flashWebResponse('error','Data not saved');
        return redirect()->back();

    }

    public function show(ShowRequest $request, BadgeCategory $badge_category)
    {
        return view('dashboard.pages.badge-categories.show', $request->getBadgeCategory());
    }

    public function edit($id)
    {
        $categories = Maincat::All();
        $data = Mainsubcat::where('id', $id)->first();
        return view('dashboard.pages.main-subcategories.edit', compact('data','categories'));
    }

    public function updatedata(Request $request)
    {
        if($request->title == ""){
            flashWebResponse('error','Please enter the title');
            return redirect()->back();
        }
        if($request->cat_id == ""){
            flashWebResponse('error','Please select the category');
            return redirect()->back();
        }

        $mainCat = Mainsubcat::findOrFail($request->id);
        $mainCat->title = $request->title;
        $mainCat->cat_id = $request->cat_id;
        $mainCat->description = $request->description;
        if ($request->hasFile('image')) {
            $destinationPath = 'images';
            $filenameWithExt = $request->image->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $request->image->storeAs('public/main-subcategories', $avatar);
        } else {
            $avatar = $mainCat->image;
        }
        $mainCat->image = $avatar;
        if (is_null($request->minicourse))
            $mainCat->is_mini_course = NULL;
        else
            $mainCat->is_mini_course = true;

        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('updated', 'Main Sub category');
            return redirect()->route('admin.main-subcategories.index');
        }

        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy($id)
    {

        if (request()->ajax()) {
            $cat = Mainsubcat::findOrFail($id);
            if($cat){
                $cat->delete();
               return  trashedWebResponse('Main Sub Category');
            }
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, BadgeCategory $badge_category)
    {
        if (request()->ajax()) {
            return ($badge_category = $request->persist()->getBadgeCategory()) ? statusWebResponse(($badge_category->status == 1) ? 'Category has been active successfully.' : 'Category has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function templates(Request $request, BadgeCategory $badge_category)
    {
        return view('dashboard.pages.badge-categories.templates',['category'=>$badge_category, 'templates'=>$badge_category->templates]);
    }
}
