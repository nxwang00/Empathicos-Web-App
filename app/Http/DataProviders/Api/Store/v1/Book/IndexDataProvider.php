<?php

namespace App\Http\DataProviders\Api\v1\Book;

use App\Http\Resources\Api\v1\Book\BookCollection;
use App\Book;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getBooks()
    {
        return new BookCollection(Book::paginate(25));
    }
}
