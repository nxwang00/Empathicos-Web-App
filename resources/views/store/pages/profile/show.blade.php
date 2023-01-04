@extends('store.layouts.master')
@section('title', '| Profile')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    <div class="container">
        <div class="form-theme profiletext-theme">
            <div class="formupper-title">
                <h2>Profile</h2>
            </div>
            <div class="formtheme-in">
                <div class="profiletext-top">
                    <div class="profiletexttop-in">
                        <div class="profiletext-pimg">
                            <div class="profiletextimg-in">
                                @if(!empty($user->image))
                                <img class="img-responsive" src="{{ asset('/storage/profiles/'.$user->image) }}" alt="{{$user->name}}" />
                                @endif
                            </div>
                            <p>Premium</p>
                        </div>
                        <div class="profiletext-name">
                            <h2>{{$user->name}}</h2>
                            <p>{{$user->email}}</p>
                            <div class="profiletext-edit">
                                <a href="{{route('profile.edit')}}">Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profiletext-text">
                    <h2>About Me</h2>
                    <p>{!!$user->about!!}</p>
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