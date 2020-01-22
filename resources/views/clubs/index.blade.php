@extends('layouts.base')
@section('container')
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Clubs <b>Simple Description</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
      
            <section class="ct-u-background--gray-lighter">
                <div class="container">
                    <h2 class="ct-section-header">All   <b>Clubs</b></h2>
                    <div class="row ct-u-padding-bottom-30">

                        @foreach($clubs as $club)
                        <div class="col-md-3 col-sm-6">
                            <a href="#" class="ct-icon-box">
                                <div class="ct-icon-box__inner">
                                    <div class="ct-icon-box__icon">
                                        <div class="inner">
                                            <svg width="39px" height="40px" viewbox="0 0 39 40" class="ct-icon ct-icon--boot">
                                                <path d="{{$club->symbole}}"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="ct-icon-box__header">{{$club->nom}}</h3>
                                    <p class="ct-icon-box__content">{{$club->domaine}}
                                    </p>
                                </div>
                            </a>
                        </div>


                        @endforeach
                        <div class="clearfix ct-u-padding-bottom-20"></div>
                    </div>
                </div>
            </section>
            
          
            </section>
        </main>
       @stop