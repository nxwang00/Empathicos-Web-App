<?php

namespace App\Http\Controllers\Api\Store\v1\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\Article\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Article\IndexRequest;
use App\Http\Requests\Api\Store\v1\Article\ShowRequest;

/**
 * Articles
 *
 * @package    Article Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ArticleController extends Controller
{

    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return $provider->getArticles();
    }

    public function show(ShowRequest $request, Article $Article)
    {
        return $request->getArticle();
    }

}
