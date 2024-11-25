<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <h1>admin</h1>

    <x-sidebar>
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item active">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Interface</li>
        <li class="sidebar-item">
            <a href="{{ route('admin.tugas') }}" class="sidebar-link">
                <i class="bi bi-file-earmark-medical-fill"></i>
                <span>Tugas</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('admin.diskusi') }}" class="sidebar-link">
                <i class="bi bi-chat-dots-fill"></i>
                <span>Diskusi</span>
            </a>
        </li>
        <li class="sidebar-item has-sub">
            <a href="daftarkelas" class="sidebar-link">
                <i class="bi bi-person-badge-fill"></i>
                <span>Daftar Kelas</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item"><a href="/admin/XII_PPLG1">XII PPLG 1</a></li>
                <li class="submenu-item"><a href="/admin/XII_PPLG2">XII PPLG 2</a></li>
                <li class="submenu-item"><a href="/admin/XII_DKV1">XII DKV 1</a></li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('logout') }}" class="sidebar-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </x-sidebar>


    <!-- Content Section -->
    <div class="container mt-4">
        <x-account :username="Auth::user()->username" />


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

    <!-- Scripts -->
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>