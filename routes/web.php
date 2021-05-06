<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return "mariam";
})->name('a');

Route::get('/test/{id}', function ($id) {
    return $id;
})->name('b');

Route::get('/test1/{id?}', function () {
    return "mariam";
})->name('c');

Route::namespace('Front')->group(function(){
		Route::get('user0','UserController@showAdminName');
		Route::get('index','UserController@index');
});

Route::get('user','UserController@showAdminName')->middleware('auth');
Route::get('user1','UserController@showAdminName1');
Route::get('user2','UserController@showAdminName2');
Route::get('user3','UserController@showAdminName3');
Route::get('login',function(){
	return 'must be login';
})->name('login');

Route::get('landing','UserController@openLandingPage');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
