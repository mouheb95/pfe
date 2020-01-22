@extends('layouts.base')
@section('container')
<header data-parallax="50" class="ct-page-header ct-page-header--small">
    <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
        <path d="M0,100 L 100,100 100,0 Z"></path>
    </svg>
    <div class="ct-page-header__inner">
        <div class="container">
            <h1 class="h1 ct-page-header__title"><b></b></h1>
        </div>
    </div>
</header>
<!-- *** Main *** -->
<main class="ct-blog ct-blog--single">
    <div class="container">
        <div class="row">
          <form action="{{  route('conge.store') }}" method="post">
              {{ csrf_field() }}
              <div class="panel-body" style="text-align: right;">

                  <div class="form-group">
                    <input required="required" type="text" name="enseignant_id" id="المعرف الوحيد" value="{{ old('enseignant_id') }}">
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
                    <input required="required" type="text" name="national_strategie" id="الخطة الوطنية" value="{{ old('national_strategie') }}">
                    <label for="الخطة الوطنية">الخطة الوطنية</label>
                  </div>

                  <div class="form-group">
                    <input required="required" type="text" name="ancien_post_travail" id="مركز العمل السابق" value="{{ old('ancien_post_travail') }}">
                    <label for="مركز العمل السابق">مركز العمل السابق</label>
                  </div>

                  <div class="form-group">
                    <input required="required" type="text" name="nouveau_post_travail" id="مركز العمل الحلي" value="{{ old('nouveau_post_travail') }}">
                    <label for="مركز العمل الحلي">مركز العمل الحلي</label>
                  </div>

                  <div class="form-group">
                    <input required="required" type="date" name="date_fin" id="الى" value="{{ old('date_fin') }}">
                    <label for="الى">الى</label>
                    <input required="required" type="date" name="date_debut" id="من" value="{{ old('date_debut') }}">
                    <label for="من">من</label>
                    <input required="required" type="text" name="periode" id="المدة المطلوبة" value="{{ old('periode') }}">
                    <label for="المدة المطلوبة">المدة المطلوبة بعدد الأيام </label>
                    </br>
                    <input type="text" name="annee_scolaire_id" id="بعنوان سنة" value="{{ old('annee_scolaire_id') }}">
                    <label for="بعنوان سنة">بعنوان سنة</label>
                  </div>

                    <div class="form-group">
                    <input required="required" type="text" name="jours_non_ouvert" id="يوم الراحة الأسبوعية ما عدا يوم الاحد" value="{{ old('jours_non_ouvert') }}">
                    <label for="يوم الراحة الأسبوعية ما عدا يوم الاحد">يوم الراحة الأسبوعية ما عدا يوم الاحد</label>
                  </div>

                  <div class="form-group">
                    <input required="required" type="text" name="telephone" id="الهاتف" value="{{ old('telephone') }}">
                    <label for="الهاتف">الهاتف</label>
                    <input required="required" type="text" name="code_postale" id="الترقيم البريدي" value="{{ old('code_postale') }}">
                    <label for="الترقيم البريدي">الترقيم البريدي</label>
                    <input required="required" type="text" name="emplacement_vacance" id="عنوان الراحة السكني طيلة العطلة" value="{{ old('emplacement_vacance') }}">
                    <label for="عنوان الراحة السكني طيلة العطلة">عنوان مقر السكني طيلة العطلة</label>
                  </div>

                  <div class="form-group">
                    <input required="required" type="text" name="certification" id="الوثائق المصحوبة" value="{{ old('certification') }}">
                    <label for="الوثائق المصحوبة">الوثائق المصحوبة</label>
                  </div>

                  <div class="form-group" style="text-align: left;">
                    <input required="required" type="date" name="date_ecrire" id="في" value="{{ old('date_ecrire') }}">
                    <label for="في">في</label>
                    <input required="required" type="text" name="emplacement_ecrire" id="ب" value="{{ old('emplacement_ecrire') }}">
                    <label for="ب">ب</label>
                  </div>

                  <div class="form-group" style="text-align: left;">
                    <input required="required" type="text" name="signature" id="امضاء طالب العطلة" >
                    <label for="امضاء طالب العطلة">امضاء طالب العطلة</label>
                  </div>

                  
                  <div class="form-group" style="text-align: left;">
                    <input type="submit" value="ثبيت" class="btn btn-success" >
                  </div>
            </div>
          </form>
      </div>
    </div>
  </main>
@stop