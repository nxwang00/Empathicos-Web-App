@extends('store.layouts.master')
@section('title', '| Character')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
    
    <div class="container">
        <div class="imgntab-wrap">
            {{--
            <div class="imglist-tab">
                <div class="imglisttab-in">
                    <ul>
                        <li>
                            <a href="{{route('badges',['list'=> true])}}"><img class="img-responsive" src="{{asset('assets/store/images/list-tab.png' )}}" alt="list tab" /></a>
                        </li>
                        <li class="active">
                            <a href="{{route('badges.show',base64url_encode($badge->id))}}"><img class="img-responsive" src="{{asset('assets/store/images/img-tab.png' )}}" alt="imge tab" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            --}}
            
            <div class="page-title">
                <h1>{{$badge->name}}</h1>
            </div>
            
            <div class="imgntab-cnt">
                <div class="imgntabcnt-in">
                    
                    <div id="imgntabcnt-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            
                            <div class="imgntabcnt-item item active">
                                <div class="imgntabcntitem-in">
                                    <div class="row imgntabcnt-row">
                                        <div class="col-md-7 col-sm-7 col-xs-12 imgntabcntimg-col">
                                            <div class="imgntabcntimg">
                                                <img class="img-responsive" alt="{{$badge->name}}" src="{{ asset('/storage/badges/'.$badge->image) }}"/>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12 imgntabcnttext-col">
                                            <div class="imgntabcnttext">
                                                <p>{!! $badge->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Controls -->
                        @if(!empty($previous))
                        <a class="left carousel-control" href="{{route('badges.show',base64url_encode($previous))}}" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        @endif
                        @if(!empty($next))
                        <a class="right carousel-control" href="{{route('badges.show',base64url_encode($next))}}" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="imgntab-btm">
                <div class="imgntabbtm-in">

                    <div class="btntheme-wrap" style="margin-bottom: 35px;">
                        <a href="{{route('badge.templates.show',base64url_encode($badge->id))}}" class="btn btn-default btn-lg btn-theme2">Go to your journey</a>
                    </div>

                    <ul>
                        <!-- <li class="tabbtm-nav">
                            <a href="#"><img class="img-responsive" src="{{asset('assets/store/images/tabnav-save.png' )}}" alt="save" /></a>
                        </li> -->
                        <li class="tabbtm-nav tabbtm-like">
                            @if(!empty($is_favorite))
                                <a href="javascript:void(0);" class="favorite-badge" route="{{route('badges.favorites',base64url_encode($badge->id))}}" status="removed" ><img class="img-responsive" src="{{asset('assets/store/images/heart-icon.svg' )}}" alt="remove form favorite" style="width: 60px;" /></a>
                            @else
                                <a href="javascript:void(0);" class="favorite-badge" route="{{route('badges.favorites',base64url_encode($badge->id))}}" status="add" ><img class="img-responsive" src="{{asset('assets/store/images/tabnav-like.png' )}}" alt="add to favorite" /></a>
                            @endif
                        </li>
                        <!-- <li class="tabbtm-nav">
                            <a href="#"><img class="img-responsive" src="{{asset('assets/store/images/tabnav-more.png' )}}" alt="more" /></a>
                        </li> -->
                    </ul>


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
<script type="text/javascript">
    $(document).on('click', '.favorite-badge', function() {
        route = $(this).attr('route');
        console.log(route);
        status = $(this).attr('status');
        $.ajax({
            url: route,
            method: "POST",
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "status":status
            },
            beforeSend: function() {
                
            },
            success: function(data) {
                if (data.status) {
                    location.reload();
                }
            }
        })
    });
</script>
@endsection