<?= $this->extend('layout/template');  ?>


<?= $this->section('content'); ?>
<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Oki Kurniawan,</h1>
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


                    <div class="custom__card__large">
                        <div class="custom__header__card__large">
                            <button type="button" class="btn btn-primary"
                                onclick="document.location.href='/buattss'">Create TSS</button>
                            <button type="button" class="btn btn-primary">Input Excel</button>
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


                        <div class="table__wrapper">
                            <table class="custom__table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.id</th>
                                        <th scope="col">Titik Pantau</th>
                                        <th scope="col">Tanggal Sampling</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hulu</td>
                                        <td>20/12/2020</td>
                                        <td>
                                            <div class="button__action__container">
                                                <button type="button"
                                                    class="btn btn-primary custom__button__edit">Update</button>
                                                <button type="button"
                                                    class="btn btn-danger custom__button__delete">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hilir</td>
                                        <td>12/06/2022</td>
                                        <td>
                                            <div class="button__action__container">
                                                <button type="button"
                                                    class="btn btn-primary custom__button__edit">Update</button>
                                                <button type="button"
                                                    class="btn btn-danger custom__button__delete">Delete</button>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tengah</td>
                                        <td>9/6/2021</td>
                                        <td>
                                            <div class="button__action__container">
                                                <button type="button"
                                                    class="btn btn-primary custom__button__edit">Update</button>
                                                <button type="button"
                                                    class="btn btn-danger custom__button__delete">Delete</button>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>


                        </div>

                    </div>



                    <?= $this->endSection();  ?>