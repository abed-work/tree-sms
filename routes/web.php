<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,UserController};

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

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'handleLogin']);

Route::get('/sign-up', [AuthController::class,'signUp'])->name('sign-up');
Route::post('/sign-up', [AuthController::class,'handleSignUp']);

Route::post('/logout', [AuthController::class,'logout'])->name('logout');

Route::resource('users', UserController::class);