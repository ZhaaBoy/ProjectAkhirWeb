<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pr = produk::all();
        return view ('produk.index', compact('pr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kode' => 'string|required',
            'nama_produk' => 'required|string',
            'jenis' => 'required|string',
            'stok' => 'required|string',
        ]);

        if (produk::create($validasi)) {
            alert()->success("{$validasi['nama_produk']}", 'Berhasil Di Tambah');
            return to_route('produk');
        } else {
            alert()->error('Gagal');
            return back();
        }
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
    public function edit($id)
    {
        $pr = produk::find($id);
        return view('produk.edit', compact('pr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $pr)
    {
        $validasi = $request->validate([
            'kode' => 'string|required',
            'nama_produk' => 'required|string',
            'jenis' => 'required|string',
            'stok' => 'required|string',
        ]);

        if ($pr->update($validasi)) {
            alert()->success("{$validasi['nama_produk']}", 'Berhasil Di Update');
            return to_route('index');
        } else {
            alert()->error('Gagal');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pr = Smartphone::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($pr->delete()) {
            alert()->success("{$pr['nama_produk']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
