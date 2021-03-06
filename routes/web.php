<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/users', [UserController::class, 'index']);
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::post('/create', [UserController::class, 'create']);
Route::post('/edit/{id}', [UserController::class, 'update']);
Route::get('/user/{id}', [UserController::class, 'show']);
