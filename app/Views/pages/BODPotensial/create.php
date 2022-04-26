<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<form enctype="multipart/form-data" role="form" action="<?= base_url('BODPotensial/create_bod/'); ?>" method="post" id="BODPotensialDomestik-form">
<main id="main" class="main">

    <!-- Header -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column custom__header">
                    <h1>Hi, Rafly Mumtaz</h1>
                    <h4>Create BOD Potensial Domestik</h4>
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
                    <h3>Nama Kecamatan</h3>
                    <div class="select__custom__container">
                        <select class="form-control" name="kecamatan" type="input" class="form-select">
                            <option value="" selected disabled hidden>Pilih...</option>
                            <option>Cimahi Selatan</option>
                            <option>Cimahi Tengah</option>
                            <option>Cimahi Utara</option>
                        </select>
                    </div>
                </div>

                <!-- end of small card -->


                <!-- small card -->
                <div class="custom__container">
                    <div class="custom__card">
                        <h3>Tahun</h3>
                        <div class="select__custom__container">
                        <select class="form-control" name="Tahun" type="input" class="form-select">
                                <option value="" selected disabled hidden>Pilih...</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
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
                                        <h3 for="Jumlah_Penduduk">Jumlah Penduduk</h3>
                                        <input class="form-select form-control" name="Jumlah_Penduduk" type="input" id="Jumlah_Penduduk">
                                        
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3 for="Rasio_Ekivalen">Rasio Ekivalen</h3>
                                        <input class="form-control " name="Rasio_Ekivalen" type="input" id="Rasio_Ekivalen">
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3 for="Alfa">Alfa</h3>
                                        <input class="form-control " name="Alfa" type="input" id="Alfa">
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3 for="Faktor_Emisi_Penduduk">Faktor Emisi Penduduk</h3>
                                        <input class="form-control " name="Faktor_Emisi_Penduduk" type="input" id="Faktor_Emisi_Penduduk">
                                    </div>

                                    <div class="btn btn-primary custom__btn__result" onclick="doMath();">Cek Hasil</div>


                                    <div class="d-flex justify-content-between align-items-center container__create">
                                        <h3>Beban Pencemar Sektor Potensial</h3>
                                        <input class="form-control" name="beban_pencemar" id="beban_pencemar" type="input" readonly>
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
        var my_input1 = document.getElementById('Jumlah_Penduduk').value;
        var my_input2 = document.getElementById('Rasio_Ekivalen').value;
        var my_input3 = document.getElementById('Alfa').value;
        var my_input4 = document.getElementById('Faktor_Emisi_Penduduk').value;
        

        // Add them together and display
        var sum = (parseFloat(my_input1) * parseFloat(my_input2)* parseFloat(my_input3)* parseFloat(my_input4))/1000;
        document.getElementById('BOD_Potensial_Domestik').value=sum;
    }
</script>


<?= $this->endSection();  ?>