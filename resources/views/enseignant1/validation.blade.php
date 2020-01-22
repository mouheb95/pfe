@extends('layouts.base')

@section('container')
	<header data-parallax="50" class="ct-page-header ct-page-header--small">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
            <path d="M0,100 L 100,100 100,0 Z"></path>
        </svg>
        <div class="ct-page-header__inner">
            <div class="container">
                <h1 class="h1 ct-page-header__title"><b>Enseignant Conge</b></h1>
            </div>
        </div>
    </header>
 	<main class="ct-blog ct-blog--single">
            <div class="container">
                <div class="row">
                    <!-- *** Blog Content *** -->
                    <div class="col-md-9 ct-blog__content">
                    	
                        <h3>votre code du signature est :<strong>{{$enseignant->signature}}</strong></h3>
                      <img src="{{ asset('images/demo-content/'.$enseignant->image_signature) }}">

                    </div>
                    <!-- *** Sidebar *** -->

                </div>
            </div>
        </main>
    
@stop