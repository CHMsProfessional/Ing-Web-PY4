<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostAdopcionRequest;
use App\Models\Adopcion;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\View\View;

class AdopcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $adopciones = Adopcion::all();
        return view('adopcion.index', compact('adopciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();

        $mascotas = Mascota::whereNotIn('mascota_id', Adopcion::pluck('mascota_id')->all())->get();

        return view('Adopcion.create', ['adopcion' => new Adopcion(), 'clientes' => $clientes, 'mascotas' => $mascotas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostAdopcionRequest $request)
    {
        $adopcionData = $request->validated();

        $adopcion = Adopcion::create($adopcionData);

        $mascota = $adopcion->mascota;

        $mascota->disponibilidad = 0;
        $mascota->save();

        return redirect()->route('adopcion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $adopciones = Adopcion::all();
        $adopcion = $adopciones->find($id);
        return view('adopcion.show', compact('adopcion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adopcion $adopcion)
    {
        return view('adopcion.edit', compact('adopcion'));
    }

    /**
     * Update the specified resource in storage.
     */
//    public function update(SavePostAdopcionRequest $request, Adopcion $adopcion)
//    {
//
//        $adopcion->update($request->validated());
//
//        session()->flash('success', 'Adopcion actualizado correctamente');
//
//        return redirect()->route('adopcion.index');
//
//    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adopcion $adopcion)
    {
        $mascota = $adopcion->mascota;

        $mascota->disponibilidad = 1;
        $mascota->save();

        $adopcion->delete();

        session()->flash('success', 'Adopcion eliminado correctamente');
        return redirect()->route('adopcion.index');
    }
}
