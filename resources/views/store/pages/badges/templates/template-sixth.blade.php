@php
$value = json_decode($template->value);
@endphp
{{--
<div class="imglist-tab">
    <div class="imglisttab-in">
        <ul>
            <li>
                <a href="{{route('category',['list'=> true])}}"><img class="img-responsive" src="{{asset('assets/store/images/list-tab.png' )}}" alt="list tab" /></a>
            </li>
            <li class="active">
                <a href="{{route('badge.templates.show',base64url_encode($template->id))}}"><img class="img-responsive" src="{{asset('assets/store/images/img-tab.png' )}}" alt="imge tab" /></a>
            </li>
        </ul>
    </div>
</div>
--}}
<div class="page-title">
    <h1>{{$value->title}} </h1>
</div>
<div class="imgntab-cnt">
    <div class="imgntabcnt-in imtabcnt-6">
        
        <div id="imgntabcnt-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                
                <div class="imgntabcnt-item item active">
                    <div class="imgntabcntitem-in">
                        <div class="row imgntabcnt-row">
                            <div class="col-md-12 col-sm-12 col-xs-12 imgntabcntimg-col">
                                <div class="imgntabcntimg-wrap">
                                    <div class="imgntabcntimg">
                                        <img class="img-responsive" src="{{asset('storage/badge-templates/'.$value->image)}}" alt="{{$value->title}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 imgntabcnttext-col">
                                <div class="imgntabcnttext-wrap">
                                    <div class="imgntabcnttext">
                                <p>{{$value->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 @if(!empty($previous))
                <a class="left carousel-control" style="left: 0px; top: 30%;" href="{{route('badge.templates.show',['id' => base64url_encode($previous),'category'=>base64url_encode($template->badge_id)])}}" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                @endif
                @if(!empty($next))
                <a class="right carousel-control" style="right: 0px; top: 30%;" href="{{route('badge.templates.show',['id' => base64url_encode($next),'category'=>base64url_encode($template->badge_id)])}}" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
                @endif
                
            </div>
            
        </div>
    </div>
</div>
<div class="imgntab-btm">
    <div class="imgntabbtm-in">
        {{--
        <ul>
            <li class="tabbtm-nav">
                <a href="#"><img class="img-responsive" src="{{asset('assets/store/images/tabnav-save.png' )}}" alt="save" /></a>
            </li>
            <li class="tabbtm-nav tabbtm-like">
                <a href="#"><img class="img-responsive" src="{{asset('assets/store/images/tabnav-like.png' )}}" alt="like" /></a>
            </li>
            <li class="tabbtm-nav">
                <a href="#"><img class="img-responsive" src="{{asset('assets/store/images/tabnav-more.png' )}}" alt="more" /></a>
            </li>
        </ul>
        --}}
       @if(empty($next))
            <div class="btntheme-wrap" style="margin-top: 35px;">
                 <a href="{{route('badges')}}" class="btn btn-default btn-lg btn-theme2">Go Back</a>
            </div>
        @endif
    </div>
</div>