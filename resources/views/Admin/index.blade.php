@extends('app.main')

@section('page-heading', 'Xii DKV 1')

@section('contents')
@if (Auth::user()->role == 'admin')
<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <a href="{{ route('grup_kelas.create') }}" class="btn btn-md btn-custom-green">
            <p class="mt-3">TAMBAH GRUP KELAS</p>
            <i class="bi bi-plus fs-3" style="margin-top: 13px; margin-left: 4px;"></i>
        </a>
    </div>
</div>
@endif

<div class="container-fluid mt-4">
    <h4 class="text-center mb-4">Data Siswa Kelas XII DKV 1</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Url</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->link }}</td>
                    <td>
                        <a href="{{ route('grup_kelas.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('grup_kelas.destroy', $item->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

