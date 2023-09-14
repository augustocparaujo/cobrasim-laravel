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
        
        //pegando o usuário logado
        $user = auth()->user();
        $usuario = $user->id;

        if($busca){
        
            $cliente = Cliente::where([
                    ['nome','like','%'.$busca.'%','AND','user_id' => $usuario]
                ])->get();

        }else{

            $cliente = Cliente::where([
                ['user_id','=',$usuario]
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
        //
        $cliente = new Cliente;

        $cliente->nome = filter_var($request->nome, FILTER_SANITIZE_STRING);
        $cliente->contato = preg_replace("/[^0-9]/","$1", htmlentities(trim($request->contato)));
        $cliente->email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
        //pegando o usuário logado
        $user = auth()->user();
        $cliente->user_id = $user->id;

        $cliente->save();
        $idNovo = $cliente->id;

        return redirect('/cliente/exibir/'.$idNovo)->with(['msg' => 'cadastro realizado com sucesso', 'tipo' => 'success']);

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
        if($user->id != $cliente->user_id){
            return redirect('/dashboard');
        }

        return view('cliente.exibir',['cliente' => $cliente]);
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
