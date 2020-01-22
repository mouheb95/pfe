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


<main class="ct-blog ct-blog--single">
            <div class="container">
                <div class="row">
                    <!-- *** Blog Content *** -->
                    <div class="col-md-9 ct-blog__content">
                       <div class="panel-body" style="text-align: right;">
 
                                    <div class="form-group">
                                      <strong>المعرف الوحيد{{": ".$conges->id_enseig}}</strong>
                                    </div>
                                      <div class="form-group">
                                         <strong>الاسم و اللقب {{": ".$conges->nom." ".$conges->prenom}}</strong>
                                      </div>

                                     <div class="form-group">   
                                         <strong>الرتبة او الصنف{{": ".$conges->grade}}</strong>               
                            
                                      </div>

                                     <div class="form-group">  
                                         <strong> الخطة الوطنية {{": ".$conges->stra_nat}} </strong>
                            
                                      </div>

                                     <div class="form-group">
                                           <strong> مركز العمل السابق {{": ".$conges->p_a}} </strong>
                                      </div>

                                      <div class="form-group">
                                           <strong> مركز العمل الحلي {{": ".$conges->p_n}} </strong>
                                     </div>

                                      <div class="form-group">
                                          <strong>المدة المطلوبة   {{": ".$conges->periode}} من {{": ".$conges->depuis}} الى {{": ".$conges->jus}}  بعنوان سنة {{": ".$conges->annee}}   </strong>
                            
                                      </div>

                                      <div class="form-group">
                                        <strong>يوم الراحة الأسبوعية ما عدا يوم الاحد {{": ".$conges->p_t}}  </strong>
                                     </div>

                                      <div class="form-group">
                                          <strong>عنوان مقر السكني طيلة العطلة {{": ".$conges->place}} الترقيم البريدي{{": ".$conges->num_post}} الهاتف{{": ".$conges->tele}}   </strong>
                            
                                      </div>

                                      <div class="form-group">
                                          <strong> الوثائق المصحوبة {{": ".$conges->certif}} </strong>
                                     </div>

                                      <div class="form-group" style="text-align: left;">
                                          <strong> ب {{$conges->ou}} في {{$conges->date_ecrire}}  </strong>
                                      </div>

                                       <div class="form-group" style="text-align: left;">
                                          <strong> امضاء طالب العطلة  </strong>
                                          <img src="{{ asset('images/demo-content/'.$image_signature) }}">
                                      </div>
    

                                
                        </div>
                   
                    </div>
                    <!-- *** Sidebar *** -->

                </div>
            </div>
    </main>

      

                             




@endsection

