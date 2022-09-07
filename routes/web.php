<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\InscricaoController;
use App\Http\Controllers\Site\LoginController;
use App\Http\Controllers\Site\CursoController;
use App\Http\Controllers\Site\AboutController;
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

Route::namespace('Site')->group(function(){
    #Rota para a pagina do site
    Route::get('/', [HomeController::class,"index"])->name('home');

    #Rota para inscricao
    Route::get('/inscricao',[InscricaoController::class,"index"])->name('inscricao');
    Route::post('/inscricao',[InscricaoController::class,"store"])->name('inscricao.store');
    
    #Rota para o Login
    Route::get('/redirects',[LoginController::class,"index"]);

    #Rota para o Curso
    Route::get('/curso',[CursoController::class,"index"])->name('curso');

    #Rota para Sobre
    Route::get('/sobre-nos',[AboutController::class,"__invoke"])->name('sobre');

});   




Route::get('/conta', function () {
    return view('site.login.index');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
