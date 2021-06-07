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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/company',[\App\Http\Controllers\HomeController::class,'company'])->name('company');



/*  Middleware   */

//Route::get('/admin','AdminController@ShowInfo')->middleware(['auth','roles:admin']);
