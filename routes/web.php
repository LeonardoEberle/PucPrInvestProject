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

Route::get('/', function () {return view('welcome');});//view inicial

route::get('/user/register', [userController::class, 'create'])->name('register.form');//mostra form usu cadastro
route::post('/user',[userController::class, 'store'])->name('user.store');//salva form usu cadastro

route::get('/profile', [userController::class, 'index'])->name('user.profile');//teste acessar usuarios existentes


//route::view('/login', 'authenticate.login')->name('login.form');
//route::post('/auth', [loginController::class, 'auth'])->name('login.auth');
