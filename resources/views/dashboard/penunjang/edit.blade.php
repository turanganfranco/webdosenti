@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Penunjang</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="{{ route('penunjang.update', $penunjang->id) }}" class="mb-5" enctype="multipart/form-data">
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
            <label for="perihal" class="form-label">Perihal</label>
            <input type="text" class="form-control @error('perihal') is-invalid @enderror" id="perihal" name="perihal" required value="{{ old('perihal', $penunjang->perihal) }}">
            @error('perihal')
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