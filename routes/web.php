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
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/notices', function () {
    return view('notices');
})->name('notices');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::post('/profile/submit', 'profiledetails@submit');

Route::get('/test', function () {
    return view('test');
})->middleware('auth');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('store', 'UserController@store');
