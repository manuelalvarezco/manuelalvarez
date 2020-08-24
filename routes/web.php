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


Route::get('/', function(){
    return view('pages.welcome');
});



Route::get('projects',    'PageController@projects');
Route::get('project/{project:slug}',    'PageController@project')->name('project');


Route::get('/about',            'PageController@about');
Route::get('/services',         'PageController@services');
Route::get('/blog',             'PageController@posts');
Route::get('blog/{post:slug}',  'PageController@post')->name('post');

Auth::routes();

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

        Route::get('home', 'HomeController@index')->name('home');

        Route::resource('posts', 'Backend\PostController')
        ->except('show');

        Route::resource('projects', 'Backend\ProjectController')
        ->except('show');
});

Route::resource('comments', 'Backend\CommentsController');
