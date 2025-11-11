<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Harga;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('buku.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'pengarang' => 'required',
            'kategori_id' => 'required',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('buku.edit', compact('buku', 'kategoris'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'name' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'pengarang' => 'required',
            'kategori_id' => 'required',
        ]);

        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus!');
    }
}
