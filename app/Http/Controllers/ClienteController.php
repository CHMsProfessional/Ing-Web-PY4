<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostClienteRequest;
use App\Models\Cliente;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $clientes = Cliente::all();
        return view('Cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create',['cliente' => new Cliente()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostClienteRequest $request)
    {

            Cliente::create($request->validated());

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $clientes = Cliente::all();
        $cliente = $clientes->find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePostClienteRequest $request, Cliente $cliente)
    {

        $cliente->update($request->validated());

        session()->flash('success', 'Cliente actualizado correctamente');

        return redirect()->route('cliente.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        session()->flash('success', 'Cliente eliminado correctamente');
        return redirect()->route('cliente.index');
    }
}
