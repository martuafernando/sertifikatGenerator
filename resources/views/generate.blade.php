@extends('layout/main')

@section('title', 'Generate Sertifikat')

@section('container')
<div class="container" align="center">
    <div class="card" style="width: 20rem; margin-top:10%;">
        <div class="my-3">
            <form method="POST" action="/generate" enctype="multipart/form-data">
            @csrf
                <div class="mb-3 mx-3">
                    <select class="form-select" aria-label="Default select example" name="acara" id="acara"">
                        <option selected hidden>Acara</option>
                        <option value="Berkarir Jadi Penulis, Susah Gak Sih?">Berkarir Jadi Penulis, Susah Gak Sih?</option>
                        <option value="Cyberbulling: Apa itu dan Bagaimana Menghentikannya?">Cyberbulling: Apa itu dan Bagaimana Menghentikannya?</option>
                        <option value="How to Stand Out and Get Hired as a Software Tester for Fresh Graduate">How to Stand Out and Get Hired as a Software Tester for Fresh Graduate</option>
                    </select>
                </div>
                <div class="mb-3 mx-3">
                    <label for="sertif" class="form-label">Sertifikat</label>
                    <input class="form-control" type="file" id="sertif" name="sertif">
                  </div>
                <button type="submit" name="generate" class="btn btn-primary">Generate</button>
            </form>
        </div>
    </div>
</div>
@endsection