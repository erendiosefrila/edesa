@extends('layout')

@section('content')
<div class="col-12">
    <div class="rounded h-100 p-4">
        <a href="{{ url('penduduk/create') }}" class="btn btn-primary mb-3">Tambah KK</a>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h6 class="mb-4">Data Penduduk - Kartu Keluarga</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor Kartu Keluarga</th>
                    <th scope="col">Kepala Keluarga</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduk as $pdk)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pdk->nomorkk }}</td>
                        <td>{{ $pdk->nama }}</td>
                        <td><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Aksi</a>
                            <div class="dropdown-menu bg-light border-1">
                                <a href="penduduk/{{ $pdk->id }}" class="btn btn-outline-primary m-2 dropdown-item"><i class="fas fa-info-circle me-2"></i>Detail</a>
                                <form action="penduduk/{{ $pdk->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger m-2 dropdown-item" onclick="return confirm('Apakah Anda yakin menghapus data ini? Menghapus KK akan menghapus semua data anggota KK')"><i class="fas fa-trash me-2"></i>Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection