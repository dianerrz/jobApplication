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

Route::group(['middleware'=>['web']], function(){
	
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//admin
Route::get('/jobCategories', 'JobCatController@index');
Route::get('/editJobCategories/{JobCategory}', 'JobCatController@edit');
Route::patch('/jobCategories/{JobCategory}', 'JobCatController@update');
Route::post('storeJC', 'JobCatController@store');
Route::get('/addJobCategories', function () {return view('JobCategories.add');});
Route::get('/addApplicants', function () {return view('Applicants.add');});

Route::get('/jobVacancy', 'JobVacController@index');
Route::get('/addJobVacancies', function () {
	$categories = App\JobCategories::all();
	return view('JobVacancies.add', compact('categories'));
});



});