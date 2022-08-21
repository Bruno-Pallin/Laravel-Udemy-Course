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

/*
    Route::get($uri, $callBackFunction);

http verb:
    get/post/put/patch/delete/options
*/

Route::get('/', 'MainController@main');

Route::get('/about-us', 'AboutUsController@aboutUs');

Route::get('/contact', 'ContactController@contact');