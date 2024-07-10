@extends('content.index')
@section('tittle', 'Data pegawai')
@section('pg', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card w-100">
    <div class="card-body p-4">
      <div class="row">
          <div class="col-auto me-auto"><h1 class="card-title fw-semibold mb-6">Data Mobil</h1></div>
          <div class="col-md-auto"><a class="btn btn-primary" href="{{route ('pg.create')}}"><i class=""></i> Tambah Data</a> </div>
        </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nama Pegawai</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Jabatan</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Divisi</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Tahun Masuk</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @forelse ($pg as $key => $pgs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$pgs->nama_pegawai}}</td>
                <td>{{$pgs->jabatan}}</td>
                <td>{{$pgs->divisi}}</td>
                <td>{{$pgs->tahun_masuk}}</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('pg.edit', $pgs->id) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="{{ route('pg.destroy', $pgs->id) }}" method="POST">
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
