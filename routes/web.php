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
Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/cliente/listar/{search?}',[ClienteController::class, 'index']);
Route::get('/cliente/cadastrar',[ClienteController::class, 'create'] );
Route::post('/cadastrar',[ClienteController::class, 'store'] );
Route::get('/cliente/exibir/{id}',[ClienteController::class, 'show']);

Route::get('/cliente/importar', function(){ return view('cliente.importar'); });

Route::get('/relatorio/cobranca', function(){ return view('relatorio.cobranca'); });
Route::get('/relatorio/notificacao-agendada', function(){ return view('relatorio.notificacao-agendada'); });

Route::get('/notificacao/manual', function(){ return view('notificacao.manual'); });
Route::get('/notificacao/agendada', function(){ return view('notificacao.agendada'); });

Route::get('/configuracoes/banco', function(){ return view('configuracoes.banco'); });
Route::get('/configuracoes/instancia', function(){ return view('configuracoes.instancia'); });
Route::get('/configuracoes/integracao', function(){ return view('configuracoes.integracao'); });
Route::get('/configuracoes/mensagem', function(){ return view('configuracoes.mensagem'); });
Route::get('/configuracoes/tipocobranca', function(){ return view('configuracoes.tipocobranca'); });

/*
Route::get('/usuario/login', function(){ return view('usuario.login'); });
Route::get('/usuario/perfil', function(){ return view('usuario.perfil'); });
Route::post('/usuario/sair', function(){ return view('usuario.log'); });
Route::post('/usuario/registrar', function(){ return view('usuario.registrar'); });
*/

Route::get('/ajuda/documento', function(){ return view('ajuda.documento'); });
