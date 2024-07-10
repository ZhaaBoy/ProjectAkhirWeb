@extends('content.index')
@section('tittle', 'Tambah Data Kantin')
@section('ktn', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('ktn.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Kantin</label>
              <input type="text" name="nama_kantin" class="form-control"  @error('nama_kantin') is invalid @enderror required>
              @error('nama_kantin')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Nama Pemilik</label>
              <input type="text" name="pemilik" class="form-control"  @error('pemilik') is invalid @enderror  required>
              @error('pemilik')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Tahun Berdiri</label>
              <input type="text" name="tahun_berdiri" class="form-control"  @error('tahun_berdiri') is invalid @enderror required>
              @error('tahun_berdiri')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Jenis Produk</label>
              <select class="form-select" name="jenis_produk" id="jenis_produk" aria-label="Default select example" @error('jenis_produk') is invalid @enderror required>
                <option selected disabled>Silahkan pilih</option>
                <option>Serba Ada</option>
                <option>Snack</option>
                <option>Minuman</option>
                <option>Makanan</option>
              </select>
              @error('jenis_produk')
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
