@extends('app.main')

@section('page-heading', 'Dashboard Admin')

@section('contents')
    <!-- Content Section -->
    <div class="container mt-4">
        <h3>Selamat Datang {{ $role }}</h3>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @else
            <div class="alert alert-info">Silakan isi form untuk menambahkan user baru.</div>
        @endif

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="role">Role:</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="murid">Murid</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah User</button>
        </form>
    </div>
@endsection
