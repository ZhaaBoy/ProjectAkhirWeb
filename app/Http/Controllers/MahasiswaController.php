<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $mhs = mahasiswa::all();
        return view('content.mahasiswa', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'string|required',
            'nim' => 'required|min:10|max:10|string|unique:mahasiswas',
            'prodi' => '|required|string',
            'alamat' => '|required|string|max:255',
            'no_hp' => 'string|required|min:11|max:13',
        ]);

        if (mahasiswa::create($validasi)) {
            alert()->success("{$validasi['nama']}", 'Berhasil Di Tambah');
            return to_route('dashboard');
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
        $mhswa = mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mhswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $validasi = $request->validate([

        //     'nama' => 'string|required',
        //     'nim' => 'required|min:10|max:10|string|unique:mahasiswas' . $mhswa->id,
        //     'prodi' => '|required|string',
        //     'alamat' => '|required|string|max:255',
        //     'no_hp' => 'string|required|min:11|max:13'
        // ]);

        // $mhswa->update($validasi);
        // // Alert::success('Success', 'Data Berhasil Di Update');
        // return redirect()->route('dashboard'); }


        // $validasi =  $request->validate([
        //     'nama' => 'string|required',
        //     'prodi' => 'required|string',
        //     'alamat' => 'required|string|max:255',
        //     'no_hp' => 'required|max:13'
        // ]);

        $ambilldata = mahasiswa::where('id', $id)->first();

        $component = [
            'nama' => 'string|required',
            'prodi' => 'required|string',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|max:13'
        ];

        if($request->nim != $ambilldata->nim){
            $component['nim'] = 'required|min:10|max:10|string|unique:mahasiswas';
        }

        $val = $request->validate($component);

        $simpan = mahasiswa::find($id)->update($val);

        if($simpan){
            alert()->success($val['nama'], 'Berhasil Di Update');
            return to_route('dashboard');
        } else {
            alert()->error('Kesalahan Data');
            return back();
        }

        // $validasi = $request->validate([
        //     'nama' => 'string|required',
        //     'nim' => 'required|min:10|max:10|unique:mahasiswas,nim' . $mhswa->id,
        //     'prodi' => 'required|string',
        //     'alamat' => 'required|string|max:255',
        //     'no_hp' => 'required|min:11|max:13',
        // ]);

        // if ($mhswa->update($validasi)) {
        //     alert()->success("{$validasi['nama']}", 'Berhasil Di Tambah');
        //     return to_route('dashboard');
        // } else {
        //     alert()->error('Gagal Cok Asu');
        //     return back();
        // }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mhswa = mahasiswa::findOrFail($id);
        // $mhs->delete();
        // return back();
        if ($mhswa->delete()) {
            alert()->success("{$mhswa['nama']}", 'Berhasil Di Hapus');
            return back();
        } else {
            alert()->error('Gagal');
            return back();
        }
    }
}
