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

// CRUD CAST
Route::get('/cast', [UasController::class,'index']);
Route::get('/cast/create', [UasController::class,'create']);
Route::post('/cast', [UasController::class,'store']);
Route::get('/cast/{cast_id}/edit', [UasController::class,'edit']);
Route::put('/cast/{cast_id}', [UasController::class,'update']);
Route::delete('/cast/{cast_id}', [UasController::class,'destroy']);

