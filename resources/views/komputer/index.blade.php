@extends('content.index')
@section('tittle', 'Komputer')
@section('kom', 'active')
@section('content')
@include('sweetalert::alert')
<div class="card w-100">
    <div class="card-body p-4">
      <div class="row">
          <div class="col-auto me-auto"><h1 class="card-title fw-semibold mb-6">Data Smartphone</h1></div>
          <div class="col-lg-auto"><a class="btn btn-primary" href="{{route ('kom.create')}}"><i class=""></i> Tambah Data</a> </div>
        </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Merk</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Type</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Processor</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Ram</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Hardisk</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @forelse ($kom as $key => $koms)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$koms->merk}}</td>
                <td>{{$koms->type}}</td>
                <td>{{$koms->processor}}</td>
                <td>{{$koms->ram}} GB</td>
                <td>{{$koms->hardisk}}</td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <a href="{{ route('kom.edit', $koms->id) }}" class="btn btn-success btn-sm">
                        <i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="{{ route('kom.destroy', $koms->id) }}" method="POST">
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
