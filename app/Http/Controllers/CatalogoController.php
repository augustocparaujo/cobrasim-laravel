<?php

namespace App\Http\Controllers;

use App\Http\Requests\CatalogoStoreRequest;
use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pgando o usuário logado e lista
        $user = auth()->user();
        //sleciona paenas o que for vinculado a ele
        $catalogo = Catalogo::where([
            ['user_id', '=', $user->id]
        ])->get();

        return view('configuracoes.tipocobranca', ['catalogos' => $catalogo]);
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
    public function store(CatalogoStoreRequest $request)
    {
        //
        $input = $request->validated();
        $user = auth()->user();
        $input['user_id'] = $user->id;

        Catalogo::create($input);

        return back()->with(['msg' => 'cadastro realizado com sucesso', 'tipo' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalogo $catalogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalogo $catalogo)
    {
        //
        return view('configuracoes.tipocobranca', [
            'catalogo_edit' => $catalogo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        Catalogo::findOrFail($request->id)->update($request->all());
        return back()->with(['msg' => 'registro alterado com sucesso', 'tipo' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Catalogo::findOrFail($id)->delete();
        return redirect('/configuracoes/tipocobranca')->with(['msg' => 'excluido com sucesso', 'tipo' => 'danger']);
    }
}
