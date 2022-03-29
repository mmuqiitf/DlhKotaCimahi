<div class="col-5 m-0 p-0 d-flex flex-row justify-content-center align-items-center border">
    <div class="container  d-flex flex-column gap-2">
        <h2 class="fw-bold">Selamat Datang</h2>
        <p>Admin Dinas DLH</p>

        <form method="post" action="/Auth/login">


            <?php if(session()->getFlashdata('msg')):?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text h-100" id="basic-addon1"> <i class="bx bxs-user "></i></span>
                </div>
                <input type="email" class="form-control"
                     name="email" placeholder="Email">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text h-100" id="basic-addon1"> <i class="bi bi-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" 
                     name="password">
            </div>




            <div class="d-grid gap-2">
                    <button class="custon__button__auth" type="submit">Login</button>
            </div>

        </form>

    </div>
</div>