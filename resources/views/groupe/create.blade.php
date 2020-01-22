@extends('layouts.base')
@section('container')

        <!-- *** Page Header *** -->
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Ajouter des <b>groupes</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <!-- *** Features *** -->
            <div class="container">
                <div class="ct-comment-form">
                    <h4 class="ct-comment-form__title">redondance n'est pas autorise</h4>                   
                    <div class="row ct-u-padding-top-15">
                        <form action="{{route('groupe.store')}} " method="POST">
                            {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="designation" id="designation" name="designation" required="required" class="form-control" />
                                <label for="designation" class="sr-only">Designation</label>
                            </div>
                            <div class="form-group">
                                <select name="niveau_id">
                                    @foreach($niveaux as $niveau)
                                    <option value="{{$niveau->id}} ">{{$niveau->designation}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>                   
                    <input type="submit" class="btn btn-motive" value="Confirmer">
                    </form>
                </div>
            </div>
        </main>
      @stop