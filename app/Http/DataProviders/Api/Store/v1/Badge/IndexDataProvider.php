<?php

namespace App\Http\DataProviders\Api\Store\v1\Badge;

use App\Http\Resources\Api\Store\v1\Badge\BadgeCollection;
use App\Badge;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getBadges()
    {
        return new BadgeCollection(Badge::paginate(25));
    }
}
