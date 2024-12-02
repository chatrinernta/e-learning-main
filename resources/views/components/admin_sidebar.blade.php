<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
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




<!-- Side bar -->
<style>
    .sidebar-item.has-sub .dropdown-menu {
        display: none;
        position: absolute;
        left: 100%; /* atau atur sesuai kebutuhan */
        top: 0;
        background-color: #ffffff; /* Atur warna background sesuai kebutuhan */
        border: 1px solid #ddd;
        padding: 10px;
        min-width: 200px;
        z-index: 1000;
    }

    .sidebar-item.has-sub:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu .submenu-item {
        padding: 5px 0;
    }

    .dropdown-menu .submenu-item a {
        color: #333; /* Warna teks */
        text-decoration: none;
    }

    .dropdown-menu .submenu-item a:hover {
        color: #007bff; /* Warna teks saat di-hover */
    }
</style>


<div id="sidebar" class="active">
@yield('content')
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo d-flex">
                            <i class='fas fa-book-open' style="font-size: 25px; margin-top: -2px;"></i>
                            <h3 style="margin-top: -5px; margin-left: 20px;">E-LEARNING</h3>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                        <a href="{{ route('admin_dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-title">Interface</li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('tugas_admin')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Tugas</span>
                            </a>
                        </li>


                        <li class="sidebar-item  ">
                            <a href="{{ route('diskusi_admin') }}" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Diskusi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Daftar Kelas</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ route('admin_XIIPPLG1') }}">XII PPLG 1</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.XII_PPLG2') }}">XII PPLG 2</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.XII_DKV1') }}">XII DKV 1</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <!-- Side bar penutup -->

        

    <!-- Scripts -->
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>


