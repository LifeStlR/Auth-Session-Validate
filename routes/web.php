<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;

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

Route::get('login', [AuthController::class,'Login']);

Route::post('login', [AuthController::class,'PostLogin']);

Route::get('register', [AuthController::class,'Register']);

Route::post('register', [AuthController::class,'PostRegister']);

Route::get('/', [AuthController::class,'Index']);

Route::post('logout', [AuthController::class,'Logout']);

Route::post('search', [AuthController::class,'Search']);

Route::get('profile', [AuthController::class,'Profile']);

Route::post('profile', [AuthController::class,'UpdateProfile']);

Route::post('deleteprofile', [AuthController::class,'DeleteProfile']);