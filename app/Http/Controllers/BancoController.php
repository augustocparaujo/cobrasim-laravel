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
        //pegando o usuário logado e adiconar
        $user = auth()->user();
        //adicionar o dado novo no array
        $user_id = $user->id;
        //selecionando apenas banco do usuario

        $banco = Banco::where([
            ['user_id', '=', $user_id]
        ])->first();

        return view('configuracoes.banco', ['banco' => $banco]);
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
        $input = $request->validated();

        //pegando o usuário logado e adiconar
        $user = auth()->user();
        //adicionar o dado novo no array
        $input['user_id'] = $user->id;
        //salvar
        //$cliente = Cliente::create($cliente);

        //dd($input);
        $banco = Banco::create($input);
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
    public function update(Request $request)
    {

        //tratar dados
        Banco::findOrFail($request->id)->update($request->all());
        //dd($banco);
        return redirect('/configuracoes/banco')->with(['msg' => 'Atualizado com sucesso', 'tipo' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banco $banco)
    {
        //
    }
}
