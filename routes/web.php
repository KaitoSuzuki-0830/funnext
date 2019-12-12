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

//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');

//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

// Route::get('/contact', 'ContactController@index')->name('contact.index');
// Route::get('/contact', 'ContactController@confirm')->name('contact.index');
// Route::get('/contact', 'ContactController@send');

Route::view('/about', 'about');

Route::view('/help','help');

Route::resource('outline','OutlineController')->middleware('auth');
// Route::get('/help','ContactsController@help');

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
// Route::resource('images','GroupsController',['only'=>['store','destroy']]);
Route::resource('category','CategoryController');
Route::resource('plans','PlansController');


Route::post('/pay','PaymentController@pay')->name('pay');

Route::get('/user/{userId}','UserController@show');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

Route::get('/outlinesearch','OutlineController@search');
Route::get('/groupsearch','GroupsController@search');
Route::get('/plansearch','PlansController@search');
Route::get('/categorysearch','CategoryController@search');

Route::get('/group/{groupid}/{userid}',[
    'uses' => 'GroupsController@join',
    'as' => 'group.join'
    ]);
