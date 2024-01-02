@extends('layout.main')

@section('container')
<div class="p-10" style="background-color: rgb(188, 188, 188)">
    <div class="d-flex justify-content-between">
        <div>
            <h1 style="font-size: 30px; font-weight: bold">ATHCARE</h1>
        </div>

        <div class="col-md-5 row" style="background-color: white; border-radius: 5px">
            <h3 class="m-auto mt-5 text-center h3 fw-normal">Selamat datang di ATHCARE</h3>
            <h5 class="m-auto text-center h5 fw-normal">Penanganan Cedera Atlit</h5>

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="m-auto form-signin w-100">
                <h1 class="mb-3 text-center h3 fw-normal">Silahkan Masuk</h1>

                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Alamat Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <br>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                </form>

                <small class="mt-3 text-center d-block">belum punya akun? <a class="" href="/register">Daftar</a> </small>
            </main>
            <!-- Button  -->
            <div class="flex-row px-3 mt-3 d-flex">
                <button class="w-40 px-1 m-auto btn btn-outline-primary rounded-3" type="submit">
                    Masuk Dengan Google
                </button>

                <button class="w-40 px-1 m-auto btn btn-outline-primary rounded-3" type="submit">
                    Masuk Dengan Facebook
                </button>
            </div>
        </div>
    </div>
</div>
@endsection