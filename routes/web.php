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

Route::view('/about', 'about');
Route::resource('outline','OutlineController');
Route::get('/help','ContactsController@help');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user/profile',[
    'uses'=>'ProfilesController@index',
    'as'=>'user.profile'
]);

Route::put('/profile/update',[
    'uses' =>'ProfilesController@update',
    'as' =>'profile.update'
]);

Route::resource('groups','GroupsController');
Route::resource('images','GroupsController',['only'=>['store','destroy']]);
Route::resource('category','CategoryController');
Route::resource('plans','PlansController');

Route::get('contacts','ContactsController@index');
Route::post('contacts/confirm','ContactsController@confirm');
Route::post('contacts/complete','ContactsController@complete');

Route::post('/pay','PaymentController@pay')->name('pay');

Route::get('/user/{userId}','UserController@show');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::get('/seach','OutlineController@search');
