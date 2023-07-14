@extends('layouts.main')

@section('container')
    <h1 class="mb-4 text-center ">Bidang Keahlian :</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        {{-- <img src="https://source.unsplash.com/600x500/?{{ $category->name }}"  alt="{{ $category->name }}" class="img-fluid"> --}}
                        <img src="img/capture.png" alt="{{ $category->name }}" class="img-fluid">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color:rgba(0, 0, 0, 0.8)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
