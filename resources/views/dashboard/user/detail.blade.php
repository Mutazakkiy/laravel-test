@extends('layouts.main2')
@section('konten')
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $user->name }}</h2>
                <a href="/user" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/user/{{ $user->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Ubah</a>
                <form action="/user/{{ $user->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus Data?')">
                        <span data-feather="x-circle"></span> Hapus
                    </button>
                </form>
                <div class="mt-3">
                    <form>
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
                                <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ $user->password }}" placeholder="Password">
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
                     </form>
                </div>
            </div>
        </div>
@endsection
