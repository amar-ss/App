<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HairartisController;

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
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route:midleware('auth')-> group(function(){
    //manajemen hairartis
    Route:get('/hairartis', [HairartisController::class, 'index']);
})
