@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')
<div class="container" align="center">
    <div class="card" style="width: 20rem; margin-top:10%;">
        <div class="my-3">
            <form method="POST" action="/store">
            @csrf
                <div class="mb-3 mx-3">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                </div>
                <div class="mb-3 mx-3">
                    <select class="form-select" aria-label="Default select example" name="acara" id="acara"">
                        <option selected hidden>Acara</option>
                        <option value="Berkarir Jadi Penulis, Susah Gak Sih?">Berkarir Jadi Penulis, Susah Gak Sih?</option>
                        <option value="Cyberbulling: Apa itu dan Bagaimana Menghentikannya?">Cyberbulling: Apa itu dan Bagaimana Menghentikannya?</option>
                        <option value="How to Stand Out and Get Hired as a Software Tester for Fresh Graduate">How to Stand Out and Get Hired as a Software Tester for Fresh Graduate</option>
                    </select>
                </div>
                <div class="mb-3 mx-3">
                    <input class="form-control" id="tanggal" type="date" name="tanggal" placeholder="Tanggal">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>
</div>


@endsection

