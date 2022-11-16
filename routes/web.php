<?php

use App\Http\Controllers\BeliController;
use App\Http\Controllers\DashadminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});
//login
Route::get('login', [LoginController::class, 'view'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

//register
Route::get('register', [RegisterController::class, 'view']);
Route::post('register', [RegisterController::class, 'register']);

//dashbard
Route::get('/dashboard', function () {
    return view('dash.dashboard');
})->middleware('auth');

Route::get('/beli', [BeliController::class, 'view'])->middleware('auth');
Route::post('/beli', [BeliController::class, 'beli'])->middleware('auth');
Route::get('/beli-paket/{id}', [BeliController::class, 'belipaket'])->middleware('auth');

//dashboard admin
Route::get('/dashboard-admin', [DashadminController::class, 'view'])->middleware('admin');