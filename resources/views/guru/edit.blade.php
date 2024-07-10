@extends('content.index')
@section('tittle', 'Edit Data Guru')
@section('gr', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('gr.update', $gr->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nomor Induk</label>
              <input type="text" name="nomor_induk" class="form-control"  @error('nomor_induk') is invalid @enderror value="{{ old('nomor_induk') ?? $gr->nomor_induk }}" required>
              @error('nomor_induk')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Nama Guru</label>
              <input type="text" name="nama_guru" class="form-control"  @error('nama_guru') is invalid @enderror value="{{ old('nama_guru') ?? $gr->nama_guru }}" required>
              @error('nama_guru')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Golongan</label>
              <input type="text" name="golongan" class="form-control"  @error('golongan') is invalid @enderror value="{{ old('golongan') ?? $gr->golongan }}" required>
              @error('golongan')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Tahun pengangkatan</label>
              <input type="text" name="tahun_pengangkatan" class="form-control"  @error('tahun_pengangkatan') is invalid @enderror value="{{ old('tahun_pengangkatan') ?? $gr->tahun_pengangkatan }}" required>
              @error('tahun_pengangkatan')
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
