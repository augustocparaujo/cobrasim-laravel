<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busca = request('search');

        /*
        outra maneira de fazer
        $products = Product::query();
        $products->when($request->name, function ($query, $vl) {
            $query->where('name', 'like', '%' . $vl . '%');
        });
        $products = $products->get();
        */

        //pegando o usuário logado
        $user = auth()->user();
        if ($busca) {

            $cliente = Cliente::where([
                ['user_id', '=', $user->id],
                ['nome', 'like', '%' . $busca . '%']
            ])->get();
        } else {

            $cliente = Cliente::where([
                ['user_id', '=', $user->id]
            ])->get();
        }

        return view('cliente.listar', ['cliente' => $cliente, 'search' => $busca]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar dados (separa responsabilidade)
        $cliente = $request->validate([
            'nome' => 'required|string',
            'contato' => 'required|string',
            'email' => 'required|email',
        ]);

        //pegando o usuário logado e adiconar
        $user = auth()->user();
        //adicionar o dado novo no array
        $cliente['user_id'] = $user->id;

        //salvar
        $cliente = Cliente::create($cliente);
        //pegar id novo e direcionar para view exibir
        $idNovo = $cliente->id;
        return redirect('/cliente/exibir/' . $idNovo)->with(['msg' => 'cadastro realizado com sucesso', 'tipo' => 'success']);

        //dd($cliente->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //pegar user dono do cadastro
        $user = auth()->user();

        $cliente = Cliente::findOrFail($id);

        //se o usuario não for o dono do cadastro
        if ($user->id != $cliente->user_id) {
            return redirect('/dashboard');
        }

        return view('cliente.exibir', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        Cliente::findOrFail($request->id)->update($request->all());

        //return redirect('/cliente/exibir/'.$request->id)->with(['msg' => 'registro alterado com sucesso', 'tipo' => 'success']);

        return back()->with(['msg' => 'registro alterado com sucesso', 'tipo' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //verficiar se o user é dono do cadastro
        Cliente::findOrFail($id)->delete();

        return redirect('/cliente/listar')->with(['msg' => 'registro excluido com sucesso', 'tipo' => 'danger']);
    }
}
