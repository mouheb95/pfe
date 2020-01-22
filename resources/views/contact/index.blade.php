@extends('layouts.base')
@section('container')

            <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Contacts <b>Send</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <div class="container ct-u-padding-top-30">
                <div class="row">
                    <!-- *** Blog Content *** -->
                    <div class="col-md-9 ct-blog__content">
                        @foreach($contact_sends as $contact_send)                
                        <div class="ct-comment">
                            <div class="ct-comment__inner media">
                                <div class="media-left ct-comment__avatar">
                                    <img src="images/demo-content/team-01.jpg" alt="" class="media-object">
                                </div>
                                <div class="media-body ct-comment__body">
                                    <h4 class="media-heading ct-comment__heading">{{ $contact_send->nom}}   <small>-@if($contact_send->lue == 0) <span>(unread) @else (readed)</span> @endif</small><a href="#" class="ct-comment__reply"><i class="fa fa-reply"></i><span>Reply</span></a></h4>
                                    <p class="ct-comment__content">{{$contact_send->message}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

            </div>   
        </main>
       
@stop