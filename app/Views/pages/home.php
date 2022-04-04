<?= $this->extend('layout/template');  ?>


<?= $this->section('content'); ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hi Marco,</h1>
        <h4>Welcome to DLH Cimahi!</h4>
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
                                        <h6 class="card-title">Karyawan</h6>
                                        <h5 class="card-title"><?= $jumlah_user ?></h5>
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
                                        <h6 class="card-title">Titik Pantau</h6>
                                        <h5 class="card-title">15</h5>
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
                                        <h6 class="card-title">Jumlah Sungai</h6>
                                        <h5 class="card-title"><?= $jumlah_Sungai ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <div class="col-lg-3 col-md-4 mb-3">
                        <div class="card info-card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bx bxs-layer-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="card-title">Nilai Index Pencemaran Air</h6>
                                        <h5 class="card-title">21.33</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->
                </div>
            </div>
        </div>
    </section>

    <!-- grafik -->
    <section class="Grafikpilihan">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="grafik-flters">
                        <!-- <li data-filter="*" class="filter-active">Semua</li> -->
                        <li data-filter=".filter-ika">Index Kualitas Air</li>
                        <li data-filter=".filter-bp">Beban Pencemaran</li>
                    </ul>
                </div>
            </div>

            <br>
            <br>

            <div class="row grafik-container">
                <div class="grafikitem filter-ika">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pij Pencemaran Air Berdasarkan Titik Pantau</h5>
                                            <canvas id="thread_sungai" width="300" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://code.highcharts.com/highcharts.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                                <!-- GRAFIK 1 LAGI -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Index Pencemaran Air</h5>
                                            <canvas id="index_pencemaran_air" width="300" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://code.highcharts.com/highcharts.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

                                <!-- GRAFIK 1 LAGI -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pij Pencemaran Air Berdasarkan Periode</h5>
                                            <canvas id="pij_tanggal" width="300" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://code.highcharts.com/highcharts.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="grafikitem filter-bp">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar BOD Eksisting</h5>
                                            <canvas id="Bodgraf" width="300" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar BOD Aktual</h5>
                                            <canvas id="modelBodAktualgrafik" width="300" height="300"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?= $this->endSection();  ?>
<?= $this->section('script') ?>
<script src="<?= base_url('chartjs/Chart.bundle.min.js') ?>"></script>
<script>
    var thread_sungai = document.getElementById('thread_sungai');
    var label_thread_sungai = [];
    var data_thread_pij = [];

    <?php foreach ($thread_per_sungai->getResult() as $key => $value) : ?>
        label_thread_sungai.push('<?= $value->sungai ?>');
        data_thread_pij.push('<?= $value->Nilai_pij ?>');
    <?php endforeach ?>

    var data_thread_per_sungai = {
        datasets: [{
            // data: data_thread_sungai,
            data: data_thread_pij,
            backgroundColor: [
                'rgba(255,99,132,0.8)',
                'rgba(54,162,235,0.8)',
                'rgba(255,206,86,0.8)',
                'rgb(152,251,153,0.8)',
                'rgb(64,224,208,0.8)',
                'rgb(138, 43, 226,0.8)',
                'rgb(220, 20, 60,0.8)',
                'rgb(85, 107, 47,0.8)',
                'rgb(249, 19, 147,0.8)',
                'rgb(253, 215, 3,0.8)',
            ],
        }],
        labels: label_thread_sungai,
    }

    var chart_thread_sungai = new Chart(thread_sungai, {
        type: 'doughnut',
        data: data_thread_per_sungai
    });


    // Pij tanggal
    var thread_sungai = document.getElementById('pij_tanggal');
    var label_thread_sungai = [];
    var data_thread_pij = [];

    <?php foreach ($thread_per_periode->getResult() as $key => $value) : ?>
        label_thread_sungai.push('<?= $value->sungai ?>');
        data_thread_pij.push('<?= $value->Nilai_pij ?>');
    <?php endforeach ?>

    var data_thread_per_sungai = {
        datasets: [{
            // data: data_thread_sungai,
            data: data_thread_pij,
            borderColor: 'rgb(61, 105, 136)',
            backgroundColor: 'rgb(43, 191, 254,0.5)',

        }],
        labels: label_thread_sungai,
    }

    var chart_thread_sungai = new Chart(thread_sungai, {
        type: 'line',
        data: data_thread_per_sungai
    });

    // IPA
    var ipa = document.getElementById('index_pencemaran_air');
    var data_ipa = [];
    var label_katagori_pencemaran = [];

    <?php foreach ($Index_Pencemaran_air->getResult() as $key => $value) : ?>
        data_ipa.push(<?= $value->Nilai_ipa ?>);
        label_katagori_pencemaran.push('<?= $value->katagori_pencemaran ?>');
    <?php endforeach ?>

    var Index_Pencemaran_air = {
        datasets: [{
            label: 'Nilai Ipa',
            data: data_ipa,

            backgroundColor: [
                'rgba(255,99,132,0.8)',
                'rgba(54,162,235,0.8)',
                'rgba(255,206,86,0.8)',
                'rgb(152,251,153,0.8)',
                'rgb(64,224,208,0.8)',
            ],

        }],

        labels: label_katagori_pencemaran,
    }

    var chart_katagori_pencemaran = new Chart(ipa, {
        type: 'bar',
        data: Index_Pencemaran_air
    });

    // bod eksinting
    var Bodgraf = document.getElementById('Bodgraf');
    var label_Bodgraf = [];
    var data_Bodgraf = [];

    <?php foreach ($Bodgraf->getResult() as $key => $value) : ?>
        label_Bodgraf.push('<?= $value->bod_eksisting ?>');
        data_Bodgraf.push('<?= $value->BOD ?>');
    <?php endforeach ?>

    var data_Bodgraf = {
        datasets: [{
            // data: data_thread_sungai,
            data: data_Bodgraf,
            borderColor: 'rgb(61, 105, 136)',
        }],
        labels: label_Bodgraf,
    }

    var chart_Bodgraf = new Chart(Bodgraf, {
        type: 'line',
        data: data_Bodgraf
    });

    // BOD AKTUAL
    var modelBodAktualgrafik = document.getElementById('modelBodAktualgrafik');
    var label_modelBodAktualgrafik = [];
    var data_modelBodAktualgrafik = [];

    <?php foreach ($modelBodAktualgrafik->getResult() as $key => $value) : ?>
        label_modelBodAktualgrafik.push('<?= $value->bod_aktual ?>');
        data_modelBodAktualgrafik.push('<?= $value->Bod_aktual ?>');
    <?php endforeach ?>

    var data_modelBodAktualgrafik = {
        datasets: [{
            // data: data_thread_sungai,
            data: data_modelBodAktualgrafik,
            borderColor: 'rgb(61, 105, 136)',
            backgroundColor: [
                'rgba(255,99,132,0.8)',
                'rgba(54,162,235,0.8)',
                'rgba(255,206,86,0.8)',
                'rgb(152,251,153,0.8)',
                'rgb(64,224,208,0.8)',
                'rgb(138, 43, 226,0.8)',
                'rgb(220, 20, 60,0.8)',
                'rgb(85, 107, 47,0.8)',
                'rgb(249, 19, 147,0.8)',
                'rgb(253, 215, 3,0.8)',
            ]
        }],
        labels: label_modelBodAktualgrafik,
    }

    var chart_modelBodAktualgrafik = new Chart(modelBodAktualgrafik, {
        type: 'bar',
        data: data_modelBodAktualgrafik
    });
</script>
<?= $this->endSection() ?>