<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mbl = Mobil::all();
        return view('mobil.index', compact('mbl'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'merk' => 'string|required',
            'no_pol' => 'required|string|unique:mobils',
            'no_rangka' => 'required|string',
            'type' => 'required|string',
            'tahun' => 'string|required|min:4|max:4',
        ]);

        if (Mobil::create($validasi)) {
            alert()->success("{$validasi['merk']}", 'Berhasil Di Tambah');
            return to_route('mobil');
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
        $mbl = Mobil::find($id);
        return view('mobil.edit', compact('mbl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $ambilldata = Mobil::where('id', $id)->first();

        $component = [
            'merk' => 'string|required',
            'no_rangka' => '|required|string',
            'type' => '|required|string',
            'tahun' => 'string|required|min:4|max:4',
        ];

        if($request->nim != $ambilldata->nim){
            $component['no_pol'] = 'required|string|unique:mobils';
        }

        $val = $request->validate($component);

        $simpan = Mobil::find($id)->update($val);

        if($simpan){
            alert()->success($val['merk'], 'Berhasil Di Update');
            return to_route('mobil');
        } else {
            alert()->error('Kesalahan Data');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mbl = Mobil::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($mbl->delete()) {
            alert()->success("{$mbl['nama']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
