<?php

namespace App\Http\Controllers\Web\Dashboard\Audiocategory;

use App\Mainsubcat;
use App\AudioCourse;
use App\AudioCategory;
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

class AudiocategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = AudioCategory::All();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                            // $btn = viewButton('admin.main-categories', $row);
                            $btn = editButton('admin.audio-course-category', $row);
                            $btn .= trashButton('admin.audio-course-category', $row);
                            return $btn;
                    })
                    ->addColumn('description', function($row){
                               return strip_tags($row->description);
                    })
                    ->rawColumns(['action','description'])
                    ->make(true);
        }
        return view('dashboard.pages.audio-course.audiocategoryindex', []);
    }

    public function create(Request $request)
    {
        $mainCat = AudioCategory::All();
        return view('dashboard.pages.audio-course.create', compact('mainCat'));
    }

    public function store(Request $request)
    {
        if($request->cat_id == ""){
            flashWebResponse('error','Please select the category');
            return redirect()->back(); 
        }
        if($request->title == ""){
            flashWebResponse('error','Please enter the title');
            return redirect()->back(); 
        }
        
        if(empty($request->audio)){
            flashWebResponse('error','Please add an audio file');
            return redirect()->back(); 
        }
        
        if ($request->hasFile('image') && !empty($request->hasFile('image'))) {
            $destinationPath = 'images';
            $filenameWithExt = $request->image->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $audioImage          = time() . '.' . $extension;
            $request->image->storeAs('public/audio-course/images', $audioImage);
        } else {
            $audioImage = '';
        }
        
        if ($request->hasFile('audio')) {
           
            $filenameWithExt = $request->audio->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('audio')->getClientOriginalExtension();
            $audioFile          = time() . '.' . $extension;
            $request->audio->storeAs('public/audio-course/audio', $audioFile);
        } else {
            $audioFile = '';
        }
        
        
        $title = $request->title;
        $description = $request->description;
        $catId = $request->cat_id;
        
        $already = AudioCourse::where('title', $title)->where('cat_id', $catId)->first();
        if($already){
            flashWebResponse('error','The title already exists');
            return redirect()->back(); 
        }
        
        $mainCat = new AudioCourse();
        $mainCat->title = $title;
        $mainCat->cat_id = $catId;
        $mainCat->description = $description;
        $mainCat->image = $audioImage;
        $mainCat->audio = $audioFile;
        
        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('created', 'Audio Course created successfully!');
            return redirect()->route('admin.audio-course.index');  
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
        $data = AudioCategory::where('id', $id)->first();
        return view('dashboard.pages.audio-course.audiocategoryedit', compact('data'));
    }

    public function updatedata(Request $request)
    {
        if($request->title == ""){
            flashWebResponse('error','Please enter the title');
            return redirect()->back(); 
        }
        
       
        $mainCat = AudioCategory::findOrFail($request->id);
        $mainCat->title = $request->title;
        $mainCat->description = $request->description;

        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('updated', 'Audio course category');
            return redirect()->route('admin.audio-course-category.index');  
        }
        
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy($id)
    {
        
        if (request()->ajax()) {
            $cat = AudioCategory::findOrFail($id);
            if($cat){
                $cat->delete();
               return  trashedWebResponse('Audio Course Category');
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
