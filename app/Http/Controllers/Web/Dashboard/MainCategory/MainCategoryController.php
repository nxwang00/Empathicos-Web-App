<?php

namespace App\Http\Controllers\Web\Dashboard\MainCategory;

use App\Maincat;
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

class MainCategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Maincat::All();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                            // $btn = viewButton('admin.main-categories', $row);
                            $btn = editButton('admin.main-categories', $row);
                            $btn .= trashButton('admin.main-categories', $row);
                            return $btn;
                    })
                    ->addColumn('description', function($row){
   
                           
                            return strip_tags($row->description);
                    })
                    ->rawColumns(['action','description'])
                    ->make(true);
        }
        return view('dashboard.pages.main-categories.index', []);
    }

    public function create(Request $request)
    {
        $mainCat = Maincat::latest()->get();
        return view('dashboard.pages.main-categories.create', $mainCat);
    }

    public function store(Request $request)
    {
        if($request->title == ""){
            flashWebResponse('error','Please enter the title');
            return redirect()->back(); 
        }
        
        $title = $request->title;
        $description = $request->description;
        
        $already = MainCat::where('title', $title)->first();
        if($already){
            flashWebResponse('error','The title already exists');
            return redirect()->back(); 
        }
        
        $mainCat = new Maincat();
        $mainCat->title = $title;
        $mainCat->description = $description;
        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('created', 'Main category');
            return redirect()->route('admin.main-categories.index');  
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
        $data = MainCat::where('id', $id)->first();
        return view('dashboard.pages.main-categories.edit', compact('data'));
    }

    public function updatedata(Request $request)
    {
        $mainCat = MainCat::findOrFail($request->id);
        $mainCat->title = $request->title;
        $mainCat->description = $request->description;
        $saveData = $mainCat->save();
        if($saveData){
            flashWebResponse('updated', 'Main category');
            return redirect()->route('admin.main-categories.index');  
        }
        
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy($id)
    {
        
        if (request()->ajax()) {
            $cat = MainCat::findOrFail($id);
            if($cat){
                $cat->delete();
               return  trashedWebResponse('Main Category');
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
