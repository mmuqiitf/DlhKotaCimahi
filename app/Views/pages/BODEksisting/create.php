<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<form enctype="multipart/form-data" role="form" action="<?= base_url('BODEksisting/create_bod/'); ?>" method="post" id="BODEksisting-form">
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
                            <option>Cisangkan</option>
                            <option>Cibaligo</option>
                            <option>Cibereum</option>
                            <option>Cilember</option>
                            <option>Cimahi</option>
                        </select>
                    </div>
                </div>

                <!-- end of small card -->


                <!-- small card -->
                <div class="custom__container">
                    <div class="custom__card">
                        <h3>Titik Pantau</h3>
                        <div class="select__custom__container">
                        <select class="form-control" name="titik_pantau" type="input" class="form-select">
                                <option>Hulu</option>
                                <option>Tengah</option>
                                <option>Hilir</option>
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
                                        <input class="form-select form-control" name="BOD" type="input" id="BOD">
                                        
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3 for="Debit">Debit (m3/s)</h3>
                                        <input class="form-control " name="Debit" type="input" id="Debit">
                                        
                                    </div>

                                    <div class="btn btn-primary custom__btn__result" onclick="doMath();">Cek Hasil</div>


                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3>Beban Pencemar (Kg/Hari)</h3>
                                        <input class="form-control" name="beban_pencemar" id="beban_pencemar" type="input" readonly>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-flex flex-column custom__container__sampling gap-2">
                                        <h2>Waktu Sampling</h2>
                                        
                                            <div class="form-group">
                                                    <div class="input-group date" id="datepicker">
                                                        <input  name="waktu_sampling" type="input" class="custom__date__picker form-control">
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
            
                                <button type="button" class="btn btn-primary custom__btn__result" data-bs-toggle="modal" data-bs-target="#exampleModal">Simpan hasil</button>
                                <?= $this->include('/feedback/success__modal') ?>
                            </div>
                        </div>
                    </div>










</main></form>


<script type="text/javascript">
    $(function () {
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });

    function doMath()
    {
        // Capture the entered values of two input boxes
        var my_input1 = document.getElementById('BOD').value;
        var my_input2 = document.getElementById('Debit').value;

        // Add them together and display
        var sum = (parseFloat(my_input1) * parseFloat(my_input2))*86.4;
        document.getElementById('beban_pencemar').value=sum;
    }
</script>





<?= $this->endSection();  ?>