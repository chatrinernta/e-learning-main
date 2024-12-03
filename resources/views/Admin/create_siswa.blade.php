@extends('app.main')

@section('page-heading', 'Tambah Siswa')

@section('contents')
<div class="container mt-3">
    <h4 class="text-center">Form Tambah Siswa</h4>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('siswas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="nis" value="{{ old('nis') }}">
    </div>
    <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" name="nisn" class="form-control" id="nisn" value="{{ old('nisn') }}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ old('tempat_lahir') }}">
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas</label>
        <input type="text" name="kelas" class="form-control" id="kelas" value="XII PPLG 1" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
@endsection
