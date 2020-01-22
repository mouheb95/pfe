<?php 
use App\niveau;
 $niveaux = Niveau::all();
 ?>

<!DOCTYPE html>
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html><![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html><![endif]-->
<html class="no-js" lang="en">


<!-- Mirrored from confetti.html.themeforest.createit.pl/blog-post-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Mar 2018 13:38:56 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site Templates / Entertainment / Events">
    <meta name="author" content="createIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <script type="text/javascript" src="{{ URL::asset('js/CZ3CFmKcMfCcupa_86mxMcuVsN8.js')}}"></script>
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->    
    <link rel="stylesheet" href="{{ URL::asset('images/favicon.ico') }}"> 
    <link rel="apple-touch-icon" href="{{ URL::asset('images/favicon.png')}}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('images/favicon.png') }}">  -->
    <title>My Confetti - Kids Party Planner HTML Template</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">    
    <!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> 
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/es5-shim.min.js"></script><![endif]-->
</head>

<body class="cssAnimate is-sidebar">
    <!--[if lt IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="ct-preloader">
        <div class="ct-preloader__inner">
            <div class="ct-preloader__spinner"><i class="ct-preloader__1"></i><i class="ct-preloader__2"></i><i class="ct-preloader__3"></i><i class="ct-preloader__4"></i><i class="ct-preloader__5"></i><i class="ct-preloader__6"></i><i class="ct-preloader__7"></i><i class="ct-preloader__8"></i>
            </div>
        </div>
    </div>
    <!-- ******************** -->
    <!-- *** Page Wrapper *** -->
    <!-- ******************** -->
    <div id="ct-js-wrapper" class="ct-page-wrapper">
        <!-- *** Page Navigation *** -->
        <nav class="ct-menu">
            <div class="topbar">
                <div class="topbar__inner">
                    <address class="ct-address ct-footer__address topbar__address"><a href="https://goo.gl/maps/obRcgtwGH5K2" class="media ct-address__box" target="_blank">
                <div class="media-left"><i class="fa fa-map-marker"></i></div>
                <div class="media-body"><span class="media-heading">9870 St Vincent Place, Glasgow, DC 45 Fr 45.</span></div></a><a href="cdn-cgi/l/email-protection.html#10737f7e64717364507d69737f7e76756464793e737f7d" class="media ct-address__box">
                <div class="media-left"><i class="fa fa-envelope"></i></div>
                <div class="media-body"><span class="media-heading"><span class="__cf_email__" data-cfemail="cdaea2a3b9acaeb98da0b4aea2a3aba8b9b9a4e3aea2a0">[email&#160;protected]</span></span></div></a><a href="tel:0123456789" class="media ct-address__box">
                <div class="media-left"><i class="fa fa-phone"></i></div>
                <div class="media-body"><span class="media-heading">(012) 345-6789</span></div></a>
            </address>
                </div>
                <div class="topbar__inner">
                    <ul class="ct-socials list-inline list-unstyled">
                        <li class="ct-socials__item ct-socials__item--facebook"><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="ct-socials__item ct-socials__item--twitter"><a href="https://twitter.com/createitpl"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="ct-socials__item ct-socials__item--flickr"><a href="#"><i class="fa fa-flickr"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="midbar">
                <div class="midbar__inner">
                    <ul class="midbar-nav list-inline">                                               
                        
                        <!-- <li class="nav-item"><a href="{{route('eleve.index')}}">Eleves</a>
                        </li> -->
                        <!-- <li class="nav-item"><a href="{{route('enseignant.index')}}">Enseignant</a>
                        </li> -->

                         @if(Auth::user()!=null)
                         <li class="nav-item"><a href="{{route('user.show',Auth::user()->id)}}">My Profile</a>
                        </li>
                        @endif
                        
                        
                    </ul>
                </div>
                <div class="midbar__inner"><a href="#" class="midbar__search-toggle"><i class="fa fa-search"></i></a>
                </div>
                <div class="midbar__search midbar__search--default">
                    <form class="ct-search form-group">
                        <input id="midbar-search" placeholder="Search..." required="required" name="field[]" class="form-control" />
                        <label for="midbar-search" class="sr-only">Search...</label>
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="navbar navbar-default navbar-fixed">
                <div class="navbar-header">
                    <a href="{{route('home.index')}}" class="navbar-brand">
                        <img src="{{ URL::asset('images/demo-content/logo.png')}}" alt="logo">
                    </a>
                </div>
                    @if(Auth::user()!=null)
                    <form  action="{{ route('logout') }}" method="POST" >
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-motive pull-right" value="Log Out">
                    </form>
                    @else
                    <a href="{{ route('login') }}"  class="btn btn-motive pull-right">Login</a>
                    @endif

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="{{route('home.index')}}">Home</a>
                    </li>                             
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="{{route('eleve.index')}}" class="dropdown-toggle">Eleves<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($niveaux as $niveau)
                            <li>
                                <a style="text-align: center;" href="{{route('niveau.show',$niveau->id)}}">{{$niveau->designation}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </li>

                    <li class="nav-item"><a href="{{route('club.index')}}">Clubs</a>
                    </li>
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="#" class="dropdown-toggle">empty<span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="package-detail-2.html">Tutus &amp; Twinkle Toes</a>
                            </li>
                            <li><a href="package-detail-3.html">Cooking In The Backyard</a>
                            </li>
                            <li><a href="package-detail-4.html">Barnyard Bash With Toddlers</a>
                            </li>
                            <li><a href="package-detail-5.html">Cooking In The Backyard</a>
                            </li>
                            <li><a href="package-detail-6.html">Getting Ready For Indian Party</a>
                            </li>
                        </ul>
                    </li>
                   
                    @if(Auth::user() != null)
                    <li role="presentation" class="dropdown nav-item nav-item" id="markasread" ><a href="#" class="dropdown-toggle" >Notification<span class="bagdet">{{count(auth()->user()->unreadNotifications)}}</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <li>
                                        @forelse(auth()->user()->Notifications as $notification)
                                        @include('notification.'.snake_case(class_basename($notification->type)))
                                        @empty
                                        <a href="#">Empty</a>
                                        @endforelse
                                </li>

                            </li>
                        </ul>
                    </li> 
                    
                    @endif 
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="#" class="dropdown-toggle"> A Effacer<span class="caret"></span></a>
                        <ul class="dropdown-menu">                          
                            <li><a href="blog2.html">7atta bel logique matjich </a>
                            </li>
                            @if(Auth::user()!=null)
                            @if(Auth::user()->role_id == 1)
                            <li role="presentation" class="submenu"><a href="#" class="submenu-toggle">Admin Notification<i class="fa fa-caret-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('contact.index')}}">Messages Contact</a>
                                    </li>
                                    <li><a href="{{route('enseignant.index')}}">Audio Post</a>
                                    </li>
                                    <li><a href="blog-post-9.html">Gallery Post</a>
                                    </li>
                                    <li><a href="blog-post-3.html">Image Post</a>
                                    </li>
                                    <li><a href="blog-post-11.html">Text Post</a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @endif
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a href="{{route('contact.create')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- *** Page Header *** -->
        @yield('container')

        <!-- *** Page Footer *** -->
        <footer class="ct-footer">
            <div class="container">
                <div class="ct-newsletter">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2 class="ct-newsletter__heading"><span><small>.Stay Tuned</small>Sign up   <b>now to our newsletter</b></span></h2>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <p class="ct-newsletter__content">Sign up now and get news about updates, contests, events and so on without being spammed...</p>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <form action="http://confetti.html.themeforest.createit.pl/form/send.php" method="POST" data-email-subject="Newsletter Form" class="ct-newsletter__form form-group from-inline ct-js-validate">
                                <label for="newsletter-input" class="ct-newsletter__label">E-mail Address</label>
                                <input type="email" id="newsletter-input" placeholder="Enter your E-mail" name="field[]" required="required" class="ct-newsletter__input form-control">
                                <button type="submit" class="btn btn-default ct-newsletter__button"><span class="ct-newsletter__submit">Subscribe</span><span class="ct-newsletter__wait"><i class="fa fa-spinner"></i></span>
                                </button><span class="ct-newsletter__subscribed">Thank you for subscribing</span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="widget-title">More About Us</h4>
                                <img src="images/demo-content/logo.png" alt="logo" class="ct-footer__logo">
                                <p>As it so contrasted oh estimating instrument. Size like body some one had. Conduct viewing boy minutes warrant expense.</p>
                                <address class="ct-address ct-footer__address ct-footer__address"><a href="https://goo.gl/maps/obRcgtwGH5K2" class="media ct-address__box" target="_blank">
                      <div class="media-left"><i class="fa fa-map-marker"></i></div>
                      <div class="media-body"><span class="media-heading">9870 St Vincent Place, Glasgow, DC 45 Fr 45.</span></div></a><a href="cdn-cgi/l/email-protection.html#a9cac6c7ddc8cadde9c4d0cac6c7cfccddddc087cac6c4" class="media ct-address__box">
                      <div class="media-left"><i class="fa fa-envelope"></i></div>
                      <div class="media-body"><span class="media-heading"><span class="__cf_email__" data-cfemail="8eede1e0faefedfacee3f7ede1e0e8ebfafae7a0ede1e3">[email&#160;protected]</span></span></div></a><a href="tel:0123456789" class="media ct-address__box">
                      <div class="media-left"><i class="fa fa-phone"></i></div>
                      <div class="media-body"><span class="media-heading">(012) 345-6789</span></div></a>
                  </address>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="widget widget_recent_entries">
                            <div class="widget-inner">
                                <h4 class="widget-title">Recent Posts</h4>
                                <ul>
                                    <li>
                                        <div class="widget-li-image">
                                            <img src="images/demo-content/recent-01.jpg" alt="">
                                        </div>
                                        <div class="widget-li-content">
                                            <h5>Title Comes Here</h5><span>By an outlived insisted procured improved am. Paid hill fine ten now love even leaf.</span><a href="#">August 21, 2015</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-li-image">
                                            <img src="images/demo-content/recent-02.jpg" alt="">
                                        </div>
                                        <div class="widget-li-content">
                                            <h5>Title Comes Here</h5><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-li-image">
                                            <img src="images/demo-content/recent-03.jpg" alt="">
                                        </div>
                                        <div class="widget-li-content">
                                            <h5>Title Comes Here</h5><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="widget widget_flickr">
                            <div class="widget-inner">
                                <h4 class="widget-title">Flickr Gallery</h4>                                
                                <script type="text/javascript" data-cfasync="false" src="{{ URL::asset('js/d07b1474/cloudflare-static/email-decode.min.js')}}"></script><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=group&amp;group=1035848@N23"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ct-footer__copyright"><span>&copy; My Confetti Event Planning 2017 by <a href="http://www.remotedevelopers.eu/"> CreateIT</a></span>
            </div>
        </footer>
    </div>
    <button data-scroll="up" class="ct-btn--scroll-up"><span><i class="fa fa-chevron-up"></i></span>
    </button>
    <!-- *** Mobile Navbar *** -->
    <div class="ct-mobile-navbar">
        <a href="index-2.html" class="ct-mobile-navbar__brand">
            <img src="images/demo-content/logo.png" alt="logo">
        </a>
        <button class="btn btn-default ct-mobile-navbar__toggle">Menu
        </button>
    </div>
    <!-- *** Mobile Menu *** -->
    <div class="ct-mobile-menu">
        <div class="ct-mobile-menu__inner">
            <form class="ct-search form-group">
                <input id="mobile-search" placeholder="Search..." required="required" name="field[]" class="form-control" />
                <label for="mobile-search" class="sr-only">Search...</label>
                <button type="submit"><i class="fa fa-search"></i>
                </button>
            </form>
            <div class="ct-mobile-menu__content">
                <ul class="ct-mobile-menu__nav list-unstyled">
                    <li class="nav-item"><a href="index-2.html">Home</a>
                    </li>
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="about.html" class="dropdown-toggle">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About Us</a>
                            </li>
                            <li><a href="testimonials.html">Testimonials</a>
                            </li>
                            <li><a href="book-party.html">Book Party</a>
                            </li>
                            <li><a href="faq.html">Faq</a>
                            </li>
                            <li><a href="coming-soon.html">Coming Soon</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('club.index')}}">Clubs</a>
                    </li>
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="packages.html" class="dropdown-toggle">Packages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="package-detail-1.html">Coloring Party With Clowns</a>
                            </li>
                            <li><a href="package-detail-2.html">Tutus &amp; Twinkle Toes</a>
                            </li>
                            <li><a href="package-detail-3.html">Cooking In The Backyard</a>
                            </li>
                            <li><a href="package-detail-4.html">Barnyard Bash With Toddlers</a>
                            </li>
                            <li><a href="package-detail-5.html">Cooking In The Backyard</a>
                            </li>
                            <li><a href="package-detail-6.html">Getting Ready For Indian Party</a>
                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown nav-item nav-item"><a href="blog.html" class="dropdown-toggle">Blog<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Elegant Listing</a>
                            </li>
                            <li><a href="blog2.html">Blog List With Post Types</a>
                            </li>
                            <li role="presentation" class="submenu"><a href="blog-post-4.html" class="submenu-toggle">Single Blog Posts<i class="fa fa-caret-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-post-7.html">Video Post</a>
                                    </li>
                                    <li><a href="blog-post-10.html">Audio Post</a>
                                    </li>
                                    <li><a href="blog-post-9.html">Gallery Post</a>
                                    </li>
                                    <li><a href="blog-post-3.html">Image Post</a>
                                    </li>
                                    <li><a href="blog-post-11.html">Text Post</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="contact-us.html">Contact Us</a>
                    </li>
                </ul>
                <div role="separator" class="divider"></div>
                    @if(Auth::user()!=null)
                        <form  action="{{ route('logout') }}" method="POST" >
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-motive pull-right" value="Log Out">
                        </form>
                    @else
                        <a href="{{ route('login') }}"  class="btn btn-motive pull-right">Login</a>
                    @endif
                <div role="separator" class="divider"></div>
                <ul class="ct-mobile-menu__list list-unstyled">
                    <li class="nav-item"><a href="event-picnics.html">Picnics</a>
                    </li>
                    <!-- <li class="nav-item"><a href="{{route('eleve.index')}}">Eleves</a> -->
                    </li>
                    <li class="nav-item"><a href="{{route('enseignant.index')}}">Enseignants</a>
                    </li>
                    <li class="nav-item"><a href="{{route('niveau.create')}}">classes</a>
                    </li>
                    <li class="nav-item"><a href="{{route('groupe.create')}} ">Groupes</a>
                    </li>
                    <li class="nav-item"><a href="event-schools.html">Schools</a>
                    </li>
                    <li class="nav-item"><a href="event-special.html">Special Events</a>
                    </li>
                    <li class="nav-item"><a href="event-birthday.html">Birthday Parties</a>
                    </li>
                </ul>
            </div>
            <address class="ct-address ct-footer__address ct-mobile-menu__address"><a href="https://goo.gl/maps/obRcgtwGH5K2" class="media ct-address__box" target="_blank">
            <div class="media-left"><i class="fa fa-map-marker"></i></div>
            <div class="media-body"><span class="media-heading">9870 St Vincent Place, Glasgow, DC 45 Fr 45.</span></div></a><a href="cdn-cgi/l/email-protection.html#5a3935342e3b392e1a37233935343c3f2e2e3374393537" class="media ct-address__box">
            <div class="media-left"><i class="fa fa-envelope"></i></div>
            <div class="media-body"><span class="media-heading"><span class="__cf_email__" data-cfemail="a2c1cdccd6c3c1d6e2cfdbc1cdccc4c7d6d6cb8cc1cdcf">[email&#160;protected]</span></span></div></a><a href="tel:0123456789" class="media ct-address__box">
            <div class="media-left"><i class="fa fa-phone"></i></div>
            <div class="media-body"><span class="media-heading">(012) 345-6789</span></div></a>
        </address>
            <ul class="ct-socials list-inline list-unstyled">
                <li class="ct-socials__item ct-socials__item--facebook"><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="ct-socials__item ct-socials__item--twitter"><a href="https://twitter.com/createitpl"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="ct-socials__item ct-socials__item--flickr"><a href="#"><i class="fa fa-flickr"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ******************* -->
    <!-- *** JavaScripts *** -->
    <!-- ******************* -->
    <script data-cfasync="false" src="js/email-decode.min.js"></script><script src="{{ URL::asset('js/confetti.min.js')}}"></script>
    <script src="{{ URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/notification.js')}}"></script>
<!-- switcher -->
<script src="{{ URL::asset('js/demo.js')}}"></script>
<div id="stylechooser">
  <div class="easyBox flat">
    <p class="light h5">Motive <strong>Color</strong></p><a id="styleToggle" href="#" class="halflings cog"><i class="fa fa-cogs"></i></a>
  </div>
  <div class="easyBox">
    <div class="mkSpace">
      <ul class="demoList clearfix">
        <li><a href="#" title="blue" data-value="blue"><span style="background:#2196F3;" class="demoColor"></span></a></li>
        <li><a href="#" title="red" data-value="red"><span style="background:#F44336;" class="demoColor"></span></a></li>
        <li><a href="#" title="teal" data-value="teal"><span style="background:#009688;" class="demoColor"></span></a></li>
        <li><a href="#" title="green" data-value="green"><span style="background:#4CAF50;" class="demoColor"></span></a></li>
        <li><a href="#" title="yellow" data-value="yellow"><span style="background:#FFEB3B;" class="demoColor"></span></a></li>
        <li><a href="#" title="orange" data-value="orange"><span style="background:#FF9800;" class="demoColor"></span></a></li>
        <li><a href="#" title="purple" data-value="purple"><span style="background:#9C27B0;" class="demoColor"></span></a></li>
        <li><a href="#" title="violet" data-value="violet"><span style="background: #673AB7;" class="demoColor"></span></a></li>
      </ul>
    </div>
  </div>
  <div class="easyBox">
    <div class="title">
      <p class="light h6">Body <strong>Layout</strong></p>
    </div>
    <div class="switch-toggle">
      <div class="onoffswitch">
        <input id="myonoffswitch" type="checkbox" data-refresh="true" data-value="boxed" data-clear-container-deselected="#patternContainer" name="onoffswitch" class="onoffswitch-checkbox">
        <label for="myonoffswitch" class="onoffswitch-label"><span class="onoffswitch-inner"></span></label>
      </div>
    </div>
  </div>
  <div class="easyBox">
    <div class="title">
      <p class="light h6">Background <strong>Pattern</strong></p>
    </div>
    <div id="patternContainer">
      <div class="mkSpace">
        <ul class="demoList clearfix">
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn1" data-value="ptn1" class="refresh"><span style="background: url('images/bg_pattern_01.png')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn2" data-value="ptn2" class="refresh"><span style="background: url('images/bg_pattern_02.png')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn3" data-value="ptn3" class="refresh"><span style="background: url('images/bg_pattern_03.png')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn4" data-value="ptn4" class="refresh"><span style="background: url('images/bg_pattern_04.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn5" data-value="ptn5" class="refresh"><span style="background: url('images/bg_pattern_05.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn6" data-value="ptn6" class="refresh"><span style="background: url('images/bg_pattern_06.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn7" data-value="ptn7" class="refresh"><span style="background: url('images/bg_pattern_07.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn8" data-value="ptn8" class="refresh"><span style="background: url('images/bg_pattern_08.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn9" data-value="ptn9" class="refresh"><span style="background: url('images/bg_pattern_09.png')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn10" data-value="ptn10" class="refresh"><span style="background: url('images/bg_pattern_10.png')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn11" data-value="ptn11" class="refresh"><span style="background: url('images/bg_pattern_11.jpg')" class="demoPattern"></span></a></li>
          <li><a data-refresh="true" data-dependent="#myonoffswitch:not(.demoActive)" href="#" title="ptn12" data-value="ptn12" class="refresh"><span style="background: url('images/bg_pattern_12.png')" class="demoPattern"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- end switcher -->
</body>


<!-- Mirrored from confetti.html.themeforest.createit.pl/blog-post-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Mar 2018 13:38:56 GMT -->
</html>