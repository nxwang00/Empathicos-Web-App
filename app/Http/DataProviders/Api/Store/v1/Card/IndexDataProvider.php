<?php

namespace App\Http\DataProviders\Api\v1\Card;

use App\Http\Resources\Api\v1\Card\CardCollection;
use App\Card;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getCards()
    {
        return new CardCollection(Card::paginate(25));
    }
}
