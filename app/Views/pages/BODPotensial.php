<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="row">
        <div class="pagetitle col-lg-8">
            <h1>Hi Abae,</h1>
            <h4>Create BOD Potensial - Domestik</h4>
        </div>
        <div class="col-lg-4">
            <div class="container__search">
                <div class="input__container">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="search">
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="domestik">
            <div class="row">
                <div class="col-lg-12">
                    <div class="domestikcard">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-3 me-2">
                                    <div class="kecamatan">
                                        <h5>Kecamatan</h5>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Pilih Kecamatan</option>
                                            <option value="1">Cimahi Selatan</option>
                                            <option value="2">Cimahi Tengah</option>
                                            <option value="3">Cimahi Utara</option>
                                        </select>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="col-12 col-lg-3">
=======
                                <div class="col-12 col-lg-3 me-2">
>>>>>>> d2f05f65dc48bc43c592a010975b6371422875d7
                                    <div class="tahun">
                                        <h5>Tahun</h5>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Pilih Tahun</option>
                                            <option value="1">2021</option>
                                            <option value="2">2022</option>
                                            <option value="3">2023</option>
                                            <option value="3">2024</option>
                                            <option value="3">2025</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="tanggal">
                                        <h5>Tanggal</h5>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h3 class="judul">Perhitungan</h3>

    <section class="section">
        <div class="perhitungan">
            <div class="row">
                <div class="col-lg-12">
                    <div class="perhitungancard">
                        <div class="card-body">
                            <div class="col-lg-3">
                                <div class="jmlpenduduk">
                                    <h5>Jumlah Penduduk:</h5>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="rasio">
                                    <h5>Rasio Ekivalen:</h5>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="alfa">
                                    <h5>Alfa:</h5>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="faktor">
                                    <h5>Faktor Emisi Penduduk:</h5>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <button class="tombol2 btn btn-primary" type="submit" onclick="document.location.href='#'">Cek Hasil</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD

=======
>>>>>>> d2f05f65dc48bc43c592a010975b6371422875d7
    <section class="section">
        <div class="hasil">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hasilcard">
                        <div class="card-body">
                            <div class="row">
                                <h5>Beban Pencemaran Sektor Potensial:</h5>
                                <div class="col-12 col-lg-2">
                                    <div class="tahun1">
                                        <h6>2021</h6>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <div class="tahun2">
                                        <h6>2022</h6>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <div class="tahun3">
                                        <h6>2023</h6>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <div class="tahun4">
                                        <h6>2024</h6>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2">
                                    <div class="tahun5">
                                        <h6>2025</h6>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="tombol3 " type="submit" onclick="document.location.href='#'">Simpan Hasil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD

=======
>>>>>>> d2f05f65dc48bc43c592a010975b6371422875d7
</main><!-- End #main -->
<?= $this->endSection();  ?>