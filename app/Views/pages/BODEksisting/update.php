<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<form action="<?= base_url('BODEksisting/update_bod'); ?>" method="POST">
    <main id="main" class="main">

        <!-- Header -->

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column custom__header">
                        <h1>Hi mrayandika</h1>
                        <h4>Create BOD Eksisting</h4>
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

                <!-- small card -->
                <div class="custom__container">
                    <div class="custom__card">
                        <h3>Nama Sungai</h3>
                        <div class="select__custom__container">
                            <select class="form-control" name="nama_sungai" type="input" class="form-select">
                                <option value="Cisangkan" <?php if ($bod['nama_sungai'] == "Cisangkan") echo 'selected="selected"'; ?>>Cisangkan</option>
                                <option value="Cibaligo" <?php if ($bod['nama_sungai'] == "Cibaligo") echo 'selected="selected"'; ?>>Cibaligo</option>
                                <option value="Cibeureum" <?php if ($bod['nama_sungai'] == "Cibeureum") echo 'selected="selected"'; ?>>Cibereum</option>
                                <option value="Cilember" <?php if ($bod['nama_sungai'] == "Cilember") echo 'selected="selected"'; ?>>Cilember</option>
                                <option value="Cimahi" <?php if ($bod['nama_sungai'] == "Cimahi") echo 'selected="selected"'; ?>>Cimahi</option>
                            </select>
                        </div>
                    </div>

                    <!-- end of small card -->

                    <input type="hidden" name="id" value="<?= $bod['id']; ?>">
                    <!-- small card -->
                    <div class="custom__container">
                        <div class="custom__card">
                            <h3>Titik Pantau</h3>
                            <div class="select__custom__container">
                                <select class="form-control" name="nama_titikPantau" type="input" class="form-select">
                                    <option value="Hulu" <?php if ($bod['nama_titikPantau'] == "Hulu") echo 'selected="selected"'; ?>>Hulu</option>
                                    <option value="Tengah" <?php if ($bod['nama_titikPantau'] == "Tengah") echo 'selected="selected"'; ?>>Tengah</option>
                                    <option value="Hilir" <?php if ($bod['nama_titikPantau'] == "Hilir") echo 'selected="selected"'; ?>>Hilir</option>
                                </select>
                            </div>
                        </div>

                        <!-- end of small card -->


                        <div class="custom__header__create">
                            <h3>Perhitungan</h3>
                        </div>

                        <div class="custom__card__large">
                            <div class="container">
                                <div class="row">
                                    <div class="col d-flex flex-column gap-4">
                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3 for="BOD">BOD (mg/L)</h3>
                                            <input class="form-select form-control" name="BOD" type="input" id="BOD" value="<?= $bod['BOD'] ?>">

                                        </div>
                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3 for="Debit">Debit (m3/s)</h3>
                                            <input class="form-control " name="Debit" type="input" id="Debit" value="<?= $bod['Debit'] ?>">

                                        </div>

                                        <div class="btn btn-primary custom__btn__result" onclick="doMath();">Cek Hasil</div>


                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3>Beban Pencemar (Kg/Hari)</h3>
                                            <input class="form-control" name="beban_pencemar" id="beban_pencemar" type="input" value="<?= $bod['beban_pencemar'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="d-flex flex-column custom__container__sampling gap-2">
                                            <h2>Waktu Sampling</h2>

                                            <div class="form-group">
                                                <div class="input-group date" id="datepicker">
                                                    <input name="waktu_sampling" type="input" class="custom__date__picker form-control" value="<?= $bod['waktu_sampling'] ?>">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row row__result">

                                    <button type="button" class="btn btn-primary custom__btn__result" data-bs-toggle="modal" data-bs-target="#exampleModalupdate">Simpan hasil</button>
                                    <?= $this->include('/feedback/update__modal') ?>
                                </div>
                            </div>
                        </div>










    </main>
</form>


<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });

    function doMath() {
        // Capture the entered values of two input boxes
        var my_input1 = document.getElementById('BOD').value;
        var my_input2 = document.getElementById('Debit').value;

        // Add them together and display
        var sum = (parseFloat(my_input1) * parseFloat(my_input2)) * 86.4;
        document.getElementById('beban_pencemar').value = sum;
    }
</script>





<?= $this->endSection();  ?>