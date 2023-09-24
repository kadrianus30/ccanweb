<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WoController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('wo', WoController::class);
Route::get('/wo/{id}/edit', [WoController::class, 'edit'])->name('wo.edit');


Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
