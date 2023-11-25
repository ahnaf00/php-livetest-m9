<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\DashboardController;


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

Route::get('/hello', [GreetController::class,'greet']);

Route::middleware(['isAdmin'])->group(function (){
    Route::get('/admin/dashboard', [DashboardController::class,'index']);
    Route::get('/admin/login', [DashboardController::class,'login']);
});

Route::middleware(['isUser'])->group(function (){
    Route::get('/home', [DashboardController::class,'index']);
    Route::get('/about', [DashboardController::class,'login']);
});
