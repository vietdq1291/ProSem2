<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// <<<<<<< HEAD
Route::get('/', function () {
    return view('pages.home');
});


Route::get('/funitures', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/AddCart/{id}', [App\Http\Controllers\ProductController::class, 'AddCart']);
Route::get('/DeleteItem/{id}', [App\Http\Controllers\ProductController::class, 'DeleteItem']);

// Route::get('/funitures', function () {
//     return view('layouts.templates.pages.funitures');
// });
// Route::get('/contact-us', function () {
//     return view('layouts.templates.pages.contact-us');
// });
// =======
//Route::get('/', function () {
//    return view('layouts.layout');
//});
//
//Route::get('/funitures', function () {
//    return view('layouts.templates.pages.funitures');
//});
//Route::get('/contact-us', function () {
//    return view('layouts.templates.pages.contact-us');
//});
// >>>>>>> 261a88709e673979f6d7a2389b4d819eb1fd5331
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/company',[\App\Http\Controllers\HomeController::class,'company'])->name('company');
Route::get('/company',[\App\Http\Controllers\HomeController::class,'company'])->name('company');
// Route::get('/funitures',[\App\Http\Controllers\HomeController::class,'funitures'])->name('funitures');
Route::get('/contact-us',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('/cart',[\App\Http\Controllers\HomeController::class,'cart'])->name('cart');
Auth::routes();
Route::get('/login',[\App\Http\Controllers\HomeController::class,'login'])->name('login');
Route::get('/register',[\App\Http\Controllers\HomeController::class,'register'])->name('register');


/*  Middleware   */

//Route::get('/admin','AdminController@ShowInfo')->middleware(['auth','roles:admin']);
