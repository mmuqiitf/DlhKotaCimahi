<link rel="stylesheet" href="<?= base_url() . '/plugins/chart.js/Chart.min.css' ?>">
<script src="<?= base_url() . '/plugins/chart.js/Chart.bundle.min.js' ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.6.0"></script>

<canvas id="myChart" style="height: 55vh; width: 100%;"></canvas>

<?php
$tanggal = "";
$total = "";
$na = "";

foreach ($grafik as $row) :
    $tgl = $row->tgl;
    $tanggal .= "'$tgl'" . ",";

    $Nilai_pij = $row->Nilai_pij;
    $total .= "'$Nilai_pij'" . ",";

    $Titik_pantau = $row->Titik_pantau;
    $na .= "'$Titik_pantau'" . ",";
endforeach;
?>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chartdata = new Chart(ctx, {
        plugins: [ChartDataLabels],
        type: 'bar',
        showTooltips: true,
        responsive: true,
        data: {
            labels: [<?= $na ?>],

            datasets: [{
                label: 'Nilai Pij',
                backgroundColor: [
                    'rgba(255, 199, 132, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(11,214,247, 0.8)',
                    'rgba(55, 159, 164, 0.8)',
                    'rgba(255, 205, 186, 0.8)',
                    'rgba(221,88,209, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(53, 202, 255, 0.8)',
                    'rgba(55, 220, 64, 0.8)',
                    'rgba(88,217,221, 0.8)',
                    'rgba(221,219,88, 0.8)',
                    'rgba(44,218,186, 0.8)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                fill: false,
                data: [<?= $total ?>]
            }, {
                label: 'Nilai hulu',
                data: [10, 17, 7, 9, 2, 2, 4, 5, 6, 7],
                borderColor: "green",
                fill: false
            }, {
                label: 'Nilai hilir',
                data: [3, 7, 2, 5, 6, 4, 2, 1, 2, 1],
                borderColor: "blue",
                fill: false
            }],
            options: {
                formatter: function(value) {
                    return value;
                },
                rotation: 1 * Math.PI,
                circumference: 1 * Math.PI
            }
        },
        duration: 1000
    })
</script>