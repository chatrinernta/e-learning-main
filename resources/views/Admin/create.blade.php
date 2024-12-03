@extends('app.main')

@section('page-heading', 'Tambah Grup Kelas')

@section('contents')
<div class="container mt-5">
    <h4>Tambah Grup Kelas</h4>
    <form action="{{ route('grup_kelas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Url</label>
            <input type="url" name="link" class="form-control" id="link" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
