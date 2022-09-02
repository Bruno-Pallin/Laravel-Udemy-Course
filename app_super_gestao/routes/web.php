<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

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


Route::get('/', 'MainController@main')->name('site.index');
Route::get('/about-us', 'AboutUsController@aboutUs')->name('site.about-us');
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/customers', function () {
        return 'Customers';
    })->name('app.customers');
    Route::get('/providers', function () {
        return 'Providers';
    })->name('app.providers');
    Route::get('/products', function () {
        return 'Products';
    })->name('app.products');
});


Route::get('/route1', function () {
    echo 'Route1';
})->name('site.rota1');
Route::get('/route2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');
//Route::redirect('route2', 'route1');

Route::fallback(function() {
    echo "This accessed route doens't exist. <a href='".route('site.index')."'>Click here</a> to be redirected to the home page.";
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