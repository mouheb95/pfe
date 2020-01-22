@extends('layouts.base')
@section('container')

        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Contact <b>Us</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
             <div class="container">
                <div class="ct-comment-form">
                    <h4 class="ct-comment-form__title">redondance n'est pas autorise</h4>                   
                    <div class="row ct-u-padding-top-15">
                        <form action="{{route('enseignant.store')}} " method="POST">
                            {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="grade" id="grade" name="grade" required="required" class="form-control" />
                                <label for="grade" class="sr-only">Grade</label>
                            </div>                                                     
                        </div>
                    </div>  
                        <div class="form-group">                 
                            <input type="submit" class="btn btn-motive" value="Confirmer">
                        </div>
                    </form>
                    <br>
                    <form action="{{route('enseignantMatier.store')}} " method="POST">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="enseignant_id">  
                                    @foreach($matiers as $matier)                                  
                                    <option value="{{$matier->id}}">{{$matier->designation}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="matier_id">
                                    @foreach($enseignants as $enseignant)                                    
                                    <option value="{{$enseignant->id}}">{{$enseignant->slug}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">                 
                            <input type="submit" class="btn btn-motive" value="Confirmer">
                        </div>                    
                    </form>
                </div>
            </div>

        </main>

@stop