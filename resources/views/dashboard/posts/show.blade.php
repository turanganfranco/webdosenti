@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all Dosen</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <span data-feather="x-circle"></span> Delete
                </button>
            </form>
            
            <main>
                <div class="row g-2">
                    <div class="col-md-6">
                        <ul class="list-unstyled ps-0">
                        @if ($post->image)
                        <div overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" width="300px" alt="{{ $post->name }}" class="img-fluid mt-3">
                        </div>
                        @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->expertise }}" alt="{{ $post->name }}" class="img-fluid mt-3">
                        {{-- <img src="img/avatarwomen.png" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                        @endif
                        
                        </ul>
                    </div>
            
                    <div class="col-md-6">
                        <h2 class="text-body-emphasis"></h2>
                        <ul><p></p></ul>
                        <table class="table table-sm">
                            <tbody class="">
                                <tr height="40px">
                                    <th width="200px" scope="row">Nama Dosen</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->name }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">Jenis Kelamin</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->gender }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">NIP</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->nip }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">Email</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->email }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">No. Telp</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->telp }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">Bidang Keahlian</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->expertise }}</td>
                                </tr>
                                <tr height="40px">
                                    <th width="200px" scope="row">Pendidikan Terakhir</th>
                                    <td width="50px">:</td>
                                    <td width="600px">{{ $post->laststudy }}</td>
                                </tr>
                        </table>
                    </div>
                </div>
                
                <div class="mb-4">
                    <h6 class="fs-7 col-md-8">Riwayat Mengajar</h6>
                    <a href="{{ $post->teachinghistory }}">{{ $post->teachinghistory }}</a>
                </div>
                <div class="mb-4">
                    <h6 class="fs-7 col-md-8">Penelitian</h6>
                    <a href="{{ $post->research }}">{{ $post->research }}</a>
                </div>
                <div class="mb-4">
                    <h6 class="fs-7 col-md-8">Pengabdian</h6>
                    <a href="{{ $post->communityservice }}">{{ $post->communityservice }}</a>
                </div>
            </main>
        </div>
    </div>
</div>



@endsection