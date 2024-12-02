@extends('app.main')

@section('page-heading', 'Dashboard Guru')

@section('contents')
    <!-- Content Section -->
    <div class="container mt-4">
        <h3>Selamat Datang {{ $role }}</h3>
        <br>
        <div class="card shadow-sm border-primary mb-4">
    <div class="card-body">
      <h4 class="card-title text-primary">Tambah Tugas Baru</h4>
      <form action="/submit-task" method="POST">
        <!-- Nama Kelas -->
        <div class="mb-3">
          <label for="kelas" class="form-label">Nama Kelas</label>
          <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Contoh: XII PPLG" required>
        </div>
        <!-- Judul Tugas -->
        <div class="mb-3">
          <label for="tugas" class="form-label">Judul Tugas</label>
          <input type="text" class="form-control" id="tugas" name="tugas" placeholder="Contoh: Essai mengenai Hortatory Text" required>
        </div>
        <!-- Deadline -->
        <div class="mb-3">
          <label for="deadline" class="form-label">Deadline</label>
          <input type="date" class="form-control" id="deadline" name="deadline" required>
        </div>
        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Simpan Tugas</button>
      </form>
    </div>
  </div>    
        <div class="container mt-4">
  <div class="card shadow-sm border-primary">
    <div class="card-body">
      <h4 class="card-title text-primary">Ringkasan Kelas</h4>
      <p class="card-text">Berikut adalah statistik kelas yang Anda ajarkan:</p>
      <hr>
      <div class="row text-center">
        <!-- Jumlah Kelas -->
        <div class="col-md-4">
          <h5 class="text-success">Jumlah Kelas</h5>
          <h2 class="fw-bold">2</h2>
        </div>
        <!-- Jumlah Siswa Masuk -->
        <div class="col-md-4">
          <h5 class="text-info">Jumlah Siswa Masuk</h5>
          <h2 class="fw-bold">120</h2>
        </div>
        <!-- Mata Pelajaran -->
        <div class="col-md-4">
          <h5 class="text-warning">Mata Pelajaran</h5>
          <h3 class="fw-bold">Pemograman Perangkat Bergerak & Projek Kreatif dan Kewirausahaan</h3>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Card Daftar Tugas -->
  <div class="card shadow-sm border-secondary">
    <div class="card-body">
      <h4 class="card-title text-secondary">Daftar Tugas yang Sudah Diberikan</h4>
      <hr>
      <!-- Tugas 1 -->
      <div class="mb-3">
        <h5 class="text-primary">Kelas XII PPLG</h5>
        <p class="mb-0">Tugas: <b>Essai mengenai Hortatory Text</b></p>
        <p class="text-muted">Deadline: 5 Desember 2024</p>
      </div>
      <hr>
      <!-- Tugas 2 -->
      <div class="mb-3">
        <h5 class="text-primary">Kelas XII TKJ</h5>
        <p class="mb-0">Tugas: <b>Presentasi tentang Jaringan Komputer</b></p>
        <p class="text-muted">Deadline: 10 Desember 2024</p>
      </div>
      <hr>
      <!-- Tugas 3 -->
      <div class="mb-3">
        <h5 class="text-primary">Kelas XII RPL</h5>
        <p class="mb-0">Tugas: <b>Proyek Aplikasi CRUD Sederhana</b></p>
        <p class="text-muted">Deadline: 15 Desember 2024</p>
      </div>
    </div>
  </div>
</div>



 
    </div>
@endsection
