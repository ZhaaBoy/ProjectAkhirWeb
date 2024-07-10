<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kantin;

class KantinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ktn = Kantin::all();
    return view('kantin.index', compact('ktn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kantin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_kantin' => 'string|required',
            'tahun_berdiri' => 'required|string|min:4|min:4',
            'pemilik' => 'required|string',
            'jenis_produk' => 'required|string',
        ]);

        if (Kantin::create($validasi)) {
            alert()->success("{$validasi['nama_kantin']}", 'Berhasil Di Tambah');
            return to_route('kantin');
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
        $ktn = Kantin::find($id);
        return view('kantin.edit', compact('ktn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kantin $ktn)
    {
        $validasi = $request->validate([
            'nama_kantin' => 'string|required',
            'tahun_berdiri' => 'required|string|min:4|min:4',
            'pemilik' => 'required|string',
            'jenis_produk' => 'required|string',
        ]);

        if ($ktn->update($validasi)) {
            alert()->success("{$validasi['nama_kantin']}", 'Berhasil Di Update');
            return to_route('kantin');
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
        $ktn = Kantin::findOrFail($id);
        if ($ktn->delete()) {
            alert()->success("{$ktn['nama_kantin']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
