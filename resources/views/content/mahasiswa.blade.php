@extends('content.index')
@section('tittle', 'Data Anggota')
@section('mahasiswa', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card w-100">
    <div class="card-body p-4">
      <div class="row">
          <div class="col-auto me-auto"><h1 class="card-title fw-semibold mb-6">Data Anggota</h1></div>
          <div class="col-md-3"><a class="btn btn-primary" href="{{route ('mhs.create')}}"><i class=""></i> Tambah Anggota</a> </div>
        </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nama</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nim</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Program Studi</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Alamat</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @forelse ($mhs as $key => $mhss)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$mhss->nama}}</td>
                <td>{{$mhss->nim}}</td>
                <td>{{$mhss->prodi}}</td>
                <td>{{$mhss->alamat}}</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('mhs.edit', $mhss->id) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="{{ route('mhs.destroy', $mhss->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete_confirm">
                            <i class="fas fa-trash"></i>Delete</button>
                    </form>
                </div>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Data Kosong</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
