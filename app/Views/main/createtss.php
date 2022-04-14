<?= $this->extend('layout/templatetss');  ?>


<?= $this->section('content'); ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Oki Kurniawan,</h1>
        <h4>Perhitungan Mutu Air</h4>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="cardsungaimutu">
                        <div class="card-bodysungai">
                            <select id="list" name="list" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" onclick="getSelectValue()">

                                <option selected>Nama Sungai</option>
                                <option value="Sungai Cisangkan Hulu">Sungai Cisangkan Hulu</option>
                                <option value="Sungai Cisangkan Tengah">Sungai Cisangkan Tengah</option>
                                <option value="Sungai Cisangkan Hilir">Sungai Cisangkan Hilir</option>
                                <option value="Sungai Cibaligo Hulu">Sungai Cibaligo Hulu</option>
                                <option value="Sungai Cibaligo Tengah">Sungai Cibaligo Tengah</option>
                                <option value="Sungai Cibaligo Hilir">Sungai Cibaligo Hilir</option>
                                <option value="Sungai Cibereum Hulu">Sungai Cibereum Hulu</option>
                                <option value="Sungai Cibereum Tengah">Sungai Cibereum Tengah</option>
                                <option value="Sungai Cibereum Hilir">Sungai Cibereum Hilir</option>
                                <option value="Sungai Cilember Hulu">Sungai Cilember Hulu</option>
                                <option value="Sungai Cilember Tengah">Sungai Cilember Tengah</option>
                                <option value="Sungai Cilember Hilir">Sungai Cilember Hilir</option>
                                <option value="Sungai Cimahi Hulu">Sungai Cimahi Hulu</option>
                                <option value=">Sungai Cimahi Tengah">Sungai Cimahi Tengah</option>
                                <option value="Sungai Cimahi Hilir">Sungai Cimahi Hilir</option>

                            </select>

                            <script>
                                function getSelectValue() {
                                    var selectedValue = document.getElementById("list").value;

                                    document.getElementById("collist").value = selectedValue;

                                }
                            </script>


                        </div>
                    </div>

                    <div class="cardsampling">
                        <div class="card-bodysampling">
                            <!-- General Form Elements -->
                            <form action="/BODEksisting/save" method="post">
                                <div class="cardtitikpantau">
                                    <div class="card-bodytitik">
                                        <label for="inputNumber" class="col-sm-2 col-form-label">ID Sungai</label>
                                        <input class="form-control" id="collist" readonly name="collist">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="inputtanggal" name="inputtanggal">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Periode Pantau</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="periode" name="periode">
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
                                        <input type="number" step="any" class="form-control" id="colfosfat" name="colfosfat">
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
                                        <input class="form-control" id="colstatus" readonly name="colstatus">
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
                            </form>

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