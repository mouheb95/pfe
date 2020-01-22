@extends('layouts.base')

@section('container')
<header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">مطلب <b>عطلة</b></h1>
                </div>
            </div>
        </header>
  
  <main>

            <section class="container">

                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                            	<div style="text-align: center;" >
                            		<strong>مطلب عطلة</strong>
                            	</div>
                        
                  
                                     <div class="panel-body" style="text-align: right;">

                            	 	<div class="form-group">
                            	 		<strong>المعرف الوحيد{{": ".$conge->id_enseig}}</strong>
                					</div>
                            	 	<div class="form-group">
                						 <strong>الاسم و اللقب {{": ".$conge->nom." ".$conge->prenom}}</strong>
                					</div>

                                     <div class="form-group">   
                                     <strong>الرتبة او الصنف{{": ".$conge->grade}}</strong>               
                						
                                      </div>

                                     <div class="form-group">  
                                     	<strong> الخطة الوطنية {{": ".$conge->stra_nat}} </strong>
                						
                                      </div>

                                     <div class="form-group">
                                     	<strong> مركز العمل السابق {{": ".$conge->p_a}} </strong>
                						 </div>

                                      <div class="form-group">
                                      	<strong> مركز العمل الحلي {{": ".$conge->p_n}} </strong>
                						 </div>

                                      <div class="form-group">
                                      	<strong>المدة المطلوبة   {{": ".$conge->periode}} من {{": ".$conge->depuis}} الى {{": ".$conge->jus}}  بعنوان سنة {{": ".$conge->annee}}   </strong>
                						
                                      </div>

                                      <div class="form-group">
                                      	<strong>يوم الراحة الأسبوعية ما عدا يوم الاحد {{": ".$conge->p_t}}  </strong>
                						  </div>

                                      <div class="form-group">
                                      	<strong>عنوان مقر السكني طيلة العطلة {{": ".$conge->place}} الترقيم البريدي{{": ".$conge->num_post}} الهاتف{{": ".$conge->tele}}   </strong>
                						
                                      </div>

                                      <div class="form-group">
                                      	<strong> الوثائق المصحوبة {{": ".$conge->certif}} </strong>
                						  </div>

                                      <div class="form-group" style="text-align: left;">
                                      	<strong> ب {{$conge->ou}} في {{$conge->date_ecrire}}  </strong>
                                      </div>

                                       <div class="form-group" style="text-align: left;">
                                       <img src="{{ asset('images/demo-content/'.$image_signature) }}">
                						          </div>
                                      
                						</div>
                					</div>
                				</div>
		
               </section>   

        </main>   
@endsection