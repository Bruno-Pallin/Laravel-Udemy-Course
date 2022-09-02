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


Route::get('/', 'MainController@main');
Route::get('/about-us', 'AboutUsController@aboutUs');
Route::get('/contact', 'ContactController@contact');
Route::get('/login', function(){ return 'Login'; });

Route::prefix('/app')->group(function(){
    Route::get('/customers', function(){ return 'Customers'; });
    Route::get('/providers', function(){ return 'Providers'; });
    Route::get('/products', function(){ return 'Products'; });
});

/*
    First Contact With Route
    Route::get($uri, $callBackFunction);

    http verb:
        get/post/put/patch/delete/options
*/
/*
Learning About params
    Route::get(
        '/contact/{name}/{category_id?}',
        function (
            string $name = 'Default Name', 
            int $category_id = 1 //Info
            ) {
            echo "We are here: $name - $category_id";
        }
    )->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');
*/