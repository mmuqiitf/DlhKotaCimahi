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
                            ` <form action = "/BODEksisting/save" method = "post">
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="inputtanggal" name="inputtanggal">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">TSS(mg/L)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="coltss" name="coltss">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">DO(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="coldo" name="coldo">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">BOD(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="colbod" name="colbod">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">COD(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="colcod" name="colcod">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Fosfat(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number"step="any" class="form-control" id="colfosfat" name="colfosfat">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Feral
                                        Coli(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="colferal" name="colferal">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Total
                                        Coliform(m3/s)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="colcoliform" name="colcoliform">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button class="tombol3 btn btn-primary" type="" onclick="hitung()">Cek
                                            Hasil</button>
                                        <!-- <button type="submit" class="btn btn-primary">Cek Hasil</button> -->
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Pencemaran air
                                        (Pij)</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="colpij" name="colpij" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Status Mutu Air</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" id="colstatus" readonly  name="colstatus">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="tombol3 btn btn-primary">Simpan
                                            Hasil</button>
                                        <!-- <button type="submit" class="btn btn-primary">Simpan Hasil</button> -->
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
</main>

<script>
function hitung() {
    var coltss, colbod, colcod, colfosfat, colcoliform, colfecal, coldo, bktss, bkbod, bkcod, bkfosfat, bkcoliform,
        bkfecal, bkdo, nilai1, nilai2, nilai3, nilai4, nilai5, nilai6, nilai7, nl1, nl2, nl3, nl4, nl5, nl6, nl7,
        nilairata, nilaimax, nilairata2, nilaimax2, nilaipij, statusmutu;
    bktss = 50;
    bkdo = 4;
    bkbod = 3;
    bkcod = 25;
    bkfosfat = 0.2;
    bkfecal = 1000;
    bkcoliform = 5000;
    coltss = document.getElementById("coltss").value;
    colbod = document.getElementById("colbod").value;
    colcod = document.getElementById("colcod").value;
    colfosfat = document.getElementById("colfosfat").value;
    colcoliform = document.getElementById("colcoliform").value;
    colfecal = document.getElementById("colferal").value;
    coldo = document.getElementById("coldo").value;

    nilai1 = coltss / bktss;
    nilai2 = ((7 - coldo) / (7 - bkdo)) / bkdo;
    nilai3 = colbod / bkbod;
    nilai4 = colcod / bkcod;
    nilai5 = colfosfat / bkfosfat;
    nilai6 = colfecal / bkfecal;
    nilai7 = colcoliform / bkcoliform;


    nl1 = nilai1;
    // 1 + (5 * (Math.log10(coltss / bktss)));
    nl2 = nilai2;
    // 1 + (5 * (Math.log10(coldo / bkdo)));
    nl3 = 1 + (5 * (Math.log10(colbod / bkbod)));
    nl4 = nilai4;
    // 1 + (5 * (Math.log10(colcod / bkcod)));
    nl5 = nilai5;
    // 1 + (5 * (Math.log10(colfosfat / bkfosfat)));
    nl6 = 1 + (5 * (Math.log10(colfecal / bkfecal)));
    nl7 = nilai7;
    //  1 + (5 * (Math.log10(colcoliform / bkcoliform)));



    nilairata = (nl1 + nl2 + nl3 + nl5 + nl6 + nl7) / 7;
    nilaimax = Math.max(nl1, nl2, nl3, nl4, nl5, nl6, nl7);
    nilairata2 = Math.pow(nilairata, 2);
    nilaimax2 = Math.pow(nilaimax, 2);



    nilaipij = Math.sqrt((nilairata2 + nilaimax2) / 2);



    if (nilaipij <= 1) {
        statusmutu = "Baik";
    } else if (nilaipij <= 5) {
        statusmutu = "Tercemar Ringan";
    } else if (nilaipij <= 10) {
        statusmutu = "Tercemar Sedang";
    } else if (nilaipij > 10) {
        statusmutu = "Tercemar Berat";
    }



    document.getElementById("colstatus").value = statusmutu;
    document.getElementById("colpij").value = nilaipij;
}
</script>
<!-- End #main -->



<?= $this->endSection();  ?>