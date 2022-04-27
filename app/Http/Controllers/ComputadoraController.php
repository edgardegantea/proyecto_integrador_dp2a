<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Http\Requests\StoreComputadoraRequest;
use App\Http\Requests\UpdateComputadoraRequest;

class ComputadoraController extends Controller
{

    public function index()
    {
        return view('computadoras.index')->with('computadoras', Computadora::all());
    }


    public function create()
    {
        return view('computadoras.create');
    }


    public function store(StoreComputadoraRequest $request)
    {
        $request->validate([
            'marca'             => 'required',
            'modelo'            => 'required',
            'descripcion'       => 'required',
            'tipo'              => 'required',
            'precioDeCompra'    => 'required',
            'precioDeVenta'     => 'required',
            'stock'             => 'required',
            'disponible'        => 'required'
        ]);

        Computadora::create([
            'marca'             => $request->marca,
            'modelo'            => $request->modelo,
            'descripcion'       => $request->descripcion,
            'tipo'              => $request->tipo,
            'precioDeCompra'    => $request->precioDeCompra,
            'precioDeVenta'     => $request->precioDeVenta,
            'stock'             => $request->stock,
            'disponible'        => $request->disponible
        ]);

        return redirect()->route('computadora.index');
    }


    public function show(Computadora $computadora)
    {
        return view('computadoras.show', compact('computadora'));
    }


    public function edit(Computadora $computadora)
    {
        return view('computadoras.edit', compact('computadora'));
    }


    public function update(UpdateComputadoraRequest $request, Computadora $computadora)
    {
        $request->validate([
            'marca'             => 'required',
            'modelo'            => 'required',
            'descripcion'       => 'required',
            'tipo'              => 'required',
            'precioDeCompra'    => 'required',
            'precioDeVenta'     => 'required',
            'stock'             => 'required',
            'disponible'        => 'required'
        ]);

        $computadora->update($request->all());

        return redirect()->route('computadora.index');
    }


    public function destroy(Computadora $computadora)
    {
        $computadora->delete();

        return redirect()->route('computadora.index');
    }
}
