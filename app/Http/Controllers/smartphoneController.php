<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;

class smartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hp = Smartphone::all();
        return view('smartphone.index', compact('hp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('smartphone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'merk' => 'string|required',
            'type' => 'required|string',
            'warna' => 'required|string',
            'ram' => 'required|string',
            'storage' => 'string|required',
        ]);

        if (Smartphone::create($validasi)) {
            alert()->success("{$validasi['merk']}", 'Berhasil Di Tambah');
            return to_route('index');
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
        $hp = Smartphone::find($id);
        return view('smartphone.edit', compact('hp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Smartphone $hp)
    {
        $validasi = $request->validate([
            'merk' => 'string|required',
            'type' => 'required|string',
            'warna' => 'required|string',
            'ram' => 'required|string',
            'storage' => 'string|required',
        ]);

        if ($hp->update($validasi)) {
            alert()->success("{$validasi['merk']}", 'Berhasil Di Update');
            return to_route('index');
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
        $hp = Smartphone::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($hp->delete()) {
            alert()->success("{$hp['merk']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
