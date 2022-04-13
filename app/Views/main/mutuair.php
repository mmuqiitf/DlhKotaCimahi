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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                            <button type="button" class="btn btn-primary" onclick="document.location.href='/buattss'">Create TSS</button>
                            <button type="button" class="btn btn-primary">Input Excel</button>
                        </div>

                    </div>
                    <div class="cardsampling">
                        <div class="card-bodysampling">
                        
                        

                        <div class="table__wrapper">
                            <table class="custom__table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.id</th>
                                        <th scope="col">Titik Pantau</th>
                                        <th scope="col">Tanggal Sampling</th>
                                        <th scope="col">Nilai Pij</th>
                                        <th scope="col">Status Mutu</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form action="<?= base_url('BODEksisting/listtss'); ?>" method="post">
                       



                    </tbody>

                           



                        <?= $this->endSection();  ?>