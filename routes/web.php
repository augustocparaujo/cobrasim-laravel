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

Route::get('/', function () { return view('welcome'); });
//Route::get('/dashboard', function () { return view('dashboard'); });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/cliente/listar/{search?}',[ClienteController::class ,'index'])->middleware('auth');
Route::get('/cliente/cadastrar',[ClienteController::class, 'create'])->middleware('auth');
Route::post('/cadastrar',[ClienteController::class, 'store'] )->middleware('auth');

Route::get('/cliente/exibir/{id}',[ClienteController::class, 'edit'])->middleware('auth');

Route::put('/cliente/update/{id}',[ClienteController::class, 'update'])->middleware('auth');

Route::get('/cliente/{id}',[ClienteController::class, 'destroy'])->middleware('auth');
Route::get('/cliente/importar', function(){ return view('cliente.importar'); })->middleware('auth');

Route::get('/relatorio/cobranca', function(){ return view('relatorio.cobranca'); })->middleware('auth');
Route::get('/relatorio/notificacao-agendada', function(){ return view('relatorio.notificacao-agendada'); })->middleware('auth');

Route::get('/notificacao/manual', function(){ return view('notificacao.manual'); })->middleware('auth');
Route::get('/notificacao/agendada', function(){ return view('notificacao.agendada'); })->middleware('auth');

Route::get('/configuracoes/banco', function(){ return view('configuracoes.banco'); })->middleware('auth');
Route::get('/configuracoes/instancia', function(){ return view('configuracoes.instancia'); })->middleware('auth');
Route::get('/configuracoes/integracao', function(){ return view('configuracoes.integracao'); })->middleware('auth');
Route::get('/configuracoes/mensagem', function(){ return view('configuracoes.mensagem'); })->middleware('auth');
Route::get('/configuracoes/tipocobranca', function(){ return view('configuracoes.tipocobranca'); })->middleware('auth');

Route::get('/ajuda/documento', function(){ return view('ajuda.documento'); })->middleware('auth');