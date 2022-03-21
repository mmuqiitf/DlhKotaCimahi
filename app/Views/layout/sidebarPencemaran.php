<?php $uri = current_url(true);

$segment = $uri->getSegment(2);  

?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <!-- logo -->
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="/assets/img/logo.png" alt="">
        </a>
    </div>
    <!-- end logo -->

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php  if($segment == 'BODPotensial') {echo " ";} else {echo "collapsed";}   ?> " href="/BODPotensial">
                <i class="bx bxs-dashboard"></i><span>Pencemaran Potensial</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?php  if($segment == 'BODEksisting') {echo " ";} else {echo "collapsed";}   ?> " href="/BODEksisting">
                <i class="bx bx-line-chart"></i><span>Pencemaran Eksisting</span>
            </a>
        </li><!-- End Beban Pencemaran Nav -->


        <li class="nav-item">
            <div class="logout">
                <a class="nav-link collapsed" href="/Home/Auth">
                    <i class="bx bx-log-out"></i>
                    <span>Kembali</span>
                </a>
            </div>



        </li><!-- End Logout Page Nav -->
</aside>

<!-- End Sidebar-->