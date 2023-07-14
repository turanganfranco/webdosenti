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
            <label for="kategori" class="form-label">Kategori Pendidikan</label>
            <select class="form-select" aria-label="Default select example" name="kategori" reqired>
                <option selected>Kategori Pendidikan</option>
                <option @if ($pendidikan->kategori =='Pendidikan Formal')
                    selected
                @endif value="Pendidikan Formal">Pendidikan formal dan memperoleh gelar/sebutan/ijazah</option>
                <option @if ($pendidikan->kategori =='Pelatihan/Diklat')
                    selected
                @endif value="Pelatihan/Diklat">Pelatihan funsional dosen atau diklat prajabatan golongan</option>
            </select>
            @error('kategori')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Perguruan Tinggi/Diklat</label>
            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" required value="{{ old('pendidikan', $pendidikan->pendidikan) }}">
            @error('pendidikan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gelar" class="form-label">Gelar</label>
            <input type="text" class="form-control @error('gelar') is-invalid @enderror" id="gelar" name="gelar" value="{{ old('gelar', $pendidikan->gelar) }}">
            @error('gelar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun', $pendidikan->tahun) }}">
            @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenjang" class="form-label">Jenjang</label>
            <input type="text" class="form-control @error('jenjang') is-invalid @enderror" id="jenjang" name="jenjang" value="{{ old('jenjang', $pendidikan->jenjang) }}">
            @error('jenjang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="berkas" class="form-label">Berkas</label>
            <input type="file" class="form-control @error('berkas') is-invalid @enderror" id="berkas" name="berkas">
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