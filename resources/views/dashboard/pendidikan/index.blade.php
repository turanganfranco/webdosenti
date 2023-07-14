@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Pendidikan</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('deleted'))
    <div class="alert alert-danger col-lg-8" role="alert">
        {{ session('deleted') }}
    </div>
@endif

<div class="table-responsive">
    <a href="{{ route('pendidikan.create') }}" class="btn btn-primary mb-4">Tambah Pendidikan Baru</a>
    <table class="table table-striped table-sm" id="myTable">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Dosen</th>
        <th scope="col">Perguruan Tinggi/Diklat</th>
        <th scope="col">Kategori Pendidikan</th>
        <th scope="col">Gelar</th>
        <th scope="col">Tahun</th>
        <th scope="col">Jenjang</th>
        <th scope="col">Berkas</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($pendidikan as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama_dosen }}</td>
            <td>{{ $data->pendidikan }}</td>
            <td>{{ $data->kategori }}</td>
            <td>{{ $data->gelar }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->jenjang }}</td>
            <td><a href="{{ asset('file_pendidikan/' . $data->berkas) }}" download>{{ $data->berkas }}</a></td>
            <td>
                <a href="{{ route('pendidikan.show', $data->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="{{ route('pendidikan.edit', $data->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ route('pendidikan.destroy', $data->id) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span>
                    </button>
                </form>
            </td>
        </tr>
        {{-- @empty
        <tr>
            <td colspan="4">data kosong</td>
        </tr> --}}
        @endforeach
    </tbody>
@endsection