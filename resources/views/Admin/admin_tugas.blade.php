<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Siswa - ELearning Tugas Siswa</title>
    <!-- Include all necessary CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="shortcut icon" href="{{ asset ('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>

<body>
    </style>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #CDE8E6;">
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


    <div id="app">
        <!-- Sidebar -->
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo d-flex">
                            <i class='fas fa-book-open' style="font-size: 25px; margin-top: -2px"></i>
                            <h3 style="margin-top: -5px; margin-left: 20px;">E-LEARNING</h3>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="dashboard#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Interface</li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Tugas</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Diskusi</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Daftar Siswa</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="">XII PPLG 1</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#">XII PPLG 2</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="">XII DKV 1</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div id="main">

             <div class="page-heading">
                 <h4>HALO, CALON ANAK SUKSES</h4>
                </div> 
         </div>

        <div id="main">
            <div class="container mt-5 d-flex">
                <div class="row">
                    <!-- Pemrograman Web Card -->
                    <div class="col-lg-3 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pemrograman Web</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                Tugas 1
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                Tugas Pemrograman web adalah membuat portofolio website yang berfungsi dengan baik.
                                                <!-- File Upload Form -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="formFile1" class="form-label">Upload file di sini</label>
                                                        <input class="form-control" type="file" id="formFile1">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                                <!-- End File Upload Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Basis Data Card -->
                    <div class="col-lg-3 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Basis Data</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                Tugas 2
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                Tugas Basis Data adalah menulis tentang pengertian field dan record.
                                                <!-- File Upload Form -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="formFile2" class="form-label">Upload file di sini</label>
                                                        <input class="form-control" type="file" id="formFile2">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                                <!-- End File Upload Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pendidikan Kewarganegaraan Card -->
                    <div class="col-lg-3 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Pendidikan Kewarganegaraan</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample3">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne3">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                                Tugas 3
                                            </button>
                                        </h2>
                                        <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-bs-parent="#accordionExample3">
                                            <div class="accordion-body">
                                                Tugas PKN adalah mencari sejarah tentang presiden Ir. Soekarno.
                                                <!-- File Upload Form -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="formFile3" class="form-label">Upload file di sini</label>
                                                        <input class="form-control" type="file" id="formFile3">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                                <!-- End File Upload Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bahasa Indonesia Card -->
                    <div class="col-lg-3 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Bahasa Indonesia</h5>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample4">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne4">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                                Tugas 4
                                            </button>
                                        </h2>
                                        <div id="collapseOne4" class="accordion-collapse collapse show" aria-labelledby="headingOne4" data-bs-parent="#accordionExample4">
                                            <div class="accordion-body">
                                                Tugas Bahasa Indonesia adalah mencari tahu tentang cerpen dan puisi.
                                                <!-- File Upload Form -->
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="formFile4" class="form-label">Upload file di sini</label>
                                                        <input class="form-control" type="file" id="formFile4">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                                <!-- End File Upload Form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Accordions for Subjects -->
                </div>
            </div>

            <div>
                <!-- Table Section -->
                <table class="table-custom">
                    <style>
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }

                        th,
                        td {
                            border: 1px solid black;
                            text-align: center;
                            padding: 8px;
                        }

                        th {
                            background-color: #B3CECC;
                        }

                        .checkmark {
                            font-size: 18px;
                            color: #B3CECC;
                            background-color: #B3CECC;
                            padding: 3px;
                            border-radius: 3px;
                        }
                    </style>

                    <div class="container mt-5">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>PKN</th>
                                    <th>PW</th>
                                    <th>PPB</th>
                                    <th>PKK</th>
                                    <th>BASDAT</th>
                                    <th>PPLG</th>
                                    <th>IPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chatrine Rinata Putri</td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Novia Nurul Zulian</td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rafi Adlu Hakim</td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Maulana Malik Ibrahim</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Zayne</td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sylus</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Xavier</td>
                                    <td><span class="checkmark">&#10004;</span></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>