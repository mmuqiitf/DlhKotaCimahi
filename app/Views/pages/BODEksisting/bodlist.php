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
                <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/create'">Create BOD</button>
                <button type="button" class="btn btn-primary" onclick="document.location.href='/BODEksisting/periode1'">Input Excel</button>
            </div>

            <div class="table__wrapper">
                <table class="custom__table">
                    <thead>
                        <tr>
                            <th scope="col">No.id</th>
                            <th scope="col">Nama Sungai</th>
                            <th scope="col">Titik Pantau</th>
                            <th scope="col">Tanggal Sampling</th>
                            <th scope="col">Aksi</th>
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
                                    <td>
                                        <div class="button__action__container">
                                            <a href="/BODEksisting/update_list_bod/<?= $bodeks['ID_BOD_Eksisting'] ?>" class="btn btn-primary custom__button__edit">Update</a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete" class="btn btn-danger custom__button__delete">Delete</button>
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