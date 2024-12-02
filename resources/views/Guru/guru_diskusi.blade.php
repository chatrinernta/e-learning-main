@extends('app.main')

@section('page-heading', '')
    
@section('contents')

  <div class="container mt-4">
  <h3>Selamat Datang {{ $role }}</h3>
  <br>
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-6 mb-4 ">
      <div class="card border-primary h-100 w-100 shadow-lg">
        <div class="card-body text-primary">
          <h5 class="card-title">PKK</h5>
          <p class="card-text">Bergabunglah dengan grup diskusi untuk belajar bersama tentang mata pelajaran ini!</p>
        </div>
        <button 
          type="button" 
          class="btn btn-outline-primary" 
          onclick="window.open('https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bergabung%20ke%20grup%20diskusi%20Bahasa%20Jepang!', '_blank')">
          Join grup
        </button>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-6 mb-4">
      <div class="card border-success h-100 w-100 shadow-lg">
        <div class="card-body text-success">
          <h5 class="card-title">PPB</h5>
          <p class="card-text">Bergabunglah dengan grup diskusi untuk belajar bersama tentang mata pelajaran ini!</p>
        </div>
        <button 
          type="button" 
          class="btn btn-outline-success" 
          onclick="window.open('https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bergabung%20ke%20grup%20diskusi%20Bahasa%20Inggris!', '_blank')">
          Join grup
        </button>
      </div>
    </div>
  </div>
</div>


@endsection