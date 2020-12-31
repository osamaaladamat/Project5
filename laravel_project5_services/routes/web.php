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



route::get('/',function (){
    if(Auth::check())
    return view('/dashboard.admin');
    else
        return view('Auth/login');
});
Route::resource("/categories", "categoryController");



//Route::resource("/applicants", "applicantController");
//write in url [/applicants/create] it will take you directly into applicant/Controller@create


// temporary route to get understand // no need to write it if you choose Route::resource above
Route::get('/applicants/create', 'applicantController@create');// show the form
Route::POST('/applicants', 'applicantController@store');       //  insert into form [action=""]


////////////
Route::get('/applicants', 'applicantController@index');        // applicants table
Route::get('/category1/applicants', 'applicantController@category1_index');        // category1 applicants table


////////////////// auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
