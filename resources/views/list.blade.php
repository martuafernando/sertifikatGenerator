@extends('layout/main')

@section('title', 'Daftar User')

@section('container')
    <div class="container">
        <h1 class="mt-3">Daftar User</h1>
        <a href="/input">
            <button type="button" class="btn btn-dark"">Tambah Data</button>
        </a>

        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Acara</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->acara }}</td>
                <td>{{ $user->tanggal }}</td>
                <td>
                    <form action="post" action="/delete"></form>
                    <a href="/delete?id={{$user->id}}" class="badge bg-danger">Hapus</a>
                </td>
              </tr>
                @endforeach  
            </tbody>
          </table>
    </div>
@endsection