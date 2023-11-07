<?php

use \Illuminate\Http\Request;

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
use App\Http\Controllers\BancoController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

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
    Route::post('/cadastrar/store', [ClienteController::class, 'store'])->name('cadastrar.cliente');
    Route::get('/exibir/{id}', [ClienteController::class, 'edit'])->name('exibir');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('update');
    Route::get('/{id}', [ClienteController::class, 'destroy'])->name('delete');
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

Route::get('/configuracoes/banco', [BancoController::class, 'index'])->name('configuracoes.banco')->middleware('auth');
Route::post('/configuracoes/banco/store', [BancoController::class, 'store'])->name('cadastrar.banco')->middleware('auth');

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
    return view('error404');
});

//criar nome subdomimo
// Route::domain('{user}.cobrasim.teste')->group(function () {
//     Route::get('/', function ($user) {
//         return $user;
//     });
// });


//tiago
/*
Route::get('usuarios', function (Request $request) {
    //dd($request);
    //dd($request->path()); //tras o caminho
    //dd($request->url()); //url
    //dd($request->fullUrl()); //não vi difença
    //dd($request->fullUrlWithQuery(['cruso' => 'Laravel'])); //query string
    //dd($request->fullUrlIs());// comparar se a url e a mesma passad
    //dd($request->is('usuario')); //verifica se a rota a acessada
    //dd($request->routeIs('usuario')); //verifica se a rota a acessada
    //dd($request->method()); //verifica tipo de metodo
    //dd($request->isMethod('POST')); // pegar tipo de metodo
    //dd($request->input('token', 'Laravel')); //segundo valor e default
    //dd($request->query('curso', 'Sem curso')); //usuarios?token=123&curso=Laravel --> sem curso
    //dd($request->token); //usuarios?token=123&curso=   -> 123
    //dd($request->only('curso')); //filtra apenas o que quero
    //dd($request->except('curso')); //todos menos o curos


    if ($request->has('token')) {  //validar dados vindo na rota
        dd('token e produto existem');
    } else {
        dd('sem token sem acesso');
    }

    //whenHas dispara para um função e tudo que for dentro é obrigatorio
    //hasAny se um campo existir ele executa
    //filled se preenchido faça algo (true ou false)
    //whenFilled quando estiver dado faça algo (primeiro parametro dado segundo função)
    //missing se o dado não estiver na reuqest ele executa (true ou false)


//});
*/

//camada view
//retornando de uma lista a primeira view que achar
/*
Route::get('/profile', function(){
    View::exists('user.profile); //se existe
    return View::first(['user.profile','user.profile2']);
});
*/
