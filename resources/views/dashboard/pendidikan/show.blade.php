@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pendidikan</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{ route('pendidikan.update', $pendidikan->id) }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="id_dosen" class="form-label">Dosen</label>
            <input disabled type="text" class="form-control" id="id_dosen" name="id_dosen" required value="{{ old('id_dosen', $pendidikan->id_dosen) }}">

        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori Pendidikan</label>
            <input disabled type="text" class="form-control" id="kategori" name="kategori" required value="{{ old('kategori', $pendidikan->kategori) }}">

        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Perguruan Tinggi/Diklat</label>
            <input disabled type="text" class="form-control" id="pendidikan" name="pendidikan" required value="{{ old('pendidikan', $pendidikan->pendidikan) }}">
        </div>
        <div class="mb-3">
            <label for="gelar" class="form-label">Gelar</label>
            <input disabled type="text" class="form-control" id="gelar" name="gelar" value="{{ old('gelar', $pendidikan->gelar) }}">
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input disabled type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $pendidikan->tahun) }}">
        </div>
        <div class="mb-3">
            <label for="jenjang" class="form-label">Jenjang</label>
            <input disabled type="text" class="form-control" id="jenjang" name="jenjang" value="{{ old('jenjang', $pendidikan->jenjang) }}">
        </div>
        <div class="mb-3">
            <label for="berkas" class="form-label">Berkas :</label>
            <a href="{{ asset('pendidikan/' . $pendidikan->berkas) }}" download>{{ $pendidikan->berkas }}</a>
        </div>
    </form>
</div>

    
@endsection