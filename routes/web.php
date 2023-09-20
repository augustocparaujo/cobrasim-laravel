<?php

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
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/dashboard', function () { return view('dashboard'); });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/cliente')->group(function () {
    Route::get('/listar/{search?}', [ClienteController::class, 'index'])->name('cliente.listar');
    Route::get('/cadastrar', [ClienteController::class, 'create'])->name('cliente.cadastrar');
    Route::post('/cadastrar/store', [ClienteController::class, 'store'])->name('cadastrar.cliente');
    Route::get('/exibir/{id}', [ClienteController::class, 'edit'])->name('cliente.exibir');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');
})->middleware('auth');


//cobranca/create
//cabranca/update/{id}
//cobranca/delete/{id}

Route::get('/relatorio/cobranca', function () {
    return view('relatorio.cobranca');
})->middleware('auth');
Route::get('/relatorio/notificacao-agendada', function () {
    return view('relatorio.notificacao-agendada');
})->middleware('auth');

Route::get('/notificacao/manual', function () {
    return view('notificacao.manual');
})->middleware('auth');
Route::get('/notificacao/agendada', function () {
    return view('notificacao.agendada');
})->middleware('auth');

Route::get('/configuracoes/banco', function () {
    return view('configuracoes.banco');
})->middleware('auth');
Route::get('/configuracoes/instancia', function () {
    return view('configuracoes.instancia');
})->middleware('auth');
Route::get('/configuracoes/integracao', function () {
    return view('configuracoes.integracao');
})->middleware('auth');
Route::get('/configuracoes/mensagem', function () {
    return view('configuracoes.mensagem');
})->middleware('auth');
Route::get('/configuracoes/tipocobranca', function () {
    return view('configuracoes.tipocobranca');
})->middleware('auth');

Route::get('/ajuda/documento', function () {
    return view('ajuda.documento');
})->middleware('auth');
