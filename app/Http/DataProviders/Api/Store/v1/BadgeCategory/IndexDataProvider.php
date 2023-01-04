<?php

namespace App\Http\DataProviders\Api\Store\v1\BadgeCategory;

use App\BadgeCategory;
use App\Http\Resources\Api\Store\v1\BadgeCategory\BadgeCategoryCollection;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getCategories()
    {
        return new BadgeCategoryCollection(BadgeCategory::paginate(25));
    }
}
