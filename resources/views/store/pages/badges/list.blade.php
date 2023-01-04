@extends('store.layouts.master')
@section('title', '| Badge')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    
        
            <div class="container">
                <div class="characpage-wrap">
                
                    <div class="page-title">
                        <h1>{{$badges->first()->name}}</h1>
                    </div>
                    
                    <div class="imglist-tab">
                        <div class="imglisttab-in">
                            <ul>
                                 <li class="active">
                                    <a href="{{route('badges',['list'=> true])}}"><img class="img-responsive" src="{{asset('assets/store/images/list-tab.png' )}}" alt="list tab" /></a>
                                </li>
                                <li >
                                    <a href="{{route('badges.show',base64url_encode($badges->first()->id))}}"><img class="img-responsive" src="{{asset('assets/store/images/img-tab.png' )}}" alt="imge tab" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                        
                    <div class="favoritepage-wrap">
                    
                       @foreach($badges as $key => $badge)
                     
                        <div class="favoritep-box">
                            <div class="row favoritep-row">
                                <div class="favoritepimg-col">
                                    <div class="favoritepimgcol-in">
                                        <a href="{{route('badges.show',base64url_encode($badge->id))}}">
                                            <img alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->image) }}" />
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="favoriteptext-col">
                                    <div class="favoriteptextcol-in">
                                        <div class="row favoriteptitle-row">
                                            <div class="favoritep-title">
                                                <h2><a href="{{route('badges.show',base64url_encode($badge->id))}}">{{$badge->name}}</a></h2>
                                            </div>
                                        </div>
                                        <p>{!! $badge->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                      
                        
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