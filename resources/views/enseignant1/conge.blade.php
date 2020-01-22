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
  
            
                    <div class=="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div style="text-align: center;" >
                                        <strong>مطلب عطلة</strong>
                                    </div>
                                    <form action="{{  route('demande_conge') }}" method="post">
                                        {{ csrf_field() }}
                                     <div class="panel-body" style="text-align: right;">

                                        <div class="form-group">
                                            <input required="required" type="number" name="id_enseig" id="المعرف الوحيد" value="{{ old('id_enseig') }}">
                                            <label for="المعرف الوحيد">المعرف الوحيد</label>
                                         </div>
                                        <div class="form-group">
                                            <input required="required" type="text" name="nom" id="الاسم" value="{{ old('nom') }}">
                                            <label for="الاسم">الاسم</label>
                                         </div>
                                         <div class="form-group">
                                            <input required="required" type="text" name="prenom" id="اللقب" value="{{ old('prenom') }}">
                                            <label for="اللقب">اللقب</label>
                                          </div>

                                         <div class="form-group">                  
                                            <input required="required" type="text" name="grade" id="الرتبة او الصنف" value="{{ old('grade') }}">     
                                            <label for="الرتبة او الصنف">الرتبة او الصنف</label>
                                          </div>

                                         <div class="form-group">  
                                            <input required="required" type="text" name="stra_nat" id="الخطة الوطنية" value="{{ old('stra_nat') }}">
                                            <label for="الخطة الوطنية">الخطة الوطنية</label>
                                          </div>

                                         <div class="form-group">
                                            <input required="required" type="text" name="p_a" id="مركز العمل السابق" value="{{ old('p_a') }}">
                                            <label for="مركز العمل السابق">مركز العمل السابق</label>
                                          </div>

                                          <div class="form-group">
                                            <input required="required" type="text" name="p_n" id="مركز العمل الحلي" value="{{ old('p_n') }}">
                                            <label for="مركز العمل الحلي">مركز العمل الحلي</label>
                                          </div>

                                          <div class="form-group">
                                            
                                            
                                            
                                            <input required="required" type="date" name="jus" id="الى" value="{{ old('jus') }}">
                                            <label for="الى">الى</label>
                                            <input required="required" type="date" name="depuis" id="من" value="{{ old('depuis') }}">
                                            <label for="من">من</label>
                                            <input required="required" type="text" name="periode" id="المدة المطلوبة" value="{{ old('periode') }}">
                                            <label for="المدة المطلوبة">المدة المطلوبة بعدد الأيام </label>
                                            </br>
                                            <input type="number" name="annee" id="بعنوان سنة" value="{{ old('annee') }}">
                                            <label for="بعنوان سنة">بعنوان سنة</label>
                                          </div>

                                          <div class="form-group">
                                            <input required="required" type="text" name="p_t" id="يوم الراحة الأسبوعية ما عدا يوم الاحد" value="{{ old('p_t') }}">
                                            <label for="يوم الراحة الأسبوعية ما عدا يوم الاحد">يوم الراحة الأسبوعية ما عدا يوم الاحد</label>
                                          </div>

                                          <div class="form-group">
                                            
                                            
                                            <input required="required" type="text" name="tele" id="الهاتف" value="{{ old('tele') }}">
                                            <label for="الهاتف">الهاتف</label>
                                            <input required="required" type="text" name="num_post" id="الترقيم البريدي" value="{{ old('num_post') }}">
                                            <label for="الترقيم البريدي">الترقيم البريدي</label>
                                            <input required="required" type="text" name="place" id="عنوان الراحة السكني طيلة العطلة" value="{{ old('place') }}">
                                            <label for="عنوان الراحة السكني طيلة العطلة">عنوان مقر السكني طيلة العطلة</label>
                                          </div>

                                          <div class="form-group">
                                            <input required="required" type="text" name="certif" id="الوثائق المصحوبة" value="{{ old('certif') }}">
                                            <label for="الوثائق المصحوبة">الوثائق المصحوبة</label>
                                          </div>

                                          <div class="form-group" style="text-align: left;">
                                            <input required="required" type="date" name="date_ecrire" id="في" value="{{ old('date_ecrire') }}">
                                            <label for="في">في</label>
                                            <input required="required" type="text" name="ou" id="ب" value="{{ old('ou') }}">
                                            <label for="ب">ب</label>
                                          </div>

                                           <div class="form-group" style="text-align: left;">
                                            <input required="required" type="text" name="code" id="امضاء طالب العطلة" >
                                            <label for="امضاء طالب العطلة">امضاء طالب العطلة</label>
                                          </div>

                                          <input type="submit" value="ثبيت" class="btn btn-success" >
                                          </form>


                                        
                                </div>
                              </div>
                           </div>

                        </div>
                    </div>

                 </section>   

        </main>    
@endsection

