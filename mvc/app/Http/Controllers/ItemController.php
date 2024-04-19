<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Usuari;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuari = Usuari::all();
        return view('item.create', compact('usuari'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
        ]);

        Item::create($request->all());

        return redirect()->route('item.index')->with('success', 'Item creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::findOrFail($id);
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipo' => 'required',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('item.index')->with('success', 'Item actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('item.index')->with('success', 'Item eliminado satisfactoriamente');
    }
}
