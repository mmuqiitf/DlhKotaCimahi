<?= $this->extend('layout/template');  ?>


<?= $this->section('content'); ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Erick Jomblo,</h1>
        <h4>Status Mutu Air</h4>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-4 mb-3">
                        <div class="card info-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-user"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Data Ukur</h6>
                                        <h5 class="card-title">45</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <div class="col-lg-3 col-md-4 mb-3">
                        <div class="card info-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-location-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Titik Pantau</h6>
                                        <h5 class="card-title">3</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <div class="col-lg-3 col-md-4 mb-3">
                        <div class="card info-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-bar-chart-alt-2"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Sungai</h6>
                                        <h5 class="card-title">5</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->


                    <div class="cardsungaimutu">
                        <div class="card-bodysungai">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                <option selected>Nama Sungai</option>
                                <option value="1"> Sungai Cisangkan</option>
                                <option value="2">Sungai Cibaligo</option>
                                <option value="3">Sungai Cibereum</option>
                                <option value="2">Sungai Cilember</option>
                                <option value="3">Sungai Cimahi</option>
                            </select>
                        </div>
                    </div>

                    <div class="cardtitikpantau">
                        <div class="card-bodytitik">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Titik Pantau</option>
                                <option value="1">Hulu</option>
                                <option value="2">Tengah</option>
                                <option value="3">Hilir</option>
                            </select>
                        </div>
                    </div>

                    <div class="cardsampling">
                        <div class="card-bodysampling">
                            <!-- General Form Elements -->
                            ` <form>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">TSS(mg/L)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">DO(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">BOD(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">COD(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Fosfat(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Feral
                                        Coli(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Total
                                        Coliform(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Cek Hasil</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Pencemaran air
                                        (Pij)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Status Mutu Air</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan Hasil</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->`

                        </div>
                    </div>

                </div>





            </div>
        </div>

        </div>
    </section>
</main><!-- End #main -->



<?= $this->endSection();  ?>