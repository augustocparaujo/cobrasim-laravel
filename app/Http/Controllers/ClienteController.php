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
        //$busca = request('search');

        //$cliente = Cliente::where('nome','like','%'.$busca)->get();

        $busca = Cliente::All();

        return view('cliente.listar', ['busca' => $busca]); 
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

        $cliente->save();

        return redirect('/cliente/listar')->with(['msg' => 'cadastro realizado com sucesso', 'tipo' => 'success']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
        return view('cliente.exibir');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
