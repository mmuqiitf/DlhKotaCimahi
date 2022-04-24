<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">

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
                    <form action="<?= base_url('BODEksisting/listbod'); ?>" method="post">
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
        <form action="<?= base_url('BODEksisting/listbod'); ?>" method="post">
            <div class="custom__container">
                <div class="custom__card">

                    <h3>Nama Sungai</h3>
                    <div class="select__custom__container">
                        <div class="row">
                            <div class="col-7 px-1"><select class="form-select form-control" name="keyword">
                                    <option value="" selected disabled hidden>Pilih...</option>
                                    <option value="Cisangkan">Cisangkan</option>
                                    <option value="Cibaligo">Cibaligo</option>
                                    <option value="Cibereum">Cibereum</option>
                                    <option value="Cilember">Cilember</option>
                                    <option value="Cimahi">Cimahi</option>
                                </select></div>
                            <div class="col px-1">
                                <button class="btn btn-primary" type="submit" name="submit">Cari...</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    </div>
    <div class="custom__wrapper">
        <div class="custom__card__large">
            <div class="custom__header__card__large">
                <div class="d-flex flex-row">
                    <div class="col d-flex align-items-start justify-content-end px-2">
                        <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/create'">Create BOD</button>
                    </div>
                    <div class="col px-2 d-flex align-items-start justify-content-end">
                        <?= form_open_multipart('BODEksisting/importexcel'); ?>
                        <form action="<?= base_url('BODEksisting/importexcel'); ?>" method="post">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalExcell" class="btn btn-primary custom__btn__excell">Import Excel...</button>
                            <?= $this->include('/feedback/importExcell__modal') ?>
                            <?= form_close(); ?>

                    </div>
                    
                </div>

            </div>
            <small class="invalid-feedback px-2 d-flex justify-content-end">
                <?= $validation->getError('file_excel'); ?>
            </small>

            <div class="table__wrapper">
                <table id="listbod" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Sungai</th>
                            <th>Titik Pantau</th>
                            <th>Tanggal Sampling</th>
                            <th>Debit(m3/s)</th>
                            <th>BOD (mg/L)</th>
                            <th>Beban Pencemar (Kg/hari)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= base_url('BODEksisting/delete_bod'); ?>" method="post">
                            <?php foreach ($bod as $bodeks) : ?>

                                <tr>
                                    <td><?= $bodeks['ID_BOD_Eksisting'] ?></td>
                                    <td><?= $bodeks['nama_sungai'] ?></td>
                                    <td><?= $bodeks['titik_pantau'] ?></td>
                                    <td><?= $bodeks['waktu_sampling'] ?></td>
                                    <td><?= $bodeks['Debit'] ?></td>
                                    <td><?= $bodeks['BOD'] ?></td>
                                    <td><?= $bodeks['beban_pencemar'] ?></td>
                                    <td>
                                        <div class="button__action__container">
                                            <a href="/BODEksisting/update_list_bod/<?= $bodeks['ID_BOD_Eksisting'] ?>" class="btn btn-primary custom__button__edit"><i class="bi bi-pencil-square"></i></a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete" class="btn btn-danger custom__button__delete"><i class="bi bi-trash"></i></button>
                                            <input type="hidden" name="ID_BOD_Eksisting" value="<?= $bodeks['ID_BOD_Eksisting']; ?>">
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