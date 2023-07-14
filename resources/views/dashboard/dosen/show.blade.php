@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Dosen</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" enctype="multipart/form-data">
        <div class="">
            <label for="foto" class="form-label">Foto :</label>
        </div>
        @if ($dosen->foto)
            <div overflow:hidden;>
                <img src="{{ asset('gambar/' . $dosen->foto) }}" width="300px" alt="{{ $dosen->id_dosen }}" class="img-fluid">
                {{-- <img src="{{ asset('storage/' . $dosen->foto) }}" class="img-thumbnail" alt="{{ $dosen->username }}"> --}}
            </div>
        @else
            <div overflow:hidden;>
                <img src="img/avatarwomen.png" alt="{{ $dosen->id_dosen }}" class="img-fluid">
            </div>
        @endif

        <div class="mt-3 mb-3">
            <label for="username" class="form-label">Username</label>
            <input disabled type="text" class="form-control " id="username" name="username" required value="{{ old('username', $dosen->username) }}">
            
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input disabled type="text" class="form-control " id="nama" name="nama" required value="{{ old('nama', $dosen->nama) }}">
            
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input disabled type="number" class="form-control " id="nip" name="nip" required value="{{ old('nip', $dosen->nip) }}">
            
        </div>
        <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat dan tanggal lahir</label>
            <input disabled type="text" class="form-control " id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir', $dosen->tempat_tanggal_lahir) }}">
            
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input disabled type="text" class="form-control " id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $dosen->jenis_kelamin) }}">
            
        </div>
        <div class="mb-3">
            <label for="pendidikan_tertinggi" class="form-label">Pendidikan Tertinggi</label>
            <input disabled type="text" class="form-control" id="pendidikan_tertinggi" name="pendidikan_tertinggi" value="{{ old('pendidikan_tertinggi', $dosen->pendidikan_tertinggi) }}">
            
        </div>
        <div class="mb-3">
            <label for="pangkat" class="form-label">Pangkat</label>
            <input disabled type="text" class="form-control" id="pangkat" name="pangkat" value="{{ old('pangkat', $dosen->pangkat) }}">
            
        </div>
        <div class="mb-3">
            <label for="golongan" class="form-label">Golongan</label>
            <input disabled type="text" class="form-control" id="golongan" name="golongan" value="{{ old('golongan', $dosen->golongan) }}">
            
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input disabled type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan', $dosen->jabatan) }}">
            
        </div>

    </form>
</div>


@endsection