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
                                        <i class="bx bxs-location-plus"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="card-title">Titik Pantau</h6>
                                        <h5 class="card-title"><?= $jumlah_Sungai ?></h5>
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
                                        <h5 class="card-title">5</h5>
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
                                        <i class="bx bxs-user"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="card-title">Jumlah Pecemaran Air</h6>
                                        <h5 class="card-title">30</h5>
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
                        <li data-filter=".filter-ika">Index Kualitas Air</li>
                        <li data-filter=".filter-ipa">Indeks Pencemaran Air</li>
                        <li data-filter=".filter-bp">Beban Pencemaran</li>
                    </ul>
                </div>
            </div>
            <br>
            <br>
            <div class="row grafik-container">
                <!-- GRAFIK IKA -->
                <div class="grafikitem filter-ika">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <!-- NILAI IKA -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Nilai Index Kualitas Air</h5>
                                            <div id="NilaiIKA"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END NILAI IKA -->

                                <!-- JUMLAH IKA -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Jumlah Index Kualitas Air</h5>
                                            <div id="JumlahIKA"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END JUMLAH IKA -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- END GRAFIK IKA -->

                <!-- GRAFIK IPA -->
                <div class="grafikitem filter-ipa">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <!-- PIJ -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Index Pencemaran Air</h5>
                                            <!-- <canvas id="index_pencemaran_air" width="300" height="300"></canvas> -->
                                            <!-- <div id="chart"></div> -->
                                            <div id="IPA"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STATUS PENCEMARAN AIR-->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Status Pencemaran Air</h5>
                                            <div id="SPA"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- END GRAFIK IPA -->

                <div class="grafikitem filter-bp">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar BOD Potensial Domestik</h5>
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

                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar TSS Aktual</h5>
                                            <!-- <canvas id="modelTssAktualgrafik" width="300" height="100"></canvas> -->
                                            <div id="chart-container">FusionCharts XT will load here!</div>
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
    // START IKA
    // NILAI IKA
    <?php
    $chartData = [];
    foreach ($nilaiIKA->getResult() as $key => $value) : {
            $chartData[] = [
                'label' => $value->tahun_ika,
                'value' => $value->nilai_ika
            ];
        };
    endforeach ?>

    const chartData = <?= json_encode($chartData); ?>;
    const chartConfig = {
        type: 'spline',
        renderAt: 'NilaiIKA',
        width: '100%',
        height: '300%',
        dataFormat: 'json',
        dataSource: {
            "chart": {
                showvalues: "1",
                showpercentintooltip: "0",
                enablemultislicing: "1",
                theme: "fusion"
            },
            data: chartData
        },
    };
    FusionCharts.ready(function() {
        var fusioncharts = new FusionCharts(chartConfig);
        fusioncharts.render();
    });

    // END NILAI IKA 
    // START JUMLAH IKA
    <?php
    $chart = [];
    foreach ($jumlahIKA->getResult() as $key => $value) : {
            $chart[] = [
                'label' => $value->tahun_ika,
                'value' => $value->jumlah_ika
            ];
        };
    endforeach ?>
    const chart = <?= json_encode($chart); ?>;
    FusionCharts.ready(function() {
        var myChart = new FusionCharts({
            type: "line",
            renderAt: "JumlahIKA",
            width: "100%",
            height: "300%",
            dataFormat: "json",
            dataSource: {
                "chart": {
                    showvalues: "1",
                    showpercentintooltip: "0",
                    enablemultislicing: "1",
                    numvisibleplot: "12",
                    theme: "fusion"
                },
                data: chart
            },
        }).render();
    });
    // END JUMLAH IKA
    // END START IKA
    // START IPA
    const dataSource = {
        chart: {
            showvalues: "1",
            formatnumberscale: "1",
            theme: "fusion",
            drawcrossline: "1"
        },
        categories: [{
            category: [{
                    label: "Citarum"
                },
                {
                    label: "2013"
                },
                {
                    label: "2014"
                },
                {
                    label: "2015"
                },
                {
                    label: "2016"
                }
            ]
        }],
        dataset: [{
                seriesname: "Hulu",
                data: [{
                        value: "125000"
                    },
                    {
                        value: "300000"
                    },
                    {
                        value: "480000"
                    },
                    {
                        value: "800000"
                    },
                    {
                        value: "1100000"
                    }
                ]
            },
            {
                seriesname: "Tengah",
                data: [{
                        value: "70000"
                    },
                    {
                        value: "150000"
                    },
                    {
                        value: "350000"
                    },
                    {
                        value: "600000"
                    },
                    {
                        value: "1400000"
                    }
                ]
            },
            {
                seriesname: "Hilir",
                data: [{
                        value: "10000"
                    },
                    {
                        value: "100000"
                    },
                    {
                        value: "300000"
                    },
                    {
                        value: "600000"
                    },
                    {
                        value: "900000"
                    }
                ]
            }
        ]
    };

    FusionCharts.ready(function() {
        var myChart = new FusionCharts({
            type: "mscolumn3d",
            renderAt: "IPA",
            width: "100%",
            height: "300%",
            // showvalues: "1",
            dataFormat: "json",
            dataSource
        }).render();
    });

    // END START IPA
</script>
<?= $this->endSection() ?>