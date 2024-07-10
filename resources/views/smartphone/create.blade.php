@extends('content.index')
@section('tittle', 'Tambah Smartphone')
@section('hp', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('hp.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Merk</label>
              <input type="text" name="merk" class="form-control"  @error('merk') is invalid @enderror required>
              @error('merk')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Type</label>
              <input type="text" name="type" class="form-control"  @error('type') is invalid @enderror  required>
              @error('type')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Warna</label>
              <input type="text" name="warna" class="form-control"  @error('warna') is invalid @enderror required>
              @error('warna')
                  <div class="alert alert-danger"> {{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
            <label for="exampleInputnim1" class="form-label">Ram</label>
            <div class="input-group mb-3">
            <input type="number" class="form-control" aria-label="Recipient's username" name="ram" aria-describedby="basic-addon2" @error('ram') is invalid @enderror required>
            <span class="input-group-text" id="basic-addon2">GB</span>
        </div>
        @error('ram')
            <div class="alert alert-danger"> {{ $message }}</div>
        @enderror
        </div>
            <div class="mb-3">
              <label for="exampleInputnim1" class="form-label">Storage</label>
              <select class="form-select" name="storage" id="storage" aria-label="Default select example" @error('storage') is invalid @enderror required>
                <option selected disabled>Silahkan pilih</option>
                <option>32 GB</option>
                <option>64 GB</option>
                <option>128 GB</option>
              </select>
              @error('storage')
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
