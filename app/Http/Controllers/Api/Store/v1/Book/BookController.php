<?php

namespace App\Http\Controllers\Api\v1\Book;

use App\Book;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\v1\Book\IndexDataProvider;
use App\Http\Requests\Api\v1\Book\IndexRequest;

/**
 * Books
 *
 * @package    Book Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class BookController extends Controller
{

    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return $provider->getBooks();
    }
}
