<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pg = Pegawai::all();
        return view('pegawai.index', compact('pg'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_pegawai' => 'string|required',
            'jabatan' => 'required|string',
            'divisi' => 'required|string',
            'tahun_masuk' => 'required|string',
        ]);

        if (Pegawai::create($validasi)) {
            alert()->success("{$validasi['nama_pegawai']}", 'Berhasil Di Tambah');
            return to_route('pegawai');
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pg = Pegawai::find($id);
        return view('pegawai.edit', compact('pg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pg)
    {
        $validasi = $request->validate([
            'nama_pegawai' => 'string|required',
            'jabatan' => 'required|string',
            'divisi' => 'required|string',
            'tahun_masuk' => 'required|string',
        ]);

        if ($pg->update($validasi)) {
            alert()->success("{$validasi['nama_pegawai']}", 'Berhasil Di Update');
            return to_route('pegawai');
        } else {
            alert()->error('Gagal');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pg = Pegawai::findOrFail($id);
        if ($pg->delete()) {
            alert()->success("{$pg['nama_pegawai']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
