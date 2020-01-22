@extends('layouts.base')
@section('container')
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">404 <b>Page</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <div class="container">
                <div class="error-page">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                <div class="error-page__content">
                                    <h3>Something's Gone Wrong!</h3>
                                    <p>It seems that the page you were trying to reach doesn’t exist anymore, or maybe it has just moved. Please fill free to contact if the problem persists.</p><a href="index-2.html" class="btn btn-motive">Back to Home</a>
                                </div>
                            </div>
                        </div>
                        <div class="error-page__image hidden-lg text-center">
                            <img src="assets/images/demo-content/404.png" alt="404 Image">
                        </div>
                    </div>
                </div>
            </div>
        </main>
@stop    