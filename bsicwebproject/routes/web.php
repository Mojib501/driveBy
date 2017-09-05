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
Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');


Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');



Route::get('sendbasicemail','MailController@basic_email') ;
Route::get('sendhtmlemail','MailController@html_email') ;
Route::get('sendattachmentemail','MailController@attachment_email') ;
