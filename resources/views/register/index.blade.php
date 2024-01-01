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
            
<!-- Button  -->
            <div class="d-flex flex-row my-3 px-2">
            <button class="w-40 px-2 m-auto btn btn-outline-primary rounded-3" type="submit">
            Mendaftar Dengan Google
          </button>

          <button class="w-40 px-2 m-auto btn btn-outline-primary rounded-3" type="submit">
            Mendaftar Dengan Facebook
          </button>
          </div>
  	        <div>
               <h5 class="h5 mb-3 fw-normal text-center">--------------- atau mendaftar dengan ---------------</h5>
            </div>

<!-- Form Register -->
            <form action="/register" method="post">
              @csrf


            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
              <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
               </div>

              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid  @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                 <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" >
                <label for="email">Alamat Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                 <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">sudah punya akun? <a class="" href="/login">Masuk</a> </small>
          </main>

    </div>
</div>

@endsection