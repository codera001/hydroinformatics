<?php
session_start();
include 'header.php';


?>


<body>

    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="flapt-page-wrapper">
    <?php include 'sidebar.php'; ?>
     


        <div class="flapt-page-content">

            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <div class="flapt-triggers">
                        <!-- <div class="menu-collasped" id="menuCollasped">
                            <i class='bx bx-grid-alt'></i>
                        </div> -->
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                    </div>
                </div>


            </header>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!-- <div class="row">
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="dynamic-history">Dynamic History</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                     <a href="leadership">Leadership & Board-members</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="management">Management Team</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> -->
                        <!-- <div class="row">
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="corporate">Corperative Philosophy</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="exploration">Exploration</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                     <a href="production">Production</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                        <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="project">Project</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="asset">Asset</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                     <a href="environment">Environment</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                     

                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                 <a href="twitter">Twitter</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                   <a href="facebook">Facebook</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="google">Google</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                 <a href="news">News/Blogs</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                 <a href="linkedin">Linkedin</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                   <a href="video">Youtube-Videos</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            






                            <!-- <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="energy">Energy</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                 <a href="career">Career</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">

                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                   <a href="change-password">Change Password</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">

                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-xl">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="font-14 text-uppercase">
                                                    <a href="logout">Logout</a>
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <span class="font-24 text-dark mr-2">

                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress h-5">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="icon">
                                                    <img src="img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                    <?php include 'footer.php';  ?>