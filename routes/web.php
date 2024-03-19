<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/cakes', [CakeController::class, 'index']);

Route::get('/order/{id}', [OrderController::class, 'show']);

Route::get('/cake/create', [CakeController::class, 'create']);

Route::post('/cake', [CakeController::class, 'store']);

Route::get('/cake/edit/{id}', [CakeController::class, 'edit']);

Route::post('/cake/update/{id}', [CakeController::class, 'update']);

Route::get('/cake/destroy/{id}', [CakeController::class, 'destroy']);
