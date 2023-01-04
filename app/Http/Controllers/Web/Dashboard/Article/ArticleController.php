<?php

namespace App\Http\Controllers\Web\Dashboard\Article;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Article\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Article\CreateRequest;
use App\Http\Requests\Web\Dashboard\Article\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Article\EditRequest;
use App\Http\Requests\Web\Dashboard\Article\IndexRequest;
use App\Http\Requests\Web\Dashboard\Article\ShowRequest;
use App\Http\Requests\Web\Dashboard\Article\StatusRequest;
use App\Http\Requests\Web\Dashboard\Article\StoreRequest;
use App\Http\Requests\Web\Dashboard\Article\UpdateRequest;
use App\Article;

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
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.articles.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.articles.create', $request->getArticle());
    }

    public function store(StoreRequest $request)
    {
        if ($article = $request->persist()->getArticle()) {
            flashWebResponse('created', 'article');
            return redirect()->route('admin.articles.show', $article->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Article $article)
    {
        return view('dashboard.pages.articles.show', $request->getArticle());
    }

    public function edit(EditRequest $request, Article $article)
    {
        return view('dashboard.pages.articles.edit', $request->getArticle());
    }

    public function update(UpdateRequest $request, Article $article)
    {
        if ($article = $request->persist()->getArticle()) {
            flashWebResponse('updated', 'article');
            return redirect()->route('admin.articles.show', $article->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Article $article)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Article') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Article $article)
    {
        if (request()->ajax()) {
            return ($article = $request->persist()->getArticle()) ? statusWebResponse(($article->status == 1) ? 'Article has been active successfully.' : 'Article has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }
}
