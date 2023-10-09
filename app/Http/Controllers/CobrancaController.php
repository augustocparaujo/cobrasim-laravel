<?php

namespace App\Http\Controllers;

use App\Models\Cobranca;
use Illuminate\Http\Request;

class CobrancaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

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
    public function store(Request $request)
    {
        //
        //pegando o usuário logado
        $user = auth()->user();
        $cliente->user_id = $user->id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cobranca $cobranca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cobranca $cobranca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cobranca $cobranca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cobranca $cobranca)
    {
        //
    }
}
