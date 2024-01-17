<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
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
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/registration', [AuthController::class, 'registration']);

Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function(){ return view('dashboard'); });
    Route::get('/test', [AuthController::class, 'test']);
});