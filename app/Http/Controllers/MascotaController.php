<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostMascotaRequest;
use App\Models\Mascota;
use Illuminate\View\View;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $mascotas = Mascota::all();
        return view('Mascota.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascota.create',['mascota' => new Mascota()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostMascotaRequest $request)
    {

        Mascota::create($request->validated());

        return redirect()->route('mascota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mascotas = Mascota::all();
        $mascota = $mascotas->find($id);
        return view('mascota.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view('mascota.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePostMascotaRequest $request, Mascota $mascota)
    {

        $mascota->update($request->validated());

        session()->flash('success', 'Mascota actualizado correctamente');

        return redirect()->route('mascota.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        session()->flash('success', 'Mascota eliminado correctamente');
        return redirect()->route('mascota.index');
    }
}
