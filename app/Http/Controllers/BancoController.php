<?php

namespace App\Http\Controllers;

use App\Http\Requests\BancoStoreRequest;
use App\Models\Banco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('configuracoes.banco');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BancoStoreRequest $request)
    {
        //tratar dados
        $banco = $request->validated();

        //pegando o usuário logado e adiconar
        $user = auth()->user();
        //adicionar o dado novo no array
        $banco['user_id'] = $user->id;
        //salvar
        //$cliente = Cliente::create($cliente);

        $banco = Banco::create($banco);
        //dd($banco);

        return redirect('/configuracoes/banco')->with(['msg' => 'Cadastrado com sucesso', 'tipo' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banco $banco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banco $banco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banco $banco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banco $banco)
    {
        //
    }
}
