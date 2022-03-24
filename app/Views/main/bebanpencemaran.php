<?= $this->extend('layout/template');  ?>


<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Marco,</h1>
        <h4>Beban Pencemaran</h4>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="pencemaran">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="col-md-6">
                                    <div class="beban">
                                        <h2><b>Data Beban <br>Pencemaran <br>TSS </h2>
                                        <h5>Masukan Data dengan Klik <br>Button di bawah ini!</h5>
                                        <button class="tombol1 btn btn-primary" type="submit"
                                            onclick="document.location.href='/BODPotensial'">Masukkan Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <div class="col-md-6">
                                    <div class="beban">
                                        <h2><b>Data Beban <br>Pencemaran <br>BOD</h2>
                                        <h5>Masukan Data Pengolahan Air</h5>
                                        <div class="d-flex gap-3">
                                            <button class="tombol1 btn btn-primary" type="submit"
                                                onclick="document.location.href='/BODPotensial'">BOD Potensial</button>
                                            <button class="tombol1 btn btn-primary" type="submit"
                                                onclick="document.location.href='/BODEksisting/listbod'">BOD Eksisting
                                            </button>
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

</main><!-- End #main -->
<?= $this->endSection();  ?>