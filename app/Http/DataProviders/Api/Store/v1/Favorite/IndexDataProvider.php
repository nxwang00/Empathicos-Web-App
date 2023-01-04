<?php

namespace App\Http\DataProviders\Api\Store\v1\Favorite;

use App\Badge;
use App\Favorite;
use App\Http\Resources\Api\Store\v1\Badge\BadgeCollection;
use Auth;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getFavorites()
    {
        $favorites = Favorite::where('user_id', Auth::id())->pluck('badge_id');
        $badges    = null;

        if (!empty($favorites)) {
            $badges = Badge::whereIn('id', $favorites)->get();
        }
        
        return new BadgeCollection($badges);

    }
}
