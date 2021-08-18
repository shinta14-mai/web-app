<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DbAndalalinController;
use App\Http\Controllers\DbAdministratorController;

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

Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);

Route::get('/andalalin', [DbAndalalinController::class, 'index'])->name('andalalin.index');
Route::post('/andalalin', [DbAndalalinController::class, 'store']);
Route::get('/andalalin/create', [DbAndalalinController::class, 'create']);
// Route::post('/andalalin', [UserController::class, 'store']);

Route::get('/admin', [DbAdministratorController::class, 'index'])->name('admin.index');