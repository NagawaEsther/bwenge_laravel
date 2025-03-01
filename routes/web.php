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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


// routes/web.php

use App\Http\Controllers\NewsController;

Route::resource('news', NewsController::class);

use App\Http\Controllers\AdvertController;
Route::resource('adverts', AdvertController::class);

use App\Http\Controllers\SubscribeController;

Route::resource('subscribers', SubscribeController::class);
