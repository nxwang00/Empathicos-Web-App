<?php

namespace App\Http\Controllers\Web\Store\Favorite;

use App\Badge;
use App\Favorite;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

/**
 * Favorite
 *
 * @package    Favorite Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FavoriteController extends Controller
{

    public function index(Request $request)
    {
        $favorites = Favorite::where('user_id', Auth::id())->pluck('badge_id');
        $badges    = null;
        if (!empty($favorites)) {
            $badges = Badge::whereIn('id', $favorites)->get();
        }
        return view('store.pages.favorites.index', compact('badges'));
    }

}
