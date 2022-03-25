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
                        <select class="form-select">
                            <option>Sungai Cisangkan</option>
                            <option>Sungai Cibaligo</option>
                            <option>Sungai Cibereum</option>
                            <option>Sungai Cilember</option>
                            <option>Sungai Cimahi</option>

                        </select>
                    </div>
                </div>

                <!-- end of small card -->



                <div class="custom__card__large">
                    <div class="custom__header__card__large">
                        <button type="button" class="btn btn-primary"
                            onclick="document.location.href='/BODEksisting/create'">Create BOD</button>
                        <button type="button" class="btn btn-primary">Input Excel</button>
                    </div>

                    <div class="table__wrapper">
                        <table class="custom__table">
                            <thead>
                                <tr>
                                    <th scope="col">No.id</th>
                                    <th scope="col">Titik Pantau</th>
                                    <th scope="col">Tanggal Sampling</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody><form action="<?= base_url('BODEksisting/delete_bod'); ?>" method="post">
                                <?php foreach ($bod as $bodeks) : ?>
                                    
                                <tr>
                                    <td><?= $bodeks['ID_BOD_Eksisting']?></td>
                                    <td><?= $bodeks['titik_pantau']?></td>
                                    <td><?= $bodeks['waktu_sampling']?></td>
                                    <td>
                                        <div class="button__action__container">
                                            <a href="/BODEksisting/update_list_bod/<?= $bodeks['ID_BOD_Eksisting'] ?>"
                                                class="btn btn-primary custom__button__edit">Update</a>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModaldelete"
                                                class="btn btn-danger custom__button__delete">Delete</button>
                                                <input type="hidden" name="ID_BOD_Eksisting" value="<?= $bodeks['ID_BOD_Eksisting']; ?>">
                                            <?= $this->include('/feedback/delete__modal') ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            








</main>





<?= $this->endSection();  ?>