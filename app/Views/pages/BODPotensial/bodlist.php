<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">

<main id="main" class="main">

    <!-- Header -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column custom__header">
                    <h1>Hi Rafly Mumtaz</h1>
                    <h4>Data BOD Potensial Domestik</h4>
                </div>

            </div>
            <div class="col">
                <div class="container__search">
                    <form action="<?= base_url('BODPotensial/listbod'); ?>" method="post">
                        <div class="input__container input-group">
                            <i class="bi bi-search"></i>
                            <input type="text" class="form-control" name="keyword" placeholder="search">
                            <button class="btn btn-primary" type="submit" name="submit">Cari...</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ENd Header -->
        <form action="<?= base_url('BODPotensial/listbod'); ?>" method="post">
            <div class="custom__container">
                <div class="custom__card">
                    <h3>Nama Kecamatan</h3>
                    <div class="select__custom__container">
                        <div class="row">
                            <div class="col-7 px-1"><select class="form-select form-control" name="keyword">
                                    <option value="" selected disabled hidden>Pilih...</option>
                                    <option value="Cimahi Selatan">Cimahi Selatan</option>
                                    <option value="Cimahi Tengah">Cimahi Tengah</option>
                                    <option value="Cimahi Utara">Cimahi Utara</option>
                                </select></div>
                            <div class="col px-1">
                                <button class="btn btn-primary" type="submit" name="submit">Cari...</button>
                            </div>
                        </div>
                    </div>
    </div>
</form>
    <div class="custom__wrapper">
        <div class="custom__card__large">
            <div class="custom__header__card__large">
                <div class="d-flex flex-row">
                    <div class="col d-flex align-items-start justify-content-end px-2">
                        <button type="button" class="btn btn-primary" onclick="document.location.href='/BODPotensial/create'">Create BOD</button>
                    </div>
                    <div class="col px-2 d-flex align-items-start justify-content-end">
                        <?= form_open_multipart('BODPotensial/importexcel'); ?>
                        <form action="<?= base_url('BODPotensial/importexcel'); ?>" method="post">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalExcell" class="btn btn-primary custom__btn__excell">Import Excel...</button>
                            <?= $this->include('/feedback/importExcell__modal') ?>
                            <?= form_close(); ?>
                    </div>
                </div>

            </div>

            <div class="table__wrapper">
                <table class="custom__table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Kecamatan</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Jumlah Penduduk</th>
                            <th scope="col">Alfa</th>
                            <th scope="col">Faktor Emisi</th>
                            <th scope="col">Beban Pencemaran Potensial Domestik</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= base_url('BODEksisting/delete_bod'); ?>" method="post">
                            <?php foreach ($bod as $bodeks) : ?>

                                <tr>
                                    <td><?= $bodeks['ID_BOD_Potensial_Domestik'] ?></td>
                                    <td><?= $bodeks['Kecamatan'] ?></td>
                                    <td><?= $bodeks['Jumlah_Penduduk'] ?></td>
                                    <td><?= $bodeks['Rasio_Ekivalen'] ?></td>
                                    <td><?= $bodeks['Alfa'] ?></td>
                                    <td><?= $bodeks['Faktor Emisi'] ?></td>
                                    <td><?= $bodeks['BOD_Potensial_Domestik'] ?></td>
                                    <td>
                                        <div class="button__action__container">
                                            <a href="/BODPotensial/update_list_bod/<?= $bodeks['ID_BOD_Potensial_Domestik'] ?>" class="btn btn-primary custom__button__edit"><i class="bi bi-pencil-square"></i></a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete" class="btn btn-danger custom__button__delete"><i class="bi bi-trash"></i></button>
                                            <input type="hidden" name="ID_BOD_Potensial_Domestik" value="<?= $bodeks['ID_BOD_Potensial_Domestik']; ?>">
                                            <?= $this->include('/feedback/delete__modal') ?>
                                        </div>
                                    </td>
                                </tr>


                            <?php endforeach; ?>

                    </tbody>
                </table>

                <div class="pager_custom">
                    <?= $pager->links("bod_eksisting", "eksisting_pager") ?>
                </div>


            </div>

        </div>
    </div>









</main>





<?= $this->endSection();  ?>