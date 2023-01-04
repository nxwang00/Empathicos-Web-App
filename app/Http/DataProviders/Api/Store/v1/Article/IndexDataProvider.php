<?php

namespace App\Http\DataProviders\Api\Store\v1\Article;

use App\Http\Resources\Api\Store\v1\Article\ArticleCollection;
use App\Article;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data results...
    public function getArticles()
    {
        return new ArticleCollection(Article::paginate(25));
    }
}
