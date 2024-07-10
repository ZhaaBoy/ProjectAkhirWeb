<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komputer;

class KomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $kom = Komputer::all();
       return view('komputer.index', compact('kom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('komputer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'merk' => 'string|required',
            'type' => 'required|string',
            'processor' => 'required|string',
            'ram' => 'required|string',
            'hardisk' => 'string|required',
        ]);

        if (Komputer::create($validasi)) {
            alert()->success("{$validasi['merk']}", 'Berhasil Di Tambah');
            return to_route('komputer');
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
        $kom = Komputer::find($id);
        return view('komputer.edit', compact('kom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Komputer $kom)
    {
        $validasi = $request->validate([
            'merk' => 'string|required',
            'type' => 'required|string',
            'processor' => 'required|string',
            'ram' => 'required|string',
            'hardisk' => 'string|required',
        ]);

        if ($kom->update($validasi)) {
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
    public function destroy($id)
    {
        $kom = Komputer::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($kom->delete()) {
            alert()->success("{$kom['merk']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
