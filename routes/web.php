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


Route::get('todoapp',[App\Http\Controllers\TodoController::class,'index']);
Route::get('create',[App\Http\Controllers\TodoController::class,'create']);
Route::post('store',[App\Http\Controllers\TodoController::class,'store']);

Route::get('todos/{todo}',[App\Http\Controllers\TodoController::class,'show']);
Route::get('todos/{todo}/edit',[App\Http\Controllers\TodoController::class,'edit']);
Route::post('todos/{todo}/update',[App\Http\Controllers\TodoController::class,'update']);
Route::get('todos/{todo}/delete',[App\Http\Controllers\TodoController::class,'destroy']);
