@extends('layout')

@section('content')
<div class="col-12">
    <div class="rounded h-100 p-4">
        <a href="/penduduk/anggota/create/{{ $kk->id }}" class="btn btn-primary mb-3">Tambah Anggota KK</a>
        <h6 class="mb-4">Data Penduduk - Nomor KK : {{ $kk->nomorkk }}</h6>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                    <th scope="col">Nomor Induk Kependudukan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Status Pernikahan</th>
                    <th scope="col">Status Hub. Keluarga</th>
                    <th scope="col">Kewarganegaraan</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penduduk as $pdk)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pdk->nik }}</td>
                        <td>{{ $pdk->nama }}</td>
                        <td>{{ $pdk->jeniskelamin }}</td>
                        <td>{{ $pdk->tempatlahir }}</td>
                        <td>{{ $pdk->tanggallahir }}</td>
                        <td>{{ $pdk->agama }}</td>
                        <td>{{ $pdk->pendidikan }}</td>
                        <td>{{ $pdk->pekerjaan }}</td>
                        <td>{{ $pdk->pernikahan }}</td>
                        <td>{{ $pdk->status }}</td>
                        <td>{{ $pdk->kewarganegaraan }}</td>
                        <td>{{ $pdk->namaayah }}</td>
                        <td>{{ $pdk->namaibu }}</td>
                        <td><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Aksi</a>
                            <div class="dropdown-menu bg-light border-1">
                                <a href="/penduduk/anggota/{{ $pdk->id }}/edit" class="btn btn-outline-primary m-2 dropdown-item"><i class="fas fa-edit me-2"></i>Update</a>
                                <form action="penduduk/anggota/{{ $pdk->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger m-2 dropdown-item" onclick="return confirm('Apakah Anda yakin menghapus data ini? Menghapus KK akan menghapus semua data anggota KK')"><i class="fas fa-trash me-2"></i>Hapus</button>
                                </form>
                            </div>
                    </tr>    
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ url('penduduk') }}" class="btn btn-secondary mt-3 ms-3">Kembali</a>
    </div>
</div>
@endsection