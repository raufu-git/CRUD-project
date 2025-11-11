<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Buku;
use Illuminate\Http\Request;

class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hargas = Harga::all();
        return view('harga.index', compact('hargas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bukus = Buku::all();
        return view('harga.create', compact('bukus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'harga' => 'required|numeric|min:0',
        ]);

        Harga::create($request->all());
        return redirect()->route('harga.index')->with('success', 'Harga berhasil ditambahkan.');
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
        $harga = Harga::findOrFail($id);
        $bukus = Buku::all();
        return view('harga.edit', compact('bukus', 'harga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',
            'harga' => 'required|numeric|min:0',
        ]);

        $harga = Harga::findOrFail($id);
        $harga->update([
            'buku_id' => $request->buku_id,
            'harga' => $request->harga,
        ]);

        return redirect()->route('harga.index')->with('success', 'Harga berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $harga = Harga::findOrFail($id);
        $harga->delete();

        return redirect()->route('harga.index')->with('success', 'Harga berhasil dihapus.');
    }
}
