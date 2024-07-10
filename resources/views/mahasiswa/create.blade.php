@extends('content.index')
@section('tittle', 'Tambah Anggota')
@section('mahasiswa', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('mhs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control"  @error('nama') is invalid @enderror required>
              @error('nama')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Nim</label>
              <input type="number" name="nim" class="form-control"  @error('nim') is invalid @enderror  required>
              @error('nim')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">prodi</label>
              <input type="text" name="prodi" class="form-control"  @error('prodi') is invalid @enderror required>
              @error('prodi')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Handphone</label>
              <input type="number" name="no_hp" class="form-control"  @error('no_hp') is invalid @enderror required>
              @error('no_hp')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" id="" cols="15" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
