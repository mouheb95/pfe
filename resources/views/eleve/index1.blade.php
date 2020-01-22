@extends('layouts.base')


@section('container')

 <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Our <b>Blog</b></h1>
                </div>
            </div>
        </header>

                        <div class="ct-isotope-container">
                            <div class="ct-isotope-filtering">
                                <button class="btn btn-gray-o is-active" data-filter="*">Show All
                                </button>
                                <button class="btn btn-gray-o" data-filter=".coordinators">Coordinators
                                </button>
                                <button class="btn btn-gray-o" data-filter=".partyplanner">Party Planner
                                </button>
                                <button class="btn btn-gray-o" data-filter=".creatives">Creatives
                                </button>
                                <button class="btn btn-gray-o" data-filter=".chiefevent">Chief Event
                                </button>
                            </div>
                        <div class="ct-isotope-gallery ct-isotope-gallery--lg-4 ct-isotope-gallery--md-3 ct-isotope-gallery--sm-2 ct-isotope-gallery--xs-1" style="position: relative; height: 1480px;">
                            <figure class="ct-isotope-item ct-isotope-item--with-content isotope-grid-sizer partyplanner" style="position: absolute; left: 0%; top: 0px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-01.jpg')}}" alt="Astra Fear">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Astra Fear</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content coordinator" style="position: absolute; left: 49.931%; top: 0px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-02.jpg')}}" alt="Jenna Kensons">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Jenna Kensons</h4>
                                            <p class="ct-isotope-item__content">From small birthday parties to large family-oriented celebration, she makes sure every detail is ok.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content june creatives" style="position: absolute; left: 0%; top: 362px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-03.jpg')}}" alt="Kris Bronson">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Kris Bronson</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content may chiefevent" style="position: absolute; left: 49.931%; top: 362px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-04.jpg')}}" alt="Elvina Ramsey">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Elvina Ramsey</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content august chiefevent" style="position: absolute; left: 0%; top: 725px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-05.jpg')}}" alt="Stacia Tasker">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Stacia Tasker</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content july coordinators" style="position: absolute; left: 49.931%; top: 725px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-06.jpg')}}" alt="Isbel Griffin">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Isbel Griffin</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content june coordinators" style="position: absolute; left: 0%; top: 1087px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-07.jpg')}}" alt="Sloan Street">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Sloan Street</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                            <figure class="ct-isotope-item ct-isotope-item--with-content may creatives" style="position: absolute; left: 49.931%; top: 1087px;">
                                <div class="ct-isotope-item__media">
                                    <img src="{{ URL::asset('images/demo-content/team-08.jpg')}}" alt="Kori Tipton">
                                    <div class="ct-isotope-item__hover">
                                        <div class="ct-isotope-item__inner">
                                            <h4 class="ct-isotope-item__header">Kori Tipton</h4>
                                            <p class="ct-isotope-item__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
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
                                </div>
                            </figure>
                        </div>
                    </div>



<table border="1px">
    <th>
        <td>nom</td>
        <td>prenom</td>
        <td>groupe</td>
        <td>tuteur</td>
    </th>
    <tbody>
        @foreach($eleves as $eleve)
    <tr>
        <td>{{$eleve->nom}}</td>
        <td>{{$eleve->prenom}}</td>
        <td>{{$eleve->groupe}}</td>
        <td>{{$eleve->tuteur}}</td>
    </tr>
    @endforeach
    </tbody>
</table>


            <a href="{{route('eleve.create')}}" class="link">Ajouter un eleve</a>

@endsection



