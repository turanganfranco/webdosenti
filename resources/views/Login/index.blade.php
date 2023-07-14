@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="mt-5"></div>
    <div class="col-lg-5 mt-5">

        
        <main class="form-signin">
            <div class="d-block text-center">
                <img class="mb-3 " src="img/ti.png" alt="" width="100" height="">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center"><b>Please Login</b></h1>
            <form action="/login" method="post">
            @csrf
                <div class="form-floating">
                    <input type="username" name="username" class="form-control @error('username') is-invalid" @enderror id="username" placeholder="..." autofocus required value="{{ old('username') }}">
                    <label for="text">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid" @enderror id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
        
                <button class="w-100 btn btn-lg btn-primary mb-4" type="submit">Login</button>
            </form>
            {{-- <small class="d-block text-center mt-2 mb-6">Not Registered? <a href="/register">Register Now!</a></small> --}}
        </main>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>    
</div>
@endsection