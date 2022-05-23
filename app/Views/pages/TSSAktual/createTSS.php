<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



<main id="main" class="main">

    <!-- Header -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column custom__header">
                    <h1>Hi, Kelompok7</h1>
                    <h4>Create TSS Eksisting</h4>
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
                <form action="/TSSAktual/add" method="post">
                    <div class="custom__card">
                        <h3>Nama Sungai</h3>
                        <div class="select__custom__container">
                            <select name="nama_sungai" class="form-select <?= ($validation->hasError('nama_sungai')) ? 'is-invalid' : '' ?>">
                                <?php foreach ($bod_aktual as $bod) : ?>
                                    <option value="<?= $bod['titik_pantau'] ?>"><?= $bod['titik_pantau'] ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_sungai') ?>
                        </div>
                    </div>

                    <!-- end of small card -->


                    <!-- small card -->
                    <div class="custom__container">
                        <div class="custom__card">
                            <h3>Titik Pantau</h3>
                            <div class="select__custom__container <?= ($validation->hasError('nama_sungai')) ? 'is-invalid' : '' ?>">
                                <select name="titik_pantau" class="form-select">
                                    <option value="Hulu">Hulu</option>
                                    <option value="Tengah">Tengah</option>
                                    <option value="Hilir">Hilir</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('titik_pantau') ?>
                            </div>
                        </div>

                        <!-- end of small card -->


                        <div class="custom__header__create">
                            <h3>Perhitungan</h3>
                        </div>

                        <?php echo csrf_field() ?>
                        <div class="custom__card__large">
                            <div class="container">
                                <div class="row">
                                    <div class="col d-flex flex-column gap-4">
                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3>TSS (mg/L)</h3>
                                            <input id="tss" type="text" class="form-control  <?= ($validation->hasError('tss')) ? 'is-invalid' : '' ?>" name="tss" placeholder="TSS" value="<?= old('tss') ?>">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3>Debit (m3/s)</h3>
                                            <input id="debit" type="text" class="form-control  <?= ($validation->hasError('debit')) ? 'is-invalid' : '' ?>" name="debit" id="debit" placeholder="Debit" value="<?= old('debit') ?>">
                                        </div>
                                        <button class="btn btn-primary custom__btn__result" id="cek">Cek Hasil</button>

                                        <div class="d-flex justify-content-between align-items-center container__create">
                                            <h3>Beban Pencemar (Kg/Hari)</h3>
                                            <input id="hasil" class="form-control  <?= ($validation->hasError('hasil')) ? 'is-invalid' : '' ?>" name="hasil" id="hasil" placeholder="Hasil" type="text">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-column custom__container__sampling gap-2">
                                            <h2>Waktu Sampling</h2>

                                            <div class="form-group">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" name="waktu_sampling" id="waktu_sampling" class="form-control custom__date__picker">
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
                                    <button type="submit" div class="btn btn-primary custom__btn__result">Simpan Hasil
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>


<script type="text/javascript">
    $('#cek').click(function(e) {
        e.preventDefault();
        // alert('tes');
        t = $('#tss').val();
        d = $('#debit').val();
        hasil = t * d * 86.4;
        // alert(hasil);
        $("#hasil").val(hasil);
    });
    $(function() {
        $('#datepicker').datepicker();
    });
</script>





<?= $this->endSection();  ?>