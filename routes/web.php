<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::resource('/absence','AbsenceController');
Route::resource('/actualite','ActualiteController');
// Route::resource('/admin','AdminController');
Route::resource('/anneeScolaire','AnneeScolaireController');
Route::resource('/club','ClubController');
Route::resource('/eleveAbsence','EleveAbsenceController');
Route::resource('/eleveClub','EleveClubController');

Route::resource('/eleve','EleveController');
Route::get('/eleve/classe1','EleveController@classe1')->name('eleve.classe1');
Route::get('/eleve/profile','EleveController@profile')->name('eleve.profile');


Route::resource('/enseignantAbsence','EnseignantAbsenceController');
Route::resource('/enseignantClub','EnseignantClubController');
Route::resource('/enseignant','EnseignantController');
Route::resource('/enseignantGroupe','EnseignantGroupeController');
Route::resource('/enseignantMatier','EnseignantMatierController');
Route::resource('/groupe','GroupeController');
Route::resource('/menusItem','MenusItemController');
Route::resource('/pagesPermission','PagesPermissionController');
Route::resource('/permission','PermissionController');
Route::resource('/permissionGroup','PermissionGroupController');
Route::resource('/role','RoleController');
Route::resource('/service','ServiceController');
Route::resource('/thematique','ThematiqueController');
Route::resource('/translation','TranslationController');
Route::resource('/tuteur','TuteurController');
Route::resource('/user','UserController');
Route::resource('/matier','MatierController');

//added by akrem

Route::resource('/home','HomesController');

//added by mouheb

Route::resource('/niveau','NiveauController');
Route::resource('/contact','ContactController');

///////////////////////////////
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//akrem
// Route::get('/conge','EnseignantController@conge')->name('enseignant.conge');
// Route::post('/conge','CongeController@demande_conge')->name('demande_conge');
Route::resource('/conge','CongeController');

Route::get('/markAsRead',function(){
	auth()->user()->unreadNotifications->markAsRead();
});

