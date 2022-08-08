<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
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

// Authentication
// Route::get('/login',[CustomAuthController::class,'login']);
// Route::post('login',[CustomAuthController::class,'loginuser'])->name('login');
// Route::get('register',[CustomAuthController::class,'register']);
// Route::post('register',[CustomAuthController::class,'reguser'])->name('register');

//Dashboard
Route::get('dashboard',[CustomAuthController::class,'dashboard'])->name('dashboard.user')->middleware('auth');

Auth::routes();

