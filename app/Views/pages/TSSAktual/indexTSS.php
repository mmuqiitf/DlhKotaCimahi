<?= $this->extend('layout/templatePencemaran');  ?>


<?= $this->section('content'); ?>


<link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">

<main id="main" class="main">

    <!-- Header -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column custom__header">
                    <h1>Hi, Kelompok7</h1>
                    <h4>Data TSS Eksisting</h4>
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
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('pesan') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <!-- ENd Header -->


        <div class="custom__wrapper">

            <!-- small card -->
            <!-- end of small card -->



            <div class="custom__card__large">
                <div class="custom__header__card__large">
                    <button type="button" class="btn btn-primary" onclick="document.location.href='/TSSAktual/createTSS'">Create TSS</button>
                    <a href="/TSSAktual/export_excel" class="btn btn-primary">Export Excel</a>
                </div>

                <div class="table__wrapper">
                    <table class="custom__table">
                        <thead>
                            <tr>
                                <th scope="col">No.id</th>
                                <th scope="col">Nama Sungai</th>
                                <th scope="col">Titik Pantau</th>
                                <th scope="col">Tanggal Sampling</th>
                                <th scope="col">Hasil Beban Pencemar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($tss_eksisting as $post) : ?>
                                <tr>
                                    <td><?php echo $post['ID']; ?></td>
                                    <td><?php echo $post['nama_sungai']; ?></td>
                                    <td><?php echo $post['titik_pantau']; ?></td>
                                    <td><?php echo $post['waktu_sampling']; ?></td>
                                    <td><?php echo $post['beban_pencemar']; ?></td>
                                    <td>
                                        <form action="/TSSAktual/deleteTSS/<?= $post['ID']; ?>" method="POST">
                                            <?= csrf_field() ?>
                                            <div class="button__action__container">
                                                <button type="submit" class="btn btn-danger custom__button__delete">Delete</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>




        </div>
    </div>








</main>




<?= $this->endSection();  ?>