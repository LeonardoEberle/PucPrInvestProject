<?php

use App\Http\Controllers\dashController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use App\Models\Usuario;
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

route::get('/', [homeController::class, 'index'])->name('welcome');//pag welcome com dados de usu para testes

route::controller(userController::class)->group(function(){
    route::get('/register', 'create')->name('user.form');//exibe form cad user
    route::post('/register', 'store')->name('user.store');//envia cad user db (cria user)
});

route::controller(loginController::class)->group(function(){
    route::get('/login', 'index')->name('login.form');//exibe form login
    route::post('/login', 'store')->name('login.store');//envia soli login
    route::get('/logout', 'destroy')->name('login.destroy');//
});

route::get('/dashboard', [dashController::class, 'index'])->name('dashboard');

//route::view('/login', 'authenticate.login')->name('login.form');
//route::post('/auth', [loginController::class, 'auth'])->name('login.auth');
