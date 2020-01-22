@extends('layouts.base')

@section('container')
	<header data-parallax="50" class="ct-page-header ct-page-header--small">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
            <path d="M0,100 L 100,100 100,0 Z"></path>
        </svg>
        <div class="ct-page-header__inner">
            <div class="container">
                <h1 class="h1 ct-page-header__title">Ajouter <b>Enseignant</b></h1>
            </div>
        </div>
    </header>
 	<main class="ct-blog ct-blog--single">
            <div class="container">
                <div class="row">
                    <!-- *** Blog Content *** -->
                    <div class="col-md-9 ct-blog__content">
                    	<form class="form-group" action="{{route('enseignant.store')}}" method="POST">

				            {{ csrf_field() }}

	                        <div class="ct-comment-form">                            
	                            
	                            <div class="row ct-u-padding-top-15">
	                                <div class="col-md-6">                                
	                                    <div class="form-group">
	                                        <input type="text" placeholder="Nom" id="nom" name="nom" required="required" class="form-control" />
	                                        <label for="nom" class="sr-only">Nom</label>
	                                    </div>
	                                    <div class="form-group">
	                                        <input type="text" placeholder="Prenom" id="prenom" name="prenom" required="required" class="form-control" />
	                                        <label for="prenom" class="sr-only">Prenom</label>
	                                    </div>
	                                    <div class="form-group">
	                                        <input type="text" placeholder="Grade" id="grade" name="grade" required="required" class="form-control" />
	                                        <label for="grade" class="sr-only">Grade</label>
	                                    </div>
	                                    <div class="form-group">
	                                        <input type="file" id="image_signature" name="image_signature" required="required" class="form-control" />
	                                        <label for="image_signature" class="sr-only">Image De Signature</label>
	                                    </div>
	                                    <div class="form-group">
	                                        <input type="date" placeholder="date_naissance" id="date_naissance" name="date_naissance" required="required" class="form-control" />
	                                        <label for="date_de_naissance" class="sr-only">Date de naissance</label>
	                                    </div>
	                                   
	                                </div>
	                            </div>
	                            
	                            <input type="submit" class="btn btn-motive" value="Ajouter">
	                        </div>
                        </form>
                    </div>
                    <!-- *** Sidebar *** -->

                </div>
            </div>
        </main>
    
@stop