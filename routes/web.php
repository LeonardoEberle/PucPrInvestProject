<?php

use App\Http\Controllers\dashController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\IdeiaController;
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
    route::get('/profile', 'read')->name('user.profile')->middleware('auth');//exibe usu escolhido
    route::put('/profile', 'update')->name('user.update')->middleware('auth');//envia dados do update de usu para o banco
    route::delete('/delete', 'delete')->name('user.delete')->middleware('auth');//deleta usuario escolhido
});

route::controller(loginController::class)->group(function(){
    route::get('/login', 'index')->name('login.form');//exibe form login
    route::post('/login', 'store')->name('login.store');//envia soli login
    route::get('/logout', 'destroy')->name('login.destroy')->middleware('auth');//destroi a session(auth) caso exista
});

route::controller(dashController::class)->group(function(){
    route::get('/dashboard', 'index')->name('dashboard')->middleware('auth');//acessa pag de dashboard quando logado
});


route::controller(IdeiaController::class)->group(function(){
    route::get('/ideias', 'list')->name('ideias.list')->middleware('auth');//lista ideias disponiveis
    route::get('usuario-ideias', 'index')->name('mylist')->middleware('auth');//meus empreendimentos
    route::get('ideia-{id}', 'show')->name('ideia.show')->middleware('auth');//ideia especifica
    route::get('atualizarideia-{id}', 'exibir')->name('exibir')->middleware('auth');//exibir update da ideia
    route::put('atualizarideia', 'update')->name('ideia.update')->middleware('auth');//envia o update

    route::delete('deletaideia', 'destroy')->name('ideia.destroy')->middleware('auth');//deleta ideia
    route::get('/novaideia', 'create')->name('ideia.form')->middleware('auth');//exibe formulario de criacao de ideia
    route::post('/ideiacriada', 'store')->name('ideia.store')->middleware('auth');//guarda os dados no banco de dados

});


Route::view('aceite', 'manager.acceptList');
