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
                <a href="{{route('home.category',base64url_encode($template->id))}}"><img class="img-responsive" src="{{asset('assets/store/images/img-tab.png' )}}" alt="imge tab" /></a>
            </li>
        </ul>
    </div>
</div>
<div class="page-title">
    <h1>{{$value->title . '/' . $template_count}} </h1>
</div>
--}}
<div class="imgntab-cnt">
    <div class="imgntabcnt-in">
        <div id="imgntabcnt-carousel" class="carousel slide" data-ride="carousel">
            <div class="imgntabcnt-item item active">
                <div class="imgntabcntitem-in">
                    <div class="row imgntabcnt-row">
                        <div class="col-md-7 col-sm-7 col-xs-12 imgntabcntimg-col">
                            <div class="imgntabcntimg">
                                <img class="img-responsive" src="{{asset('storage/templates/'.$value->image)}}" alt="{{$value->title}}" />
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 imgntabcnttext-col">
                            <div class="imgntabcnttext">
                                <h1>{{strtoupper($template->category->name)}}</h1>
                                <p>{{$value->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            @if(!empty($previous) && !request()->query('template'))
            <a class="left carousel-control" href="{{route('home.category',['id' => base64url_encode($previous),'category'=>base64url_encode($template->category_id)])}}" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            @endif
          

            @if(!empty($next))
            <a class="right carousel-control" href="{{route('home.category',['id' => base64url_encode($next),'category'=>base64url_encode($template->category_id)])}}" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span>
            </a>
            @endif

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
               <a href="{{route('home')}}" class="btn btn-default btn-lg btn-theme2">Go Back</a>
            </div>
        @endif
    </div>
</div>