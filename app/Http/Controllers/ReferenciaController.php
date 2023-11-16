<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostReferenciaRequest;
use App\Models\Referencia;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\warning;

class ReferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($cliente_id)
    {
        $referencias = Referencia::where('cliente_id', $cliente_id)->get();
        return view('Referencia.index', ['referencias' => $referencias, 'cliente_id' => $cliente_id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($cliente_id)
    {
        return view('Referencia.create',['referencia' => new Referencia(), 'cliente_id' => $cliente_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostReferenciaRequest $request)
    {
        Log::info('ReferenciaController@store');
        Referencia::create($request->validated());
        session()->flash('success', 'Referencia creado correctamente');
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $referencias = Referencia::all();
        $referencia = $referencias->find($id);
        return view('referencia.show', compact('referencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referencia $referencia)
    {
        Log::warning($referencia);
        return view('Referencia.edit', ['referencia' => $referencia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePostReferenciaRequest $request, Referencia $referencia)
    {

        $referencia->update($request->validated());

        session()->flash('success', 'Referencia actualizado correctamente');

        return redirect()->route('cliente.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referencia $referencia)
    {
        $referencia->delete();
        session()->flash('success', 'Referencia eliminado correctamente');
        return redirect()->route('cliente.index');
    }
}
