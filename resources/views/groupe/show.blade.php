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
    	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Parent</th>
      <th scope="col">avatar</th>
      <th scope="col">date de naissance</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($eleves as $eleve)
    <tr>
      <th scope="row">1</th>
      <td>{{$eleve->nom}}</td>
      <td>{{$eleve->prenom}}</td>
      <td>{{$eleve->tuteur->user->name}}</td>
      <td>{{$eleve->avatar}}</td>
      <td>{{$eleve->date_naissance}}</td>
      
     
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</main>


@stop