@if(Request::segment(1) == '')
 <div class="sitefooter-in">
@else
 <div class="sitefooter-in">
@endif


            <div class="container">
                <div class="row">
                
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="footer-logo">
                                <a href="{{route('home')}}">
                                    <img class="img-responsive" src="{{asset('assets/store/images/site-logo.png')}}" alt="logo" />
                                </a>
                            </div>
                        </div>

                     <div class="col-md-6 co-sm-6 col-xs-12">
                            <div class="footer-img">
                                <a href="{{route('badges')}}"><img class="img-responsive" src="{{asset('assets/store/images/heaven-door.png')}}" alt="logo" /></a>
                            </div>
                        </div>
                        
                    
                        <div class="col-md-3 co-sm-3 col-xs-12">
                        <div class="social-menu">
                               <ul>
                                    <li>
                                        <a target="_blank" href="{{get_setting_field('facebook')}}"><img src="{{asset('assets/store/images/facebook-icon.svg')}}" alt="Facebook" /></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{get_setting_field('twitter')}}"><img src="{{asset('assets/store/images/twitter-icon.svg')}}" alt="Twitter" /></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{get_setting_field('instagram')}}"><img src="{{asset('assets/store/images/instagram-icon.svg')}}" alt="Instagram" /></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{get_setting_field('linkedin')}}"><img src="{{asset('assets/store/images/linkedin-icon.svg')}}" alt="Linkedin" /></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
</div>

    
 
        
