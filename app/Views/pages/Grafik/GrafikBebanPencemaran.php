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
                    'rgba(255, 199, 132, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(255, 205, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(201, 203, 207, 0.5)'
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