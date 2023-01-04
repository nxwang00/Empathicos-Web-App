<?php

namespace App\Http\Controllers\Api\v1\Card;

use App\Card;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\v1\Card\IndexDataProvider;
use App\Http\Requests\Api\v1\Card\IndexRequest;

/**
 * Cards
 *
 * @package    Card Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class CardController extends Controller
{

    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return $provider->getCards();
    }
}
