<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ToppageController;

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

Route::get('/', [ToppageController::class, '__invoke']);
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('/signin_process', [UserController::class, 'signin']);
Route::post('/login_process', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/loading_task', [TaskController::class, 'loading_task']);
Route::post('/add_task', [TaskController::class, 'add_task']);
Route::post('/delete_task',[TaskController::class, 'delete_task']);


