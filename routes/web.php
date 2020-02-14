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
    return view('welcome');
});


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
	Route::get('/','DashboardController@index')->name('admin.index');
	Route::resource('/group', 'GroupController',['as'=>'admin']);
	Route::resource('/questionnares', 'QuestionnareController');
	Route::get('/questionnares/{questionare}/question/create','QuestionController@create')->name('questionnare.question.create');
	Route::post('/questionnares/{questionare}/question','QuestionController@store')->name('questionnare.question.store');
    Route::get('/surveys/{questionnare}-{slug}', 'SurveyController@show')->name('survey');
    Route::post('/surveys/{questionnare}-{slug}', 'SurveyController@store')->name('survey');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
