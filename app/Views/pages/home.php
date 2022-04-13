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
                        <li data-filter=".filter-bpb">Beban Pencemaran Bod</li>
                        <li data-filter=".filter-bpt">Beban Pencemaran Tss</li>
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
                                            <div class="form-group">
                                                <input type="month" class="form-control" id="bulan" value="<?= date('Y-m') ?>">
                                                <br>
                                                <button class="btntampil" id="tombolTampil">
                                                    Tampil
                                                </button>
                                            </div>
                                            <div class="viewTampilGrafik"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- END GRAFIK IPA -->

                <!-- START BOD -->
                <div class="grafikitem filter-bpb">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <!-- BOD EKSISTING -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar BOD Eksisting</h5>
                                            <div id="BODEKSISTING"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BOD EKSISTING -->

                                <!-- BOD POTENSIAL -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar BOD Potensial</h5>
                                            <div id="BODPOTENSIAL"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BOD POTENSIAL -->
                            </div>
                    </section>
                </div>

                <!-- START TSS -->
                <div class="grafikitem filter-bpt">
                    <section class="section">
                        <div class="grafik">
                            <div class="row">
                                <!-- TSS EKSISTING -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar TSS Eksisting</h5>
                                            <div id="TSSEKSISTING"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TSS EKSISTING -->

                                <!-- TSS POTENSIAL -->
                                <div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Beban Pencemar TSS Potensial</h5>
                                            <!-- <div id="TSSEKSISTING"></div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END TSS POTENSIAL -->
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
    function tampilGrafik() {
        $.ajax({
            type: "post",
            url: "home/tampilGrafikIPA",
            data: {
                bulan: $('#bulan').val()
            },
            dataType: "json",
            beforeSend: function() {
                $('.viewTampilGrafik').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            success: function(response) {
                if (response.data) {
                    $('.viewTampilGrafik').html(response.data);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + '\n' + thrownError);
            }

        });
    }


    $(document).ready(function() {
        tampilGrafik();

        $('#tombolTampil').click(function(e) {
            e.preventDefault();
            tampilGrafik();
        });
    });
    // END START IPA

    // START BOD

    // BOD EKSISTING
    const dataSource = {
        chart: {
            formatnumberscale: "1",
            showvalues: "1",
            theme: "fusion"
        },
        categories: [{
            category: [{
                    label: "Cisangkan"
                },
                {
                    label: "Cibaligo"
                },
                {
                    label: "Cibeureum"
                },
                {
                    label: "Cilember"
                },
                {
                    label: "Cimahi"
                }
            ]
        }],
        dataset: [{
                seriesname: "Hulu",
                data: [{
                        value: "12.1"
                    },
                    {
                        value: " 1270.1"
                    },
                    {
                        value: " 5310.1"
                    },
                    {
                        value: " 1072.2"
                    },
                    {
                        value: " 1633.0 "
                    }
                ]
            },
            {
                seriesname: "Tengah",
                data: [{
                        value: "279.1"
                    },
                    {
                        value: "953.9"
                    },
                    {
                        value: "1043.7"
                    },
                    {
                        value: "197.0"
                    },
                    {
                        value: "2610.1 "
                    }
                ]
            },
            {
                seriesname: "Hilir",
                data: [{
                        value: "2903.0"
                    },
                    {
                        value: " 419.9"
                    },
                    {
                        value: "8985.6"
                    },
                    {
                        value: " 81.2"
                    },
                    {
                        value: "0"
                    }
                ]
            }
        ]
    };
    FusionCharts.ready(function() {
        var myChart = new FusionCharts({
            type: "mscolumn3d",
            renderAt: "BODEKSISTING",
            width: "100%",
            height: "300%",
            dataFormat: "json",
            dataSource
        }).render();
    });

    // END BOD EKSISTING
    // BOD POTENSIAL
    <?php
    $Data = [];
    foreach ($BodPOTENSIAL->getResult() as $key => $value) : {
            $Data[] = [
                'label' => $value->Tahun_domestik,
                'value' => $value->Nilai_domestik
            ];
        };
    endforeach ?>

    const Data = <?= json_encode($Data); ?>;
    FusionCharts.ready(function() {
        var myChart = new FusionCharts({
            type: "pie3d",
            renderAt: "BODPOTENSIAL",
            width: "100%",
            height: "300%",
            dataFormat: "json",
            dataSource: {
                "chart": {
                    showvalues: "1",
                    theme: "fusion"
                },
                data: Data
            },
        }).render();
    });
    // END BOD POTENSIAL
    // END START BOD

    // START TSS EKSISTING
    const dataSourcee = {
        chart: {
            formatnumberscale: "1",
            showvalues: "1",
            theme: "fusion"
        },
        categories: [{
            category: [{
                    label: "Cisangkan"
                },
                {
                    label: "Cibaligo"
                },
                {
                    label: "Cibeureum"
                },
                {
                    label: "Cilember"
                },
                {
                    label: "Cimahi"
                }
            ]
        }],
        dataset: [{
                seriesname: "Hulu",
                data: [{
                        value: " 29.4"
                    },
                    {
                        value: "423.4"
                    },
                    {
                        value: "40205.4"
                    },
                    {
                        value: " 1766.0"
                    },
                    {
                        value: " 5806.1"
                    }
                ]
            },
            {
                seriesname: "Tengah",
                data: [{
                        value: "443.2"
                    },
                    {
                        value: "622.1"
                    },
                    {
                        value: " 8741.1"
                    },
                    {
                        value: "124.4"
                    },
                    {
                        value: " 40525.9 "
                    }
                ]
            },
            {
                seriesname: "Hilir",
                data: [{
                        value: "2073.6"
                    },
                    {
                        value: " 482.1"
                    },
                    {
                        value: "53913.6"
                    },
                    {
                        value: "22.5"
                    },
                    {
                        value: "0"
                    }
                ]
            }
        ]
    };
    FusionCharts.ready(function() {
        var myChart = new FusionCharts({
            type: "mscolumn3d",
            renderAt: "TSSEKSISTING",
            width: "100%",
            height: "300%",
            dataFormat: "json",
            dataSource
        }).render();
    });
    // END TSS EKSISTING
</script>
<?= $this->endSection() ?>