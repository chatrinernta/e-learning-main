@extends('app.main')

@section('page-heading', '')

@section('contents')
    <!-- Content Section -->
    <div class="container mt-4">
        <h3>Selamat Datang {{ $role }}</h3>
        <br>
    <h4>Tugas Kelas XII PPLG 1 </h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama Pelajaran</th>
      <th scope="col">Nama Tugas</th>
      <th scope="col">Kelas</th>
      <th scope="col">Upload File</th>
    </tr>
  </thead>
  <tbody>
    <!-- Baris Tugas 1 -->
    <tr>
      <td>PKK</td>
      <td>Buatlah dialog pendek antara dua orang dalam bahasa Jepang yang membahas kegiatan sehari-hari, seperti di sekolah atau di rumah. Tugas harus diketik menggunakan aplikasi pengolah kata (misalnya Microsoft Word atau Google Docs).</td>
      <td>XII PPLG</td>
      <td>
        <form action="/path-to-upload" method="POST" enctype="multipart/form-data">
          <input type="file" class="form-control" name="file" required>
          <button type="submit" class="btn btn-primary mt-2">Upload</button>
        </form>
      </td>
    </tr>
    <!-- Baris Tugas 2 -->
    <tr>
      <td>PPB</td>
      <td>Menyelesaikan Soal Kalkulus</td>
      <td>XII PPLG</td>
      <td>
        <form action="/path-to-upload" method="POST" enctype="multipart/form-data">
          <input type="file" class="form-control" name="file" required>
          <button type="submit" class="btn btn-primary mt-2">Upload</button>
        </form>
      </td>
    </tr>
    <!-- Baris Tugas 2 -->
    <tr>
      <td>PW</td>
      <td>Menyelesaikan Soal Kalkulus</td>
      <td>XII PPLG</td>
      <td>
        <form action="/path-to-upload" method="POST" enctype="multipart/form-data">
          <input type="file" class="form-control" name="file" required>
          <button type="submit" class="btn btn-primary mt-2">Upload</button>
        </form>
      </td>
    </tr>
    <!-- Baris Tugas 2 -->
    <tr>
      <td>Basis Data</td>
      <td>Menyelesaikan Soal Kalkulus</td>
      <td>XII PPLG</td>
      <td>
        <form action="/path-to-upload" method="POST" enctype="multipart/form-data">
          <input type="file" class="form-control" name="file" required>
          <button type="submit" class="btn btn-primary mt-2">Upload</button>
        </form>
      </td>
    </tr>
  </tbody>
</table>



        @endsection