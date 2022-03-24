<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">
<link href="/custom_css/excel_style.css" rel="stylesheet">

<main id="main" class="main">

    <!-- Header -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column custom__header">
                    <h1>Hi mrayandika</h1>
                    <h4>Data BOD Eksisting</h4>
                </div>

            </div>
            <div class="col">
                <div class="container__search">
                    <div class="input__container">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="search">
                    </div>
                </div>
            </div>
        </div>

        <!-- ENd Header -->

        <div class="custom__wrapper">

            <!-- end of small card -->

            <div class="custom__card__large">
                <div class="custom__header__card__large">
                    <form action="/BODEksisting/uploadexcel" name="submit" method="POST" enctype="multipart/form-data">
                        <input type="file" id="BODAktualCimahi" name="BODAktualCimahi" value=""
                            class="custom-file-input" aria-describedby="inputGroupFileAddon01" required>
                        <button type="submit" class="btn btn-primary">Upload Excel</button>
                        <button type="button" class="btn btn-primary"
                            onclick="document.location.href='/exp/BODAktualCimahi.xlsx'">Download Excel</button>
                    </form>

                </div>
                <div class="custom__card__large">
                    <div class="custom__header__card__large">
                    <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/periode1'">Periode I</button>
                    <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/periode2'">Periode II</button>
                    <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/periode3'">Periode III</button>
                    </div>
                </div>
                <div class="table__wrapper">
                    <h3><?= $prd; ?></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm border-dark">
                            <thead class="text-dark">
                                <tr align="center">
                                    <th class="align-middle">No</th>
                                    <th class="align-middle">Nama Sungai</th>
                                    <th class="align-middle">Titik Pantau</th>
                                    <th class="align-middle">Lintang</th>
                                    <th class="align-middle">Bujur</th>
                                    <th class="align-middle">Waktu Sampling (Tgl/Bln/Thn)</th>
                                    <th class="align-middle">BOD (mg/lt)</th>
                                    <th class="align-middle bg-merah">Debit (m3/s)</th>
                                    <th class="align-middle bg-merah">Beban Pencemar Aktual (kg/hari)</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                                <?php foreach ($data as $d) : ?>
                                <tr align="center">
                                    <th align="center"><?= $i++; ?></th>
                                    <td align="center"><?= $d['nama_sungai']; ?></td>
                                    <td align="center"><?= $d['titik_pantau']; ?></td>
                                    <td align="center"><?= $d['lintang']; ?></td>
                                    <td align="center"><?= $d['bujur']; ?></td>
                                    <td align="center"><?= $d['waktu_sampling']; ?></td>
                                    <td align="center"><?= $d['BOD']; ?></td>
                                    <td align="center"><?= $d['debit']; ?></td>
                                    <td align="center"><?= $d['beban_pencemar']; ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <i><strong>Sumber : Dinas Lingkungan Hidup Kota Cimahi (2020) </strong></i><br>
                        <i><strong>Keterangan : </strong></i><br>
                        <i><strong>1. Pengujian dilakukan oleh UPTD Laboratorium Lingkungan Kota Cimahi dan UPTD
                                Laboratorium Kabupaten Bandung</strong></i><br>
                        <i><strong>2. (-) menunjukan tidak menguji parameter tersebut</strong></i>
                    </div>
                </div>
            </div>
        </div>
</main>

<?= $this->endSection();  ?>