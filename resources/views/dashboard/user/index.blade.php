@extends('layouts.main2')
@section('konten')
<main class="col-md-9 ms-sm-auto col-lg px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data User</h1>
        </div>
        @if (session()->has('sukses'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        <div class="table-responsive col-lg">
            <a href="/user/create" class="btn btn-primary mb-3">Tambah User</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->password }}</td>
                            <td><a href="/user/{{ $s->id }}" class="badge bg-info"><img src="img/eye.svg" alt="eye"></a>
                                <a href="/user/{{ $s->id }}/edit" class="badge bg-warning"><img src="img/edit.svg" alt="eye"></a>
                                <form action="/user/{{ $s->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('Apakah ingin menghapus Data?')">
                                        <img src="img/delete.svg" alt="eye">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
