@extends('layouts.base')
@section('container')
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Some <b>Thoughts</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <!-- *** Testimonial Slider *** -->
            <div class="container">
                <div data-items-lg="3" data-items-sm="2" class="ct-slick ct-js-slick ct-slick--arrows4 ct-u-margin-top-30 ct-u-margin-bottom-50">
                    @foreach($tuteurs as $tuteur)                    
                        <div class="item">
                            <div class="ct-testimonial">
                                <div class="ct-testimonial__inner">
                                    <div class="ct-testimonial__image">
                                        <a href="{{route('tuteur.show',$tuteur)}}"><img src="images/demo-content/team-02.jpg" alt="Carmen Mendez" /></a>
                                    </div>
                                    <h4 class="ct-testimonial__name">{{$tuteur->etat_civil}}</h4>
                                    <h5 class="ct-testimonial__job">Full Time Mom</h5>
                                    <p class="ct-testimonial__content">“I had the best time and, as promised, everyone got in without a problem. I will definitely use them for my next party.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clearfix hidden-xs ct-u-margin-bottom-35"></div>
            </div>
           
        </main>
        @stop