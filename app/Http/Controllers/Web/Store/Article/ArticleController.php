<?php

namespace App\Http\Controllers\Web\Store\Article;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::where('status', 1)->orderBy('id', 'desc')->get();
        return view('store.pages.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        
        $article  = Article::where('slug', $slug)->first();
        $articles = Article::where('status', 1)->orderBy('id', 'desc')->whereNotIn('slug', [$slug])->take(15)->get();
        return view('store.pages.articles.show', compact('article', 'articles'));
    }

    public function search(Request $request)
    {
        $articles = Article::where('status', 1);

        if (!empty($request->search)) {
            $q        = $request->input('search');
            $articles = $articles->where(function ($query) use ($q) {
                $query->where('title', 'LIKE', "%{$q}%")->orWhere('description', 'LIKE', "%{$q}%");
            });
        }

        $articles = $articles->get();


        return view('store.pages.articles.search', compact('articles'));
    }

}
