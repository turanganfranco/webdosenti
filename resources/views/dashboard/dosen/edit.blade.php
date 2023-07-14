@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Dosen</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{ route('dosen.update', $dosen->id) }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $dosen->username) }}">
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $dosen->nama) }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required value="{{ old('nip', $dosen->nip) }}">
            @error('nip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat dan tanggal lahir</label>
            <input type="text" class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir', $dosen->tempat_tanggal_lahir) }}">
            @error('tempat_tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option @if ($dosen->jenis_kelamin =='Laki-laki')
                    selected
                @endif value="Laki-laki">Laki-laki</option>
                <option @if ($dosen->jenis_kelamin =='Perempuan')
                    selected
                @endif value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pendidikan_tertinggi" class="form-label">Pendidikan Tertinggi</label>
            <select class="form-select" aria-label="Default select example" name="pendidikan_tertinggi">
                <option selected>Pilih pendidikan tertinggi</option>
                <option @if ($dosen->pendidikan_tertinggi =='S2')
                    selected
                @endif value="S2">S2</option>
                <option @if ($dosen->pendidikan_tertinggi =='S3')
                    selected
                @endif value="S3">S3</option>
            </select>
            @error('pendidikan_tertinggi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pangkat" class="form-label">Pangkat</label>
            <input type="text" class="form-control @error('pangkat') is-invalid @enderror" id="pangkat" name="pangkat" value="{{ old('pangkat', $dosen->pangkat) }}">
            @error('pangkat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="golongan" class="form-label">Golongan</label>
            <input type="text" class="form-control @error('golongan') is-invalid @enderror" id="golongan" name="golongan" value="{{ old('golongan', $dosen->golongan) }}">
            @error('golongan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', $dosen->jabatan) }}">
            @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{ old('foto') }}">
            @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    
@endsection