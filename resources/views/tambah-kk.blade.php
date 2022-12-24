@extends('layout')

@section('content')
<div class="col-12">
    <div class="row rounded h-100 p-4">
        <h6 class="mb-4">Tambah Kartu Keluarga</h6>
        <form method="post" action="/penduduk">
            @csrf
            <div class="row mb-3">
                <label for="nomorkk" class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nomorkk')
                        is-invalid
                    @enderror" id="nomorkk" name="nomorkk" autofocus value="{{ old('nomorkk') }}">
                    @error('nomorkk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <h6 class="mb-4">Data Kepala Keluarga</h6>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama')
                        is-invalid
                    @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="nik" class="col-sm-2 col-form-label">Nomor Induk Kependudukan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nik')
                        is-invalid
                    @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="jeniskelamin" id="jeniskelamin">
                        <option selected>-</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('tempatlahir')
                        is-invalid
                    @enderror" id="tempatlahir" name="tempatlahir" value="{{ old('tempatlahir') }}">
                    @error('tempatlahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control @error('tanggallahir')
                        is-invalid
                    @enderror" id="tanggallahir" name="tanggallahir" value="{{ old('tanggallahir') }}">
                    @error('tanggallahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="agama" id="agama">
                        <option selected>-</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="pendidikan" id="pendidikan">
                        <option selected>-</option>
                        <option value="Tidak / Belum Sekolah">Tidak / Belum Sekolah</option>
                        <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                        <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                        <option value="SLTP / Sederajat">SLTP / Sederajat</option>
                        <option value="SLTA / Sederajat">SLTA / Sederajat</option>
                        <option value="Diploma I / II">Diploma I / II</option>
                        <option value="Akademi / Diploma II / S.Muda">Akademi / Diploma II / S.Muda</option>
                        <option value="Diploma IV / Strata I">Diploma IV / Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="pekerjaan" id="pekerjaan">
                        <option selected>-</option>
                        <option value="Belum / Tidak">Belum / Tidak</option>
                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                        <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Pegawai Negri Sipil ">Pegawai Negri Sipil</option>
                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
                        <option value="Kepolisian RI">Kepolisian RI</option>
                        <option value="Perdagangan">Perdagangan</option>
                        <option value="Petani / Pekebun">Petani / Pekebun</option>
                        <option value="Peternak">Peternak</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Industri">Industri</option>
                        <option value="Kontruksi">Kontruksi</option>
                        <option value="Transportasi">Transportasi</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Karyawan BUMN">Karyawan BUMN</option>
                        <option value="Karyawan BUMD">Karyawan BUMD</option>
                        <option value="Karyawan Honorer">Karyawan Honorer</option>
                        <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                        <option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
                        <option value="Tukang Cukur">Tukang Cukur</option>
                        <option value="Tukang Listrik">Tukang Listrik</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="pernikahan" id="pernikahan">
                        <option selected>-</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status Hubungan Dalam Keluarga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('status')
                        is-invalid
                    @enderror" id="status" name="status" value="Kepala Keluarga" readonly>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                    <select class="form-select mb-3" aria-label="Default select example" name="kewarganegaraan" id="kewarganegaraan">
                        <option selected>-</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('namaayah')
                        is-invalid
                    @enderror" id="namaayah" name="namaayah" value="{{ old('namaayah') }}">
                    @error('namaayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('namaibu')
                        is-invalid
                    @enderror" id="namaibu" name="namaibu" value="{{ old('namaibu') }}">
                    @error('namaibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/penduduk" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection