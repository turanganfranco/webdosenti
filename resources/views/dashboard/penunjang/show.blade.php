@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Penunjang</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="perihal" class="form-label">Perihal</label>
            <input disabled type="text" class="form-control " id="perihal" name="perihal" required value="{{ old('perihal', $penunjang->perihal) }}">
            
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Berkas :</label>
            
        </div>
    </form>
</div>

    
@endsection