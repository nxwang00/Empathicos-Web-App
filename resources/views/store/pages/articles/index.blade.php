@extends('store.layouts.master')
@section('title', '| Article')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="page-title">
            <h1>Article</h1>
        </div>
        <div class="blogpage-wrap">
            <div class="blogpage-in">
                <div class="row blogpage-row">
                    <div class="col-md-8 col-sm-8 col-xs-12 blogpagecnt-col">
                        <div class="blogpagecntcol-in">
                            @foreach($articles as $key => $article)
                            @if($key == 0)
                            <div class="blogpagecnt-mainimg">
                                <div class="bpcntmainimg-wrap">
                                    <div class="bpcntmainimg-in">
                                        <div class="bpcntmainimg">
                                            <img src="{{asset('storage/articles/'.$article->image)}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blogpagecnt-text">
                                <div class="blogpagecnttext-in">
                                    <h2>{{$article->title}}</h2>
                                    <p>{!!htmlspecialchars_decode($article->description)!!}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <div class="blogpagecnt-rpost">
                                <div class="row">
                                    @foreach($articles as $key => $article)
                                    @if($key > 0 && $key <= 3 )
                                    <div class="col-md-4 col-sm-4 col-xs-12 brpost-col">
                                        <div class="brpostcol-in">
                                            <div class="brpostcol-img">
                                                <a href="{{ route('article.show',['slug' => $article->slug]) }}">
                                                    <img class="img-repsonsive" src="{{asset('storage/articles/'.$article->image)}}" alt="" />
                                                </a>
                                            </div>
                                            <div class="brpostcol-text">
                                                <h2><a href="{{ route('article.show',['slug' => $article->slug]) }}">{{Str::words($article->title, '4') }}</a></h2>
                                                <p>{!!htmlspecialchars_decode(Str::words($article->description, '10'))!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 blogpageside-col">
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
                                    @foreach($articles as $key => $article)
                                    @if($key > 3)
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
                                                <p>{!!htmlspecialchars_decode(Str::words($article->description, '17'))!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
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