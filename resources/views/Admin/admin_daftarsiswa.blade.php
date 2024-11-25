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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <style>
        /* Custom Navbar Background Color */
        .navbar-custom {
            background-color: #CDE8E6;
        }
    </style>
    </head>

    <body>

        <!-- Side bar -->
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


        <!-- Side bar penutup -->


        <div id="main">

            <div class="container mt-5 d-flex">

                <div class="container mt-5">
                    <div class="row">
                        <!-- Multiple Accordion Cards -->
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
                                                    Tugas Pemrograman web adalah membuat portofolio website dan berfungsi dengan baik.

                                                    <!-- File Upload Form -->
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="formFile1" class="form-label">Jika sudah upload filenya disini</label>
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
                                                            <label for="formFile2" class="form-label">Jika sudah upload filenya disini</label>
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
                                                    Tugas PKN adalah mencari sejarah tentang presiden ir.soekarno.
                                                    <!-- File Upload Form -->
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="formFile3" class="form-label">Jika sudah upload filenya disini</label>
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
                                                            <label for="formFile4" class="form-label">Jika sudah upload filenya disini</label>
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
                    </div>


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
                                color: black;
                                background-color: black;
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


                        <script src="{{ asset ('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
                        <script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
                        <script src="{{ asset ('assets/vendors/apexcharts/apexcharts.js') }}"></script>
                        <script src="{{ asset ('assets/js/pages/dashboard.js') }}"></script>
                        <script src="{{ asset ('assets/js/main.js') }}"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



    </body>

</html>

<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card with Accordion and File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="card.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<body>



</body>

</html> -->