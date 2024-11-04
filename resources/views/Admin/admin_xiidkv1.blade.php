<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

    <title>Admin XII DKV 1</title>
</head>
<body>
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
                            <a href="diskusi" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Diskusi</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="daftarkelas" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Daftar Kelas</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/admin/XII_PPLG1">XII PPLG 1</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/admin/XII_PPLG2">XII PPLG 2</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/admin/XII_DKV1">XII DKV 1</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <!-- Side bar penutup -->
         
     <x-navbar></x-navbar>

     <div id="main">
     <div class="page-heading">
                <h3>HALO, ADMIN. </h3>
            </div>

            <style>
    .table-striped tbody tr:nth-of-type(odd) {
        background-color:  #f5f7f8; /* Warna untuk baris ganjil */
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: #ffffff; /* Warna untuk baris genap */
    }
            </style>
               <style>
        .btn-custom-green {
            background-color: #28a745;
            color: white;   
        }
        .btn-custom-red {
            background-color: #dc3545;
            color: white;
        }
        .btn-custom-green:hover, .btn-custom-red:hover {
            color: #31511e;
        }
        .btn-custom-green:focus, .btn-custom-red:focus {
            box-shadow: #31511e;
        }
    </style>

</head>
<body>
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <button class="btn btn-custom-green">
                <i class="fas fa-plus"></i> TAMBAH SISWA
            </button>
            <div>
                <button class="btn btn-custom-red me-2">
                    <i class="fas fa-times"></i> HAPUS SEMUA SISWA
                </button>
                <button class="btn btn-custom-green">
                    <i class="fas fa-check"></i> Print to PDF          
                 </button>
            </div>
        </div>
    </div>
</body>

            <div class="container-fluid mt-30">
        <h4 class="text-center mb-4">Data Siswa Kelas XII DKV 1</h4>
        <div class="table-responsive">
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
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Rafi </td>
                        <td>Laki-laki</td>
                        <td>Bandung</td>
                        <td>12 Juli 2007</td>
                        <td>XII PPLG 1</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Maulana</td>
                        <td>Laki-laki</td>
                        <td>Landean girang</td>
                        <td>27 Februari 2006</td>
                        <td>XII PPLG 1</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Chatrine Rinata Putri</td>
                        <td>Perempuan</td>
                        <td>Luxemburg</td>
                        <td>16 Januari 2007</td>
                        <td>XII PPLG 1</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Novia Nurul Zulian</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>A</td>
                        <td>Perempuan</td>
                        <td>Wonogiri</td>
                        <td>2008-12-27</td>
                        <td>KELAS IX A</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
     <!-- script -->
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
</body>
</html>