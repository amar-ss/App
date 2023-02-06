<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HairartisController;
use App\Http\Controllers\PaketController;
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

Route::middleware('auth')-> group(function(){
    //manajemen hairartis
    Route::get('/hairartis', [HairartisController::class, 'index']);
    Route::get('/hairartis/form', [HairartisController::class, 'create']);
    Route::post('/hairartis', [HairartisController::class, 'store']);
    Route::get('/hairartis/edit/{id}', [HairartisController::class, 'edit']);
    Route::put('/hairartis/{id}', [HairartisController::class, 'update']);
    Route::delete('hairartis/{id}',[HairartisController::class, 'destroy']);

    Route::get('/paket', [PaketController::class, 'index']);
    Route::get('/paket/form', [PaketController::class, 'create']);
    Route::post('/paket', [PaketController::class, 'store']);
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit']);
    Route::put('/paket/{id}', [PaketController::class, 'update']);
    Route::delete('paket/{id}',[PaketController::class, 'destroy']);

    Route::get('/costumer', [CostumerController::class, 'index']);
    Route::get('/costumer/form', [CostumerController::class, 'create']);
    Route::post('/costumer', [CostumerController::class, 'store']);
    Route::get('/costumer/edit/{id}', [CostumerController::class, 'edit']);
    Route::put('/costumer/{id}', [CostumerController::class, 'update']);
    Route::delete('costumer/{id}',[CostumerController::class, 'destroy']);

});


