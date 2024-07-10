@extends('content.index')
@section('tittle', 'Tambah Data Pegawai')
@section('pg', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('pg.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
              <input type="text" name="nama_pegawai" class="form-control"  @error('nama_pegawai') is invalid @enderror required>
              @error('nama_pegawai')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Jabatan</label>
              <input type="text" name="jabatan" class="form-control"  @error('jabatan') is invalid @enderror  required>
              @error('jabatan')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Divisi</label>
              <select class="form-select" name="divisi" id="divisi" aria-label="Default select example" @error('divisi') is invalid @enderror required>
                <option selected disabled>Pilih Divisi</option>
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
              <label for="exampleInputnim1" class="form-label">Tahun masuk</label>
              <input type="number" name="tahun_masuk" class="form-control"  @error('tahun_masuk') is invalid @enderror required>
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
