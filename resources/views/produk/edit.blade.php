@extends('content.index')
@section('tittle', 'Edit P')roduk
@section('pr', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('pr.update', $pr->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">kode</label>
              <input type="text" name="kode" class="form-control"  @error('kode') is invalid @enderror value="{{ old('kode') ?? $pr->kode }}" required>
              @error('kode')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Nama Porduk</label>
              <input type="text" name="nama_produk" class="form-control"  @error('nama_produk') is invalid @enderror value="{{ old('nama_produk') ?? $pr->nama_produk }}" required>
              @error('nama_produk')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Jenis</label>
              <input type="text" name="jenis" class="form-control"  @error('jenis') is invalid @enderror value="{{ old('jenis') ?? $pr->type }}" required>
              @error('jenis')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
            <label for="exampleInputnim1" class="form-label">Stok</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Recipient's username" name="stok" aria-describedby="basic-addon2" @error('stok') is invalid @enderror value="{{ old('stok') ?? $pr->stok }}" required>
        </div>
        @error('stok')
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
