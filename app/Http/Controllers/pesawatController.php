<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesawat;

class pesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pswt = Pesawat::all();
        return view('pesawat.index', compact('pswt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesawat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_pesawat' => 'string|required',
            'kode_pesawat' => 'required|string',
            'type' => 'required|string',
            'tahun_rakit' => 'required|string',
        ]);

        if (Pesawat::create($validasi)) {
            alert()->success("{$validasi['nama_pesawat']}", 'Berhasil Di Tambah');
            return to_route('pesawat');
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
        $pswt = Pesawat::find($id);
        return view('pesawat.edit', compact('pswt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesawat $pswt)
    {
        $validasi = $request->validate([
            'nama_pesawat' => 'string|required',
            'kode_pesawat' => 'required|string',
            'type' => 'required|string',
            'tahun_rakit' => 'required|string',
        ]);

        if ($pswt->update($validasi)) {
            alert()->success("{$validasi['nama_pesawat']}", 'Berhasil Di Update');
            return to_route('pesawat');
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
        $pswt = Pesawat::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($pswt->delete()) {
            alert()->success("{$pswt['nama_pesawat']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
