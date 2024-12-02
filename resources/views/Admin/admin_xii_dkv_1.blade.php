@extends('app.main')

@section('page-heading', 'Xii DKV 1')

@section('contents')

    @if (Auth::user()->role == 'admin')
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <button class="btn btn-custom-green">
                <i class="fas fa-plus"></i> TAMBAH SISWA
            </button>
        </div>
    </div>
    @endif

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
@endsection
