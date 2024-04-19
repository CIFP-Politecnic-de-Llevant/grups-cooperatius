<?php

namespace App\Http\Controllers;

use App\Models\Curs;
use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuaris = Usuari::all();
        return view('usuari.index', compact('usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curs::all();
        return view('usuari.edit',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'curs_id' => 'required',
        ]);

        Usuari::create($request->all());

        return redirect()->route('usuari.index')->with('success', 'Usuari registrat correctament');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuari = Usuari::findOrFail($id);
        return view('usuari.show', compact('usuari'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuari = Usuari::findOrFail($id);
        $cursos = Curs::all();
        return view('usuari.edit', compact('usuari'),compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $usuari = Usuari::findOrFail($id);
        $usuari->update($request->all());

        return redirect()->route('usuari.index')->with('success', 'Usuari actualitzat correctament');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuari = Usuari::findOrFail($id);
        $usuari->delete();

        return redirect()->route('usuari.index')->with('success', 'Usuari eliminat correctament');
    }
}
