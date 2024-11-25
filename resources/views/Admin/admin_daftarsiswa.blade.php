@extends('app.main')
@section('contents')
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne1" aria-expanded="true"
                                            aria-controls="collapseOne1">
                                            Tugas 1
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Tugas Pemrograman web adalah membuat portofolio website dan berfungsi dengan
                                            baik.

                                            <!-- File Upload Form -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="formFile1" class="form-label">Jika sudah upload filenya
                                                        disini</label>
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne2" aria-expanded="true"
                                            aria-controls="collapseOne2">
                                            Tugas 2
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Tugas Basis Data adalah menulis tentang pengertian field dan record.
                                            <!-- File Upload Form -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="formFile2" class="form-label">Jika sudah upload filenya
                                                        disini</label>
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne3" aria-expanded="true"
                                            aria-controls="collapseOne3">
                                            Tugas 3
                                        </button>
                                    </h2>
                                    <div id="collapseOne3" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne3" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            Tugas PKN adalah mencari sejarah tentang presiden ir.soekarno.
                                            <!-- File Upload Form -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="formFile3" class="form-label">Jika sudah upload filenya
                                                        disini</label>
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne4" aria-expanded="true"
                                            aria-controls="collapseOne4">
                                            Tugas 4
                                        </button>
                                    </h2>
                                    <div id="collapseOne4" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne4" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            Tugas Bahasa Indonesia adalah mencari tahu tentang cerpen dan puisi.
                                            <!-- File Upload Form -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="formFile4" class="form-label">Jika sudah upload filenya
                                                        disini</label>
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
            @endsection
