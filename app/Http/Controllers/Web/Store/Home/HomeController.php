<?php

namespace App\Http\Controllers\Web\Store\Home;

use App\Badge;
use App\BadgeCategory;
use App\Http\Controllers\Controller;
use App\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $categories = BadgeCategory::where('status', 1)->get();
        return view('store.index', compact('categories'));
    }

    public function category(Request $request, $id)
    {
        $template_count = Template::where('category_id', base64url_decode($id))->count();
        if ($request->has('category')) {
            $template_count = Template::where('category_id', base64url_decode($request->query('category')))->count();
        }

        $previous = null;
        $next     = null;

        $template = Template::where('category_id', base64url_decode($id))->first();

        if (!empty($template)) {
            $previous = Template::where('category_id', base64url_decode($id))->where('id', '<', $template->id)->max('id');
            $next     = Template::where('category_id', base64url_decode($id))->where('id', '>', $template->id)->min('id');
        }

        //if not first template...
        if ($request->has('category')) {
            $template = Template::where('category_id', base64url_decode($request->query('category')))->where('id', base64url_decode($id))->first();

            $previous = Template::where('category_id', base64url_decode($request->query('category')))->where('id', '<', $template->id)->max('id');
            $next     = Template::where('category_id', base64url_decode($request->query('category')))->where('id', '>', $template->id)->min('id');
        }

        // $templateField = 1;

        // if (!empty($template)) {
        //     switch ($template->field) {
        //         case '2':
        //             $templateField = 2;
        //             break;
        //         case '3':
        //             $templateField = 3;
        //             break;
        //         case '4':
        //             $templateField = 4;
        //             break;
        //         case '5':
        //             $templateField = 5;
        //             break;
        //         case '6':
        //             $templateField = 6;
        //             break;
        //         default:
        //             $templateField = 1;
        //             break;
        //     }
        // }

        // $category = BadgeCategory::with('badges','templates')->where('status',1)->where('id',base64url_decode($id))->first();
        // $galleries = DB::table('badge_categories_images')->where('badge_id',$category->id)->pluck('image');
        return view('store.pages.home.category', compact('template', 'template_count', 'previous', 'next'));
    }

    public function badge(Request $request, $id)
    {
        $badges = Badge::where('status', 1);
        if (!empty($request->show) && $request->show == 'all') {
            $badges = $badges->get();
        } else {
            $badges = $badges->where('id', base64url_decode($id))->first();
        }
        return view('store.pages.home.badge', compact('badges'));
    }

}
