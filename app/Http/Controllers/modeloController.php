<?php

namespace App\Http\Controllers;

use App\Models\estilo;
use Illuminate\Http\Request;

class modeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return('hola instructor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('modelo.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $desing = new estilo ();
        $desing->nombre=$request ->input('nombre');
        $desing->colores=$request ->input('colores');
        $desing->disenos=$request ->input('disenos');
        $desing->cantidad=$request ->input('cantidad');
        $desing->save();
        return 'creado correctamente';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
