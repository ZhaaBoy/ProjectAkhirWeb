@extends('content.index')
@section('tittle', 'Edit Anggota')
@section('mahasiswa', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Edit Anggota</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('mhs.update', $mhswa->id)  }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control"  @error('nama') is invalid @enderror value="{{ old('nama') ?? $mhswa->nama }}" required>
              @error('nama')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Nim</label>
              <input type="number" name="nim" class="form-control"  @error('nim') is invalid @enderror value="{{ old('nim') ?? $mhswa->nim }}" required>
              @error('nim')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Program Studi</label>
              <input type="text" name="prodi" class="form-control"  @error('prodi') is invalid @enderror value="{{ old('prodi') ?? $mhswa->prodi }}" required>
              @error('prodi')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Handphone</label>
              <input type="number" name="no_hp" class="form-control"  @error('no_hp') is invalid @enderror value="{{ old('no_hp') ?? $mhswa->no_hp }}" required>
              @error('no_hp')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" id="" cols="15" rows="5" >{{ old('alamat') ?? $mhswa->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
