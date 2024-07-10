@extends('content.index')
@section('tittle', 'Edit Data Pegawai')
@section('pg', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('pg.update', $pg->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
              <input type="text" name="nama_pegawai" class="form-control"  @error('nama_pegawai') is invalid @enderror value="{{ old('nama_pegawai') ?? $pg->nama_pegawai }}" required>
              @error('nama_pegawai')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Jabatan</label>
              <input type="text" name="jabatan" class="form-control"  @error('jabatan') is invalid @enderror value="{{ old('jabatan') ?? $pg->jabatan }}" required>
              @error('jabatan')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Divisi</label>
              <select class="form-select" name="divisi" id="divisi" aria-label="Default select example" @error('divisi') is invalid @enderror required>
                <option selected value="{{ $pg->divisi }}">{{ $pg->divisi }}</option>
                <option>Divisi Komunikasi & Informasi</option>
                <option>Divisi IT</option>
                <option>Divisi Pemasaraan</option>
                <option>Divisi Produksi</option>
                </select>
              @error('divisi')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Tahun Masuk</label>
              <input type="text" name="tahun_masuk" class="form-control"  @error('tahun_masuk') is invalid @enderror value="{{ old('tahun_masuk') ?? $pg->tahun_masuk }}" required>
              @error('tahun_masuk')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
