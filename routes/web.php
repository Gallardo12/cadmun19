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

Auth::routes();
// Route::redirect('register', 'login', 301);

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/committees', 'PageController@committees')->name('committees');
Route::get('/secretariat', 'PageController@secretariat')->name('secretariat');
// Route::get('/news', 'PageController@news')->name('news');
//Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
Route::get('/terms-of-service', 'PageController@tos')->name('tos');

// News route resource
Route::get('/news', 'BlogController@index')->name('news');
Route::get('/news/create', 'BlogController@create')->name('news.create');
Route::post('/news/store', 'BlogController@store')->name('news.store');
// keep trashed routes here
Route::get('/news/trash', 'BlogController@trash')->name('news.trash');
Route::get('/news/trash/{id}/restore', 'BlogController@restore')->name('news.restore');
Route::delete('/news/trash/{id}/permanent-delete', 'BlogController@permanentDelete')->name('news.permanent-delete');

Route::get('/news/{id}', 'BlogController@show')->name('news.show');
Route::get('/news/{id}/edit', 'BlogController@edit')->name('news.edit');
Route::patch('/news/{id}/update', 'BlogController@update')->name('news.update');
Route::delete('/news/{id}/delete', 'BlogController@delete')->name('news.delete');

// admin routes
Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/admin/news', 'AdminController@news')->name('admin.news');

// route resource
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');

// contact forms
//Route::get('contact', 'MailController@contact')->name('contact');
//Route::post('contact/send', 'MailController@send')->name('mail.send');

// Committees route resource
Route::get('/committees', 'CommitteeController@index')->name('committees');

// Participants route resource
Route::resource('participants', 'ParticipantController');

// Secretariat route resource
Route::get('/secretariat', 'SecretariatController@index')->name('secretariat');

// Contact Us route
Route::get('contact-us', 'ContactUSController@contactUS')->name('contact-us');;
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
