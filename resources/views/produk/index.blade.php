@extends('content.index')
@section('tittle', 'Produk')
@section('pr', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card w-100">
    <div class="card-body p-4">
      <div class="row">
          <div class="col-auto me-auto"><h1 class="card-title fw-semibold mb-6">Data Smartphone</h1></div>
          <div class="col-md-3"><a class="btn btn-primary" href="{{route ('pr.create')}}"><i class=""></i> Tambah Data</a> </div>
        </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Kode</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Nama Produk</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Jenis</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Stok</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @forelse ($pr as $key => $prs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$prs->kode}}</td>
                <td>{{$prs->nama_produk}}</td>
                <td>{{$prs->jenis}}</td>
                <td>{{$prs->stok}}</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('pr.edit', $prs->id) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="{{ route('pr.destroy', $prs->id) }}" method="POST">
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
