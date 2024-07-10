@extends('content.index')
@section('tittle', 'Edit Pesawat')
@section('pswt', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('pswt.update', $pswt->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Pesawat</label>
              <input type="text" name="nama_pesawat" class="form-control"  @error('nama_pesawat') is invalid @enderror value="{{ old('nama_pesawat') ?? $pswt->nama_pesawat }}" required>
              @error('nama_pesawat')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Kode Pesawat</label>
              <input type="text" name="kode_pesawat" class="form-control"  @error('kode_pesawat') is invalid @enderror value="{{ old('kode_pesawat') ?? $pswt->kode_pesawat }}" required>
              @error('kode_pesawat')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Type</label>
              <input type="text" name="type" class="form-control"  @error('type') is invalid @enderror value="{{ old('type') ?? $pswt->type }}" required>
              @error('type')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
            <label for="exampleInputnim1" class="form-label">Tahun Rakit</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Recipient's username" name="tahun_rakit" aria-describedby="basic-addon2" @error('tahun_rakit') is invalid @enderror value="{{ old('tahun_rakit') ?? $pswt->tahun_rakit }}" required>
        </div>
        @error('tahun_rakit')
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
