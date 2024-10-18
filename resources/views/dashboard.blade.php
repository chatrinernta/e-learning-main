<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ELearning Dashboard</title>
    <link rel="" href="{{asset ('css/login.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendors/iconly/bold.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.svg" type="image/x-icon') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div id="app">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <!-- Logo or Brand -->
        <a class="navbar-brand" href="#">My Website</a>

        <!-- Toggler for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links, Search Bar, and Profile Dropdown -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <!-- Other navbar links -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tugas</a>
                </li>
            </ul>

            <!-- Search Bar -->
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            <!-- Profile Account Dropdown -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://c4.wallpaperflare.com/wallpaper/691/864/895/women-face-portrait-gray-eyes-wallpaper-preview.jpg" alt="Profile" class="rounded-circle" width="30" > <!-- Profile Picture -->
                        Chatrine Rinata Putri
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <!-- Side bar -->
        <div id="sidebar" class="active">
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
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-title">Interface</li>

                        <li class="sidebar-item  ">
                            <a href="tugas" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Tugas</span>
                            </a>
                        </li>


                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Diskusi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Daftar Siswa</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="">XII PPLG 1</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#">XII PPLG 2</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="">XII DKV 1</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <!-- Side bar penutup -->

        <div id="main">

            <div class="page-heading">
                <h3>HALO, CALON ANAK SUKSES</h3>
            </div>

            <div class="page-content">

                <section class="row">
                    <div class="col-12 col-lg-9">


                        <div class="d-flex" style="gap: 30px;">

                            <div class="row d-flex">
                                <div class="d-flex">
                                    <div class="card" style="width: 500px; height: 500px; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; margin-top:60px; margin-left: 50px;">
                                        <div class="card-header">
                                            <h4 class="text-center">ORGANIGRAM</h4>
                                            <p class="text-center">STRUKTUR ORGANISASI KELAS PPLG 1</p>
                                        </div>
                                        <div class="card-body" style="margin-top: 20px;">
                                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                                        class="active"></li>
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-bs-interval="4000">
                                                        <img src="assets/images/samples/1.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>RAFI</h5>
                                                            <p>KETUA KELAS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/2.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>UCOK</h5>
                                                            <p>WAKIL KETUA KELAS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/3.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>JAMAL</h5>
                                                            <p>BENDAHARA</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/4.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>ASEP</h5>
                                                            <p>SEKERTARIS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/53.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>UDINN</h5>
                                                            <p>KEBERSIHAN</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/5.jpg" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>MAUL</h5>
                                                            <p>PENGHIBUR KELAS</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                                    data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                                    data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-left: 100px;">
                                <div class="card" style="width: 420px; height: 300px; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                                    <div class="card-header">
                                        <h5 class="card-title">Jadwal Piket</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                                    role="tab" aria-controls="home" aria-selected="true">Senin</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                                    role="tab" aria-controls="profile" aria-selected="false">Selasa</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact"
                                                    role="tab" aria-controls="contact" aria-selected="false">Rabu</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="kamis-tab" data-bs-toggle="tab" href="#kamis"
                                                    role="tab" aria-controls="kamis" aria-selected="false">Kamis</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="jumat-tab" data-bs-toggle="tab" href="#jumat"
                                                    role="tab" aria-controls="jumat" aria-selected="false">Jumat</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent" style=" margin-top: 30px;">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                aria-labelledby="home-tab">
                                                <p class='my-2'>
                                                <ol>
                                                    <li> MELA</li>
                                                    <li> CHATRINE</li>
                                                    <li> Novia</li>
                                                    <li> Rafi</li>
                                                    <li> Maulana</li>
                                                </ol>
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <ol>
                                                    <li> UDIN</li>
                                                    <li> AMEL</li>
                                                    <li> JOHAN</li>
                                                    <li> ULE</li>
                                                    <li> JIHAN</li>

                                                </ol>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel"
                                                aria-labelledby="contact-tab">
                                                <ol>
                                                    <li> UCUP</li>
                                                    <li> JOEL</li>
                                                    <li> ASEP</li>
                                                    <li> PIAN</li>
                                                    <li> MORA</li>

                                                </ol>
                                            </div>
                                            <div class="tab-pane fade" id="kamis" role="tabpanel"
                                                aria-labelledby="kamis-tab">
                                                <ol>
                                                    <li> AULIYA</li>
                                                    <li> RINE</li>
                                                    <li> via</li>
                                                    <li> afi</li>
                                                    <li> Maul</li>

                                                </ol>
                                            </div>
                                            <div class="tab-pane fade" id="jumat" role="tabpanel"
                                                aria-labelledby="jumat-tab">
                                                <ol>
                                                    <li> ANNISA </li>
                                                    <li> CHATRINE</li>
                                                    <li> Novia</li>
                                                    <li> Rafi</li>
                                                    <li> Maulana</li>

                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content">

                                    <div class="row d-flex">
                                        <div class="d-flex" style="gap: 30px;">
                                            <div class="card" style="width: 420px; height: 300px; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                                                <div class="card-header">
                                                    <h5 class="card-title">Jadwal Pelajaran</h5>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" id="senin-tab" data-bs-toggle="tab" href="#senin" role="tab"
                                                                aria-controls="senin" aria-selected="true">Senin</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="selasa-tab" data-bs-toggle="tab" href="#selasa" role="tab"
                                                                aria-controls="selasa" aria-selected="false">Selasa</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="rabu-tab" data-bs-toggle="tab" href="#rabu" role="tab"
                                                                aria-controls="rabu" aria-selected="true">Rabu</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="rafi-tab" data-bs-toggle="tab" href="#rafi" role="tab"
                                                                aria-controls="rafi" aria-selected="false">Kamis</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="novia-tab" data-bs-toggle="tab" href="#novia" role="tab"
                                                                aria-controls="novia" aria-selected="true">Jumat</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent" style="margin-top: 30px;">
                                                        <div class="tab-pane fade show active" id="senin" role="tabpanel" aria-labelledby="senin-tab">
                                                            <ol>
                                                                <li>memahami perasan</li>
                                                                <li>sunda</li>
                                                                <li>jawa</li>
                                                                <li>menghargai orang lain</li>
                                                                <li>gorontalo</li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane fade" id="selasa" role="tabpanel" aria-labelledby="selasa-tab">
                                                            <ol>
                                                                <li>Matematika</li>
                                                                <li>IPA</li>
                                                                <li>IPS</li>
                                                                <li>pkn</li>
                                                                <li>Indonesia</li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane fade" id="rabu" role="tabpanel" aria-labelledby="rabu-tab">
                                                            <ol>
                                                                <li>Pemograman Web</li>
                                                                <li>basis data</li>
                                                                <li>jujur</li>
                                                                <li>amanah</li>
                                                                <li>renang</li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane fade" id="rafi" role="tabpanel" aria-labelledby="rafi-tab">
                                                            <ol>
                                                                <li>binsik</li>
                                                                <li>push up</li>
                                                                <li>pull up</li>
                                                                <li>psikotes</li>
                                                                <li>lari</li>
                                                            </ol>
                                                        </div>
                                                        <div class="tab-pane fade" id="novia" role="tabpanel" aria-labelledby="novia-tab">
                                                            <ol>
                                                                <li>london</li>
                                                                <li>indonesia</li>
                                                                <li>korea</li>
                                                                <li>jepang</li>
                                                                <li>thailand</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                </section>
            </div>





            <footer>

            </footer>
        </div>
    </div>
    <script src="{{ asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset ('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset ('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset ('assets/js/main.js') }}"></script>
</body>

</html>


<!-- -----Asset_component -->


<!-- <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header> -->


<!-- <div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-3 py-4-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-icon purple">
                            <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Chatrine</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Followers</h6>
                            <h6 class="font-extrabold mb-0">183.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Following</h6>
                            <h6 class="font-extrabold mb-0">80.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Saved Post</h6>
                            <h6 class="font-extrabold mb-0">112</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> -->


<!-- <div class="card">
    <div class="card-header">
    <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                    xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                </svg>
                                            <h5 class="mb-0 ms-3">America</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                            style="width:10px">
                                                <use
                                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
</div> -->


<!-- <div class="row">
                                        <div class="col-12 col-xl-4">
                                            </div>
                                            <div class="col-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4>Latest Comments</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-lg">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Comment</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="col-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-md">
                                                                                    <img src="assets/images/faces/5.jpg">
                                                                                </div>
                                                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-auto">
                                                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="avatar avatar-md">
                                                                                    <img src="assets/images/faces/2.jpg">
                                                                                </div>
                                                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-auto">
                                                                            <p class=" mb-0">Wow amazing design! Can you make another
                                                                                tutorial for
                                                                                this design?</p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</div> -->


<!-- <div class="col-12 col-lg-3">
                                                            <div class="card">
                                                                <div class="card-body py-4 px-5">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar avatar-xl">
                                                                            <img src="assets/images/faces/1.jpg" alt="Face 1">
                                                                        </div>
                                                                        <div class="ms-3 name">
                                                                            <h5 class="font-bold">Chatrine Rinata</h5>
                                                                            <h6 class="text-muted mb-0">@chatrine</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4>Recent Messages</h4>
                                                                </div>
                                                                <div class="card-content pb-4">
                                                                    <div class="recent-message d-flex px-4 py-3">
                                                                        <div class="avatar avatar-lg">
                                                                            <img src="assets/images/faces/4.jpg">
                                                                        </div>
                                                                        <div class="name ms-4">
                                                                            <h5 class="mb-1">Hank Schrader</h5>
                                                                            <h6 class="text-muted mb-0">@johnducky</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="recent-message d-flex px-4 py-3">
                                                                        <div class="avatar avatar-lg">
                                                                            <img src="assets/images/faces/5.jpg">
                                                                        </div>
                                                                        <div class="name ms-4">
                                                                            <h5 class="mb-1">Dean Winchester</h5>
                                                                            <h6 class="text-muted mb-0">@imdean</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="recent-message d-flex px-4 py-3">
                                                                        <div class="avatar avatar-lg">
                                                                            <img src="assets/images/faces/1.jpg">
                                                                        </div>
                                                                        <div class="name ms-4">
                                                                            <h5 class="mb-1">John Dodol</h5>
                                                                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="px-4">
                                                                        <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                                                                            Conversation</button>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4>Visitors Profile</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div id="chart-visitors-profile"></div>
                                                                </div>
                                                            </div>
</div> -->