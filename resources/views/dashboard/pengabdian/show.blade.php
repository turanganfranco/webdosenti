@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengabdian {{ $pengabdian->id_dosen }}</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input disabled type="text" class="form-control " id="judul" name="judul" required value="{{ old('judul', $pengabdian->id_dosen) }}">
            
        </div>
        <div class="mb-3">
            <label for="perihal" class="form-label">Perihal</label>
            <input disabled type="text" class="form-control " id="perihal" name="perihal" required value="{{ old('perihal', $pengabdian->perihal) }}">
            
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Berkas :</label>
            
        </div>
    </form>
</div>

    
@endsection