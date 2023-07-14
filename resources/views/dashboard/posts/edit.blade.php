@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Dosen</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $post->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" required value="{{ old('gender', $post->gender) }}">
            @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="number" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required value="{{ old('nip', $post->nip) }}">
            @error('nip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $post->email) }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telp" class="form-label">No. Telp</label>
            <input type="number" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" required value="{{ old('telp', $post->telp) }}">
            @error('telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="expertise" class="form-label">Bidang Keahlian</label>
            <input type="text" class="form-control @error('expertise') is-invalid @enderror" id="expertise" name="expertise" required value="{{ old('expertise', $post->expertise) }}">
            @error('expertise')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="laststudy" class="form-label">Pendidikan Terakhir</label>
            <input type="text" class="form-control @error('laststudy') is-invalid @enderror" id="laststudy" name="laststudy" required value="{{ old('laststudy', $post->laststudy) }}">
            @error('laststudy')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label ">Image</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="teachinghistory" class="form-label">Riwayat Mengajar</label>
            <input type="text" class="form-control @error('teachinghistory') is-invalid @enderror" id="teachinghistory" name="teachinghistory" value="{{ old('teachinghistory', $post->teachinghistory) }}">
            @error('teachinghistory')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="research" class="form-label">Penelitian</label>
            <input type="text" class="form-control @error('research') is-invalid @enderror" id="research" name="research" value="{{ old('research', $post->research) }}">
            @error('research')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="communityservice" class="form-label">Pengabdian</label>
            <input type="text" class="form-control @error('communityservice') is-invalid @enderror" id="communityservice" name="communityservice" value="{{ old('communityservice', $post->communityservice) }}">
            @error('communityservice')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    
@endsection