@extends('app.main')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Edit Data Siswa</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" 
                               value="{{ $siswa->nama }}" placeholder="Masukkan nama siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS:</label>
                        <input type="text" id="nis" name="nis" class="form-control" 
                               value="{{ $siswa->nis }}" placeholder="Masukkan NIS siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN:</label>
                        <input type="text" id="nisn" name="nisn" class="form-control" 
                               value="{{ $siswa->nisn }}" placeholder="Masukkan NISN siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" 
                               value="{{ $siswa->tanggal_lahir }}" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
    