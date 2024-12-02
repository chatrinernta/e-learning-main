@extends('app.main')

@section('page-heading', '')

@section('contents')
    <!-- Content Section -->
    <div class="container mt-4">
        <h3>Selamat Datang {{ $role }}</h3>
        <br>
        <div class="container-fluid mt-30">
        <h4 class="text-center mb-4">Data Siswa XII PPLG 1</h4>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Rafi Adlu Hakim Arrasyid</td>
                        <td>Laki-laki</td>
                        <td>Bandung</td>
                        <td>12 Juli 2007</td>
                        <td>XII PPLG 1</td>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Maulana Malik Ibrahim</td>
                        <td>Laki-laki</td>
                        <td>Landean girang</td>
                        <td>27 Februari 2006</td>
                        <td>XII PPLG 1</td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1234</td>
                        <td>002585658</td>
                        <td>Novia Nurul Zulian</td>
                        <td>Perempuan</td>
                        <td>Korea Selatan</td>
                        <td>27 Juli</td>
                        <td>XII PPLG 1</td>
                        </td>
                    </tr>
                  
        @endsection