@extends('store.layouts.master')
@section('title', '| Article')
@section('page-css-link')
@endsection
@section('page-css')
<style type="text/css">
    .bppostsimg-col {
        width: 30%;
    }
    .bppoststext-col {
        padding: 0 0 0 18px;
        width: calc(100% - 30%);
    }
    .bpposts-img img {
        object-fit: cover;
        -moz-object-fit: cover;
        -webkit-object-fit: cover;
        margin: 0;
        height: 100%;
        width: 100%;
    }
    .bpposts-text p {
        font-size: 15px;
    }
    .bpposts-text h2, .bpposts-text h2 a, .bpposts-text h2 a:hover, .bpposts-text h2 a:focus {
        font-size: 25px;
        margin-bottom: 15px;
    }
</style>
@endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="page-title">
            <h1>Article Search Results: {{request()->query('search')}}</h1>
        </div>
        <div class="blogpage-wrap">
            <div class="blogpage-in">
                <div class="row blogpage-row">
                    <div class="col-md-12 col-sm-12 col-xs-12 blogpageside-col">
                        <div class="blogpagesidecol-in">
                            <div class="blogpageside-search">
                                <div class="bpsearch-in">
                                    <form method="get" action="{{route('home.article.search')}}">
                                        @csrf
                                        <div class="bpsearch-fields">
                                            <input type="search" name="search" value="{{request()->query('search')}}" class="form-control">
                                            <button type="submit" class="btn btn-default"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="blogpageside-posts">
                                <div class="bpposts-in">
                                    @if($articles->count() > 0)
                                    @foreach($articles as $key => $article)
                                    <div class="row bpposts-row">
                                        <div class="bppostsimg-col">
                                            <div class="bpposts-img">
                                                <a href="{{ route('article.show',['slug' => $article->slug]) }}">
                                                    <img class="img-responsive" src="{{asset('storage/articles/'.$article->image)}}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="bppoststext-col">
                                            <div class="bpposts-text">
                                                <h2><a href="{{ route('article.show',['slug' => $article->slug]) }}">{{Str::words($article->title, '4') }}</a></h2>
                                                <p>{!!htmlspecialchars_decode(Str::words($article->description, '80'))!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="row bpposts-row">
                                       <h1 style="text-align: center;">Ooops! No article found with: {{request()->query('search')}}</h1>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
@endsection