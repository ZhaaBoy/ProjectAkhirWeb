@extends('content.index')
@section('tittle', 'Tambah Data Mobil')
@section('mobil', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('mbl.update', $mbl->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Merk</label>
              <input type="text" name="merk" class="form-control"  @error('merk') is invalid @enderror value="{{ old('merk') ?? $mbl->merk }}" required>
              @error('merk')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Type</label>
              <input type="text" name="type" class="form-control"  @error('type') is invalid @enderror value="{{ old('type') ?? $mbl->type }}" required>
              @error('type')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">No Polisi</label>
              <input type="text" name="no_pol" class="form-control"  @error('no_pol') is invalid @enderror value="{{ old('no_pol') ?? $mbl->no_pol }}" required>
              @error('no_pol')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">No Rangka</label>
              <input type="text" name="no_rangka" class="form-control"  @error('no_rangka') is invalid @enderror value="{{ old('no_rangka') ?? $mbl->no_rangka }}" required>
              @error('no_rangka')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Tahun</label>
              <input type="number" name="tahun" class="form-control"  @error('tahun') is invalid @enderror value="{{ old('tahun') ?? $mbl->tahun }}" required>
              @error('tahun')
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
