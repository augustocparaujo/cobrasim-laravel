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

Route::prefix('cliente')->name('cliente.')->group(function () {
    Route::get('/listar/{search?}', [ClienteController::class, 'index'])
        ->where('search', '[A-Za-z]+')
        ->name('listar');

    Route::get('/cadastrar', [ClienteController::class, 'create'])->name('cadastrar');

    Route::get('/exibir/{id}', [ClienteController::class, 'edit'])->name('exibir');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('update');
    Route::get('/{id}', [ClienteController::class, 'destroy'])->name('delete');
})->middleware('auth');

Route::post('cliente/cadastrar/store', [ClienteController::class, 'store'])->name('cadastrar.cliente');

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

Route::fallback(function () {
    return 'Exibir pagina de erro';
});


//criar nome subdomimo
// Route::domain('{user}.cobrasim.teste')->group(function () {
//     Route::get('/', function ($user) {
//         return $user;
//     });
// });
