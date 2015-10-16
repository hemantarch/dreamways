<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('login/{provider?}', 'Auth\AuthController@social_login');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);





Route::get('/', 'FrontendController@home');
Route::get('/about_us', 'FrontendController@about');
Route::get('/contact_us', 'FrontendController@contact');
Route::get('/dashboard',[
    'middleware' => 'auth',
    'uses' => 'FrontendController@dashboard'
]);
Route::get('/wish_list',[
    'middleware' => 'auth',
    'uses' =>  'FrontendController@wish_list'
]);
Route::get('/profile',[
    'middleware' => 'auth',
    'uses' => 'FrontendController@profile'
]);
Route::get('/itinerary',[
    'middleware' => 'auth',
    'uses' => 'FrontendController@itinerary'
]);
Route::get('/search', 'FrontendController@search');
Route::get('/suggestion', 'FrontendController@getSuggestion');
Route::post('/suggestion', 'FrontendController@postSuggestion');



Route::get('/admin/dashboard', 'AdminController@dashboard');
//Route::get('/admin', 'AdminController@blank');








