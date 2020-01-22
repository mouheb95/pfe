@extends('layouts.base')
@section('container')

        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">welcome <b>{{Auth::user()->name}}</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main class="ct-blog ct-blog--single">
            <div class="container">
                <div class="row">
                    <!-- *** Blog Content *** -->
                    <div class="col-md-9 ct-blog__content">
                        <article class="ct-blog-post ct-blog-post--image">
                            <div class="ct-blog-post__media">
                                <img src="{{URL::asset('images/demo-content/blog-01.png')}}" alt="Cupcake Paper Flowers" />
                            </div>
                            <div class="ct-blog-post__body">
                                <div class="ct-blog-post__date"><span class="ct-blog-post__day">21</span><span class="ct-blog-post__month">august</span>
                                </div>
                                <div class="ct-blog-post__description"> <span class="ct-blog-post__author">{{Auth::user()->slug}}</span>
                                    @if(Auth::user()->role_id == 3)
                                    <a href="#" class="ct-blog-post__category"><span>{{$enseignant->grade}}</span></a>
                                    @endif
                                    <a href="blog-post-1.html" class="ct-blog-post__comments"><span>3 Comments</span></a>
                                </div>
                                <h3 class="h4 ct-blog-post__title">Cupcake Paper Flowers</h3>
                                <div class="ct-blog-post__content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex nibh, eleifend sodalesui lacus id, dictum vehicula magna. Duis elementum mauris rutrum congue malesuada. Suspen disse placerat lorem id nibh aliquam
                                        porta sit amet fringilla purus. Nulla condimentum nisiti sed arcu gravida, quis euismod eros auctor. Sed consequat vel lacus eu faucibus. Donec con sequat et augue at feugiat. Aliquam malesuada accumsan orci eget
                                        consectetur. Quisque ut interdum elit. Ut posuere ultrices metus, a commodo justo hendrerit nec.</p>
                                    <p>Nam condimentum, nunc a egestas scelerisque, sapien nisl malesuada mi, ac consectetur mauris nulla vitae orci. Ut venenatis dapibus quam at tempus. Curabitur purus odio, portti tor sed massa eu, iaculis condimentum
                                        augue. Suspendisse potenti. Maecenas aliquam metus lorem, vel lobortis purus luctus vel. Etiam vitae libero magna. Mauris eget velit fauci bus, iaculis tellus in, mattis nisl.</p>
                                    <blockquote>“Cras non lorem molestie, malesuada urna sit amet, vestibulum leom. Sed pellentesque tortor ut lorem congue fermentum. ”</blockquote>
                                    <p>Quisque efficitur, massa ac pellentesque imperdiet, est ante convallis dolor, vitae mollis nulla nunc eget lorem. In id lectus ut lacus facilisis consequat quis non eros. Aliquam augue felis, consequat bibendum dui
                                        vitae, dapibus tincidunt ante.</p>
                                    <p>Aenean auctor velit quis elit luctus tincidunt. Sed lacus ipsum, blandit non sodales quis, ornare in sem. Proin sodales feugiat lacinia.</p>
                                </div>
                            </div>
                        </article>
                        <div class="ct-comment ct-comment--featured">
                            <div class="ct-comment__inner media">
                                <div class="media-left ct-comment__avatar">
                                    <img src="images/demo-content/team-01.jpg" alt="" class="media-object">
                                </div>
                                <div class="media-body ct-comment__body">
                                    <h4 class="media-heading ct-comment__heading">Carmen Browns   <small>- Creative Party Planner</small></h4>
                                    <p class="ct-comment__content">She has been planning professional events for over five years, specializing in corporate, family &amp; children’s events. Carmen’s specialty is creating extremely detailed events.</p>
                                </div>
                            </div>
                        </div>
                        <h4 class="ct-comment__title">2 Comments</h4>
                        <div class="ct-comment">
                            <div class="ct-comment__inner media">
                                <div class="media-left ct-comment__avatar">
                                    <img src="images/demo-content/team-01.jpg" alt="" class="media-object">
                                </div>
                                <div class="media-body ct-comment__body">
                                    <h4 class="media-heading ct-comment__heading">Carmen Browns   <small>- Creative Party Planner</small><a href="#" class="ct-comment__reply"><i class="fa fa-reply"></i><span>Reply</span></a></h4>
                                    <p class="ct-comment__content">She has been planning professional events for over five years, specializing in corporate, family &amp; children’s events. Carmen’s specialty is creating extremely detailed events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ct-comment ct-comment--spaced">
                            <div class="ct-comment__inner media">
                                <div class="media-left ct-comment__avatar">
                                    <img src="images/demo-content/team-01.jpg" alt="" class="media-object">
                                </div>
                                <div class="media-body ct-comment__body">
                                    <h4 class="media-heading ct-comment__heading">Carmen Browns   <small>- Creative Party Planner</small><a href="#" class="ct-comment__reply"><i class="fa fa-reply"></i><span>Reply</span></a></h4>
                                    <p class="ct-comment__content">She has been planning professional events for over five years, specializing in corporate, family &amp; children’s events. Carmen’s specialty is creating extremely detailed events.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ct-comment-form">
                            <h4 class="ct-comment-form__title">Leave Comment</h4>
                            <p>We promise that your email address will not be published.</p>
                            <div class="row ct-u-padding-top-15">
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                                                                
                        </div>
                    </div>
                    <!-- *** Sidebar *** -->
                    <div class="col-md-3">
                        <aside class="ct-sidebar ct-blog__sidebar">
                            <div class="ct-sidebar__inner">
                                <form class="ct-search form-group">
                                    <input id="blog-search" placeholder="Search" required="required" name="field[]" class="form-control" />
                                    <label for="blog-search" class="sr-only">Search</label>
                                    <button type="submit"><i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <div class="widget widget_recent_entries">
                                    <div class="widget-inner">
                                        <h4 class="widget-title">Recent Posts</h4>
                                        <ul>
                                            <li>
                                                <div class="widget-li-content"><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-li-content"><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-li-content"><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_archive">
                                    @if(Auth::user()->role_id == 3)
                                    <div class="widget-inner">
                                        <h4 class="widget-title">Groupe List</h4>
                                        <ul>
                                                @foreach($groupes_enseignants as $groupes_enseignant)
                                                <li><a href="{{route('groupe.show',$groupes_enseignant->groupe_id)}}"><span class="pull-left">{{$groupes_enseignant->groupe->designation
                                                }}</span><span class="pull-right">(16)</span></a>
                                                </li>
                                                @endforeach
                                        </ul>
                                    </div>
                                    @elseif(Auth::user()->role_id == 4)
                                     <div class="widget widget_archive">
                                    <div class="widget-inner">
                                        <h4 class="widget-title">kids List</h4>
                                        <ul>
                                                @if($eleves)
                                                @foreach($eleves as $eleve)
                                                <li><a href="{{route('eleve.show',$eleve->id)}}"><span class="pull-left">{{$eleve->nom
                                                }}</span><span class="pull-right">{{$eleve->groupe->designation}}</span></a>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                                <div class="widget">
                                    <div class="widget-inner">
                                        <h4 class="widget-title">About Us</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </div>
                                <div class="widget widget_recent_entries">
                                    <div class="widget-inner">
                                        <h4 class="widget-title">Lastest Posts</h4>
                                        <ul>
                                            <li>
                                                <div class="widget-li-image">
                                                    <img src="images/demo-content/latest-01.png" alt="Party Pool">
                                                </div>
                                                <div class="widget-li-content"><span>To make this treat, you will need to lorem ipsum</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-li-image">
                                                    <img src="images/demo-content/latest-02.png" alt="Outside parties">
                                                </div>
                                                <div class="widget-li-content"><span>Blue colors of Jell-O...</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-li-image">
                                                    <img src="images/demo-content/latest-03.png" alt="Clown">
                                                </div>
                                                <div class="widget-li-content"><span>Skewers or Cake...</span><a href="#">August 21, 2015</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget widget_tag_cloud">
                                                    <div class="widget-inner">
                                                        <h4 class="widget-title">Tag Cloud</h4>
                                                        <div class="tagcloud"><a href="{{route('conge.create')}}" class="tag-link-0">Annoncer une Absence</a><a href="{{route('eleve.create')}}" class="tag-link-1">Kids</a><a href="#" class="tag-link-2">Gaming</a><a href="#" class="tag-link-3">Goods</a><a href="#" class="tag-link-4">Costume</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <button class="ct-sidebar__mobile-toggle"></button>
                    </div>
                </div>
            </div>
        </main>


@stop