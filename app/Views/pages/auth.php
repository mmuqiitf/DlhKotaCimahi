<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/custom_css/pages/auth.css" rel="stylesheet">
    <link href="/assets/css/respon.css" rel="stylesheet">
    <?= $this->include('/source/css') ?>
</head>

<body>


    <div class="overflow-hidden vw-100 vh-100">
        <div class="row">
            <?= $this->include('/auth/BackgroundAuth') ?>
            <?= $this->include('/auth/FormAuth') ?>
        </div>




    </div>





    <?= $this->include('/source/js') ?>
</body>

</html>