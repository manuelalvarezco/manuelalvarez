<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects/angular', 'Backend\ProjectController@angular');
Route::get('projects/laravel', 'Backend\ProjectController@laravel');
Route::get('projects/vue', 'Backend\ProjectController@vue');
Route::get('projects/{project:slug}', 'Backend\ProjectController@indexApi');

Route::get('posts', 'Backend\PostController@posts');
Route::post('posts-update', 'Backend\PostController@postsUpdate');

Route::get('certificates','Backend\CertificateController@certificates');
Route::get('services','Backend\ServicesController@services');
Route::post('customers', 'Backend\CustomerController@store');
Route::get('tags','Backend\TagController@tags');
