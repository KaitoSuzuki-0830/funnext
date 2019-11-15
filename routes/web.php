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

use App\Http\Controllers\ProfilesController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::view('/help', 'help');

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
Route::resource('category','CategoryController');

Route::get('contact','ContactsController@index');
Route::post('contact/confirm','ContactsController@confirm');
Route::post('contact/complete','ContactsController@complete');

Route::get('/chat','ChatsController@index');

