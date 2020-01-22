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
                                      <strong>المعرف الوحيد{{": ".$conges->enseignant_id}}</strong>
                                    </div>
                                      <div class="form-group">
                                         <strong>الاسم و اللقب {{": ".$conges->nom." ".$conges->prenom}}</strong>
                                      </div>

                                     <div class="form-group">   
                                         <strong>الرتبة او الصنف{{": ".$conges->grade}}</strong>               
                            
                                      </div>

                                     <div class="form-group">  
                                         <strong> الخطة الوطنية {{": ".$conges->national_strategie}} </strong>
                            
                                      </div>

                                     <div class="form-group">
                                           <strong> مركز العمل السابق {{": ".$conges->ancien_post_travail}} </strong>
                                      </div>

                                      <div class="form-group">
                                           <strong> مركز العمل الحلي {{": ".$conges->nouveau_post_travail}} </strong>
                                     </div>

                                      <div class="form-group">
                                          <strong>المدة المطلوبة   {{": ".$conges->periode}} من {{": ".$conges->date_debut}} الى {{": ".$conges->date_fin}}  بعنوان سنة {{": ".$conges->annee_scolaire_id}}   </strong>
                            
                                      </div>

                                      <div class="form-group">
                                        <strong>يوم الراحة الأسبوعية ما عدا يوم الاحد {{": ".$conges->jours_non_ouvert}}  </strong>
                                     </div>

                                      <div class="form-group">
                                          <strong>عنوان مقر السكني طيلة العطلة {{": ".$conges->emplacement_vacance}} الترقيم البريدي{{": ".$conges->code_postale}} الهاتف{{": ".$conges->telephone}}   </strong>
                            
                                      </div>

                                      <div class="form-group">
                                          <strong> الوثائق المصحوبة {{": ".$conges->certification}} </strong>
                                     </div>

                                      <div class="form-group" style="text-align: left;">
                                          <strong> ب {{$conges->emplacement_ecrire}} في {{$conges->date_ecrire}}  </strong>
                                      </div>

                                       <div class="form-group" style="text-align: left;">
                                          <strong> امضاء طالب العطلة  </strong>
                                          <img src="{{ asset('images/demo-content/'.$image_signature) }}">
                                      </div>
                                      
                						</div>
                					</div>
                				</div>
		
               </section>   

        </main>   
@endsection