@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> Pengabdian</h1>
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

<div class="table-responsive col-lg-8">
    <a href="{{ route('pengabdian.create') }}" class="btn btn-primary mb-4">Tambah Pengabdian Baru</a>
    <table class="table table-striped table-sm" id="myTable">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Dosen</th>
        <th scope="col">Perihal</th>
        <th scope="col">Berkas</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($pengabdian as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama_dosen }}</td>
            <td>{{ $data->perihal }}</td>
            <td><a href="{{ asset('file_pengabdian/' . $data->berkas) }}" download>{{ $data->berkas }}</a></td>
            <td>
                {{-- <a href="{{ route('pengabdian.show', $data->id) }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                <a href="{{ route('pengabdian.edit', $data->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ route('pengabdian.destroy', $data->id) }}" method="post" class="d-inline">
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