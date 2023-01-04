<?php

namespace App\Http\DataProviders\Api\Store\v1\About;

use App\Http\Resources\Api\Store\v1\About\AboutCollection;
use App\About;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getAbouts()
    {
        return new AboutCollection(About::paginate(25));
    }
}
