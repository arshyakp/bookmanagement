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

Route::get(function () {
    return view('welcome');
});
Route::get('index','RegistrationController@index');

Route::post('regi/create','RegistrationController@create');

Route::get('login','RegistrationController@logindex');

Route::post('loginDirect','RegistrationController@login');

Route::get('logredirect','RegistrationController@logredirect');

Route::get('adminredirect','RegistrationController@adminredirect');

Route::get('error','RegistrationController@error');
//admin(bookdetails)//
Route::get('createform','BooksdetailsController@createform');
Route::post('create','BooksdetailsController@create');
Route::get('indexx','BooksdetailsController@index');
Route::get('books/Destroy/{id}','BooksdetailsController@destroy');
Route::post('books/editing/{id}','BooksdetailsController@update');
Route::get('books/edit/{id}','BooksdetailsController@edit');
Route::get('pending/user','BooksdetailsController@userView');
Route::get('/pending/requestedUser','BooksdetailsController@userProfile');
//login

Route::get('logindex','LoginController@index');
Route::get('profile','LoginController@profileview');
Route::post('changeprofile','LoginController@update');


//ajax insertion
Route::get('typeinsert','AjaxController@changetype');
Route::get('user/accept','AjaxController@acceptUser');
Route::get('user/rejected','AjaxController@rejectUser');
Route::post('userComment','AjaxController@comment');
Route::get('deleteComment','AjaxController@delecomment');


//more books
Route::get('logindex/more/books','MorebooksController@index');
Route::get('cmnts','MorebooksController@comnts');
//logout//
Route::get('/logout','RegistrationController@logout');
Route::get('/pending/user/logout','RegistrationController@adminLogout');