@extends('content.index')
@section('tittle', 'Tambah Komputer')
@section('kom', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Forms</h5>
      <div class="card">
        <div class="card-body">
          <form action="{{ route('kom.store') }}" method="POST" enctype="multipart/form-data">
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
              <label for="exampleInputnim1" class="form-label">Processor</label>
              <input type="text" name="processor" class="form-control"  @error('processor') is invalid @enderror required>
              @error('processor')
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
              <label for="exampleInputnim1" class="form-label">Hardisk</label>
              <select class="form-select" name="hardisk" id="hardisk" aria-label="Default select example" @error('hardisk') is invalid @enderror required>
                <option selected disabled>Silahkan pilih</option>
                <option>SSD 128 GB</option>
                <option>SSD 256 GB</option>
                <option>SSD 512 GB</option>
                <option>SSD 1024 GB</option>
              </select>
              @error('hardisk')
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
