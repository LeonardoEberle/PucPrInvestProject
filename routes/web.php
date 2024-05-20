<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
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
    return view('welcome');
});

route::get('/profile', [userController::class, 'index'])->name('user.profile');


route::view('/login', 'autenticate.login')->name('login.form');
//route::post('/auth', [loginController::class, 'auth'])->name('login.auth');
