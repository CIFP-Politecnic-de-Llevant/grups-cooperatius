<?php

namespace App\Http\Controllers;

use App\Models\Curs;
use Illuminate\Http\Request;

class CursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curs = Curs::all();
        return view('curs.index',compact('curs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curs.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        /*if ($request->has('id')){
            $curs = Curs::findOrFail($request->id);
            $curs->update($request->all());
            $mensaje = 'Actualizado correctamente';
        }else{
            Curs::create($request->all());
            $mensaje = 'Creado correctamente';
        }*/

        Curs::create($request->all());

        return redirect()->route('curs.index')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curs = Curs::findOrFail($id);
        return view('curs.show', compact('curs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curs = Curs::findOrFail($id);
        return view('curs.edit', compact('curs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $curs = Curs::findOrFail($id);
        $curs->update($request->all());

        return redirect()->route('curs.index')->with('success', 'Curso actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curs = Curs::findOrFail($id);
        $curs->delete();

        return redirect()->route('curs.index')->with('success', 'Curso eliminado correctamente.');
    }
}
