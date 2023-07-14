@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penelitian {{ $penelitian->id_dosen }}</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id_dosen" class="form-label">Nama</label>
            <input disabled type="text" class="form-control " id="id_dosen" name="id_dosen" required value="{{ old('id_dosen', $penelitian->id_dosen) }}">
            
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input disabled type="text" class="form-control " id="judul" name="judul" required value="{{ old('judul', $penelitian->judul) }}">
            
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input disabled type="number" class="form-control " id="tahun" name="tahun" required value="{{ old('tahun', $penelitian->tahun) }}">
            
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Berkas :</label>
            
        </div>
    </form>
</div>

    
@endsection