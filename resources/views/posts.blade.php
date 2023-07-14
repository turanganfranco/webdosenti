@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h1 class="text-center">Dosen - dosen Prodi Teknik Informatika</h1>
    </div>

    @if ($posts->count())
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color:rgba(0, 0, 0, 0.7)">
                        <i class="text-decoration-none text-white">{{ $post->expertise }}</i>
                    </div>
                    {{-- <img src="https://source.unsplash.com/1200x400/?{{ $post->expertise }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
                    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->expertise }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $post->name }}</h5>
                        <div class="text-muted text-center"> 
                            <h6>
                                {{ $post->nip }}
                            </h6><h6>
                                {{ $post->email }}
                            </h6><h6>
                                {{ $post->telp }}
                            </h6>
                        </div>
                        <div class="text-center mt-3">
                            <a href="/post/{{ $post->slug }}" class="btn btn-primary ">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Posst found.</p>
    @endif

    <div class="my-3">
        {{  $posts->links() }}
    </div>
    {{-- @foreach ($post->skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h2>
            <p>By. 
                <a href="/author/{{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a> in 
                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
            </p>
            <p>{{ $post->excerpt }}</p>
            
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                Read more...
            </a>
        </article>
    @endforeach --}}

@endsection