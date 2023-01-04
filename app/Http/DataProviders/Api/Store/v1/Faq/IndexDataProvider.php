<?php

namespace App\Http\DataProviders\Api\Store\v1\Faq;

use App\Http\Resources\Api\Store\v1\Faq\FaqCollection;
use App\Faq;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getFaqs()
    {
        return new FaqCollection(Faq::paginate(25));
    }
}
