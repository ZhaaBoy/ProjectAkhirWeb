<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gr = Guru::all();
        return view('guru.index',compact('gr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nomor_induk' => 'string|required',
            'nama_guru' => 'required|string',
            'golongan' => 'required|string',
            'tahun_pengangkatan' => 'required|string',
        ]);

        if (Guru::create($validasi)) {
            alert()->success("{$validasi['nama_guru']}", 'Berhasil Di Tambah');
            return to_route('guru');
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
    public function edit(string $id)
    {
        $gr = Guru::find($id);
        return view('guru.edit', compact('gr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $gr)
    {
        $validasi = $request->validate([
            'nomor_induk' => 'string|required',
            'nama_guru' => 'required|string',
            'golongan' => 'required|string',
            'tahun_pengangkatan' => 'required|string',
        ]);

        if ($gr->update($validasi)) {
            alert()->success("{$validasi['nama_guru']}", 'Berhasil Di Update');
            return to_route('guru');
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
        $gr = Guru::findOrFail($id);
        if ($gr->delete()) {
            alert()->success("{$gr['nama_guru']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
