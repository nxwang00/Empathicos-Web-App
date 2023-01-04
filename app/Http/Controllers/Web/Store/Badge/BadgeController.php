<?php

namespace App\Http\Controllers\Web\Store\Badge;

use App\Badge;
use App\BadgeTemplate;
use App\Favorite;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

/**
 * Badge
 *
 * @package    Badge Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class BadgeController extends Controller
{

    public function index(Request $request)
    {
        $badges = Badge::where('status', 1)->get();
        if ($request->has('list')) {
            return view('store.pages.badges.list', compact('badges'));
        }
        return view('store.pages.badges.index', compact('badges'));
    }

    public function show(Request $request, $id)
    {
        $badge = Badge::where('status', 1)->where('id', base64url_decode($id))->first();

        $is_favorite = null;
        if (Auth::check()) {
            $is_favorite = Favorite::where(['user_id' => Auth::id(), 'badge_id' => $badge->id])->first();
        }

        $previous = Badge::where('status', 1)->where('id', '<', $badge->id)->max('id');
        $next     = Badge::where('status', 1)->where('id', '>', $badge->id)->min('id');
        return view('store.pages.badges.show', compact('badge', 'previous', 'next','is_favorite'));
    }

    public function templates(Request $request, $id)
    {

        $field          = 'first';
        $template_count = BadgeTemplate::where('badge_id', base64url_decode($id))->count();
        if ($request->has('category')) {
            $template_count = BadgeTemplate::where('badge_id', base64url_decode($request->query('category')))->count();
        }

        $previous = null;
        $next     = null;

        $template = BadgeTemplate::where('badge_id', base64url_decode($id))->first();
        if (!empty($template)) {
            $previous = BadgeTemplate::where('badge_id', base64url_decode($id))->where('id', '<', $template->id)->max('id');
            $next     = BadgeTemplate::where('badge_id', base64url_decode($id))->where('id', '>', $template->id)->min('id');
        }

        //if not first template...
        if ($request->has('category')) {
            $template = BadgeTemplate::where('badge_id', base64url_decode($request->query('category')))->where('id', base64url_decode($id))->first();
            $previous = BadgeTemplate::where('badge_id', base64url_decode($request->query('category')))->where('id', '<', $template->id)->max('id');
            $next     = BadgeTemplate::where('badge_id', base64url_decode($request->query('category')))->where('id', '>', $template->id)->min('id');
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
        return view('store.pages.badges.templates', compact('template', 'template_count', 'previous', 'next'));

        // $spirits = BadgeSpirit::where('badge_id', base64url_decode($id))->paginate(25);
        // $badge = Badge::with('templates')->where('status',1)->where('id',base64url_decode($id))->first();

        // return view('store.pages.badges.templates', compact('badge'));
    }

    public function favorites(Request $request, $id)
    {
        $request->validate([
            'status'   => 'required',
        ]);

        $badge = Badge::where('status', 1)->where('id', base64url_decode($id))->first();

        $msg = 'Something went wrong, please try again later...';
        //removed form favorite...
        if ($request->has('status') && $request->status == 'removed') {

            $favorite = Favorite::where([
                'user_id'  => Auth::user()->id,
                'badge_id' => $badge->id,
            ]);

            $msg = ($favorite->delete()) ? 'Badge has been removed successfully form favorite.' : 'Badge could not able to remove form favorite., please try again later...';
        }
        // add to favorite...
        if ($request->has('status') && $request->status == 'add') {

            $favorite = Favorite::create([
                'user_id'  => Auth::user()->id,
                'badge_id' => $badge->id,
            ]);
            $msg = (!empty($favorite)) ? 'Badge has been added successfully form favorite.' : 'Badge could not able to add form favorite., please try again later...';

        }
        return response()->json(['status' => 'success', 'title' => 'Success!', 'text' => $msg, 'redirect' => true]);
    }


}
