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
                        <form action="{{route('matier.store')}} " method="POST">
                            {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="designation" id="designation" name="designation" required="required" class="form-control" />
                                <label for="designation" class="sr-only">designation</label>
                            </div> 
                            <div class="form-group">
                                <input type="text" placeholder="description" id="description" name="description" required="required" class="form-control" />
                                <label for="description" class="sr-only">description</label>
                            </div>   
                            <div class="form-group">
                                <input type="float" placeholder="coefficient" id="coefficient" name="coefficient" required="required" class="form-control" />
                                <label for="coefficient" class="sr-only">coefficient</label>
                            </div>                                                       
                        </div>
                    </div>                   
                    <input type="submit" class="btn btn-motive" value="Confirmer">
                    </form>
                </div>
            </div>
        </div>
    </main>

@stop
