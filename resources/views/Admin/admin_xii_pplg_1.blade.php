@extends('app.main')

@section('page-heading', 'XII PPLG 1')

@section('contents')
<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <button class="btn btn-custom-green">
        <a href="{{ route('siswas.create') }}" class="btn btn-custom-green">
            <i class="fas fa-plus"></i> Tambah Siswa
        </a>
        </button>
    </div>
</div>

<div class="container-fluid mt-30">
    <h4 class="text-center mb-4">Data Siswa Kelas XII PPLG 1</h4>
    <div class="table-responsive">
        @if ($siswas->isEmpty())
            <p class="text-center">Data siswa tidak tersedia.</p>
        @else
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-blue">
                    <tr>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>L/P</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ $siswa->tempat_lahir }}</td>
                            <td>{{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>
                                <a href="{{ route('siswas.updateView', $siswa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
