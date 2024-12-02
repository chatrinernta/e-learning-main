@extends('app.main')

@section('page-heading', 'Dashboard Murid')

@section('contents')
    <!-- Content Section -->
    <div class="container mt-4">
        <h3>Selamat Datang {{ $role }}</h3>

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
                                                        <img src="assets/images/samples/1.png" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>RAFI</h5>
                                                            <p>KETUA KELAS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/2.png" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>UCOK</h5>
                                                            <p>WAKIL KETUA KELAS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/3.png" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>JAMAL</h5>
                                                            <p>BENDAHARA</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/4.png" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>ASEP</h5>
                                                            <p>SEKERTARIS</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/3.png" class="d-block w-100" alt="...">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>UDINN</h5>
                                                            <p>KEBERSIHAN</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item" data-bs-interval="4000">
                                                        <img src="assets/images/samples/2.png" class="d-block w-100" alt="...">
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

 
    </div>
@endsection
