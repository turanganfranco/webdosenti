@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Penelitian Baru</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{ route('penelitian.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_dosen" class="form-label">Dosen</label>
            <select class="form-select" aria-label="Default select example" name="id_dosen" reqired>
                <option disabled selected>Pilih Dosen</option>
                @foreach ($dosen as $item)
                     <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
               
            </select>
            @error('id_dosen')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">tahun</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" required value="{{ old('tahun') }}">
            @error('tahun')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="berkas" class="form-label">Berkas</label>
            <input type="file" class="form-control @error('berkas') is-invalid @enderror" id="berkas" name="berkas" value="{{ old('berkas') }}">
            @error('berkas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection