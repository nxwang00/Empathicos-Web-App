<?php

namespace App\Http\Controllers\Api\Store\v1\Favorite;

use App\Favorite;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\Favorite\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Favorite\IndexRequest;
use Illuminate\Http\Request;
use App\Badge;
/**
 * Favorites
 *
 * @package    Favorite Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FavoriteController extends Controller
{

    public function index(Request $request)
    {
        $userId = $request->user('api')->id;
        if($userId){
            $badgeIds = Favorite::where('user_id',$userId)->pluck('badge_id');
            if($badgeIds){
                $badges = Badge::whereIn('id',$badgeIds)->get();
                if($badges){
                    foreach($badges as $badge) {
                        $badge->imageURI = asset('storage/badges/' . $badge->image);
                    }
                    return showApiResponse('Badges favorite data', $badges);
                }else{
                     return failedApiResponse('Oops, could not fetch the data.',null, '201');
                }
            }
            return failedApiResponse('Oops, could not fetch the data.',null, '201');
        }
        return failedApiResponse('Authentication failed',null, '201');
    }

}
