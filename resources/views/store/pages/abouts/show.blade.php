@extends('store.layouts.master')
@section('title', '| Blog')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
                
    <div class="container">
        <div class="aboutpage-wrap">
            
            <div class="page-title">
                <h2>About {{$about->page}}</h2>
            </div>
            
            <div class="aboutpage-in">
                <div class="aboutpage">
                    <div class="aboutpage-top">
                        <div class="row abtop-row">
                            <div class="abtop-col abtoptitle-col">
                                <h2>{{$about->name}}</h2>
                            </div>
                            <div class="abtop-col abtopimg-col">
                                <div class="abtop-img">
									<img class="img-responsive" src="{{asset('storage/abouts/'.$about->image)}}" alt="" />
                                </div>
                            </div>
                            <div class="abtop-col abtoptext-col">
                                <ul>
                                   <li>Website : {{$about->website}}</li>
									<li>Course : {{$about->course}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="aboutpage-text">
                        <p>{!!$about->description!!}</p>
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