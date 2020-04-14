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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/gracias', 'gracias');

Route::resource('/customers','CustomerController');

Route::post('/pay', 'PayController@pay');
Route::post('/responsePayU', 'PayController@responsePayU')->name('responsePayU');
