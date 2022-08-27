@extends('layouts.main2')
@section('konten')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edith Data User</h1>
    </div>

    <div class="container col-lg-8">
        <form method="post" action="/user/{{ $user->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" value="{{ $user->name }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ $user->email }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{$user->password }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Update Data</button>
          </div>
        </div>
        </form>

    </div>
@endsection
