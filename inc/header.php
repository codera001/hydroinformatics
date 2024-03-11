<?php require '../webcontrol/server/connection.php';

$stmt = $conn->prepare("SELECT * FROM socials");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Industrez - Industry and Factory HTML Template | Pipeline Route Survey</title>
<!-- Stylesheets -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="../images/logo-2.png" type="image/x-icon">
<link rel="icon" href="./images/logo-2.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
   

    <!-- Main Header -->
    <header class="main-header header-style-two">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="top-left">
                    <?php if ($result->num_rows > 0) {
                                foreach ($result as $result_one) { ?>
                        <ul class="social-links">
                        <li><a href="<?php echo $result_one['facebook']; ?>"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="<?php echo $result_one['twitter']; ?>"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="<?php echo $result_one['instagram']; ?>"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="<?php echo $result_one['linkedin']; ?>"><span class="fab fa-linkedin"></span></a></li>
                            <!-- <li><a href="#"><span class="fab fa-vine"></span></a></li> -->
                        </ul>
                        <?php } ?>
                            <?php } else { ?>
                            <?php } ?>
                    </div>

                    <div class="top-right">
                        <!--Search Box-->
                        <!-- <div class="dropdown search-box-outer">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-search-2"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="blog-classic.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div> -->

                        <!-- Cart Btn -->
                        <!-- <div class="cart-btn">
                            <a href="shopping-cart.html" class="theme-btn"><span class="flaticon-bag-2"></span></a>
                        </div> -->

                        <!-- Info List -->
                        <ul class="info-list">
                                <li><i class="flaticon-telephone"></i> 0703 295 3246, 0806 227 3384</li>
                                <li><i class="flaticon-envelope-of-white-paper"></i> <a
                                        href="mailto:info@example.com">hydrotherapyservicesltd@gmail.com</a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="../images/logo-2.png" alt="" title="" width="70px"></a>
                           <span class="title h5" style="color:#fa7720;font-weight:bolder;"> Hyrdroinformatics</span></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                        <li class="current "><a href="../index.php">Home</a>

                                        </li>
                                        <li class="dropdown"><a href="../about/about">About</a>
                                            <ul>
                                                <li><a href="../about/about">About</a></li>
                                                <!-- <li><a href="../about/pricing">Pricing Table</a></li> -->
                                                <!-- <li><a href="../about/team">Our Team</a></li> -->
                                                <li><a href="../about/testimonials">Testimonials</a></li>
                                                <!-- <li><a href="../about/faq">Faq's</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="../services/more-services">Services</a>
                                            <ul>
                                                <li><a href="../services/pipeline-route">Pipeline Route Survey</a></li>
                                                <li><a href="../services/geophysical">Geophysical Survey</a></li>
                                                <li><a href="../services/geo-technical">Geotechnical Engineering</a></li>
                                                <li><a href="../services/2d-seismic">2D Seismic Survey</a></li>
                                                <li><a href="../services/dredge">Dredge Monitoring and Supervision.</a></li>
                                <li><a href="rig-move"> Rig Move and Rig Positioning.</a></li>
                                                <li><a href="../services/cable-route">Cable Route Survey</a></li>
                                                <li><a href="../services/engineering-sup">Engineering Support</a></li>
                                                <li><a href="../services/rescue">Search and Rescue Operation</a></li>
                                                <li><a href="../services/environmental">Environmental Impact Assessment</a></li>
                                                <li><a href="../services/geographic">Geographic Information System</a></li>
                                                <li><a href="../services/geodetic">Topo-Geodetic Survey</a></li>
                                                <li><a href="../services/hydrographic">Hydrographic Survey</a></li>
                                                <li><a href="../services/bathy">Bathymetric Survey and Mapping</a></li>
                                                <li><a href="../services/rov-survey">ROV Survey and Positioning.</a></li>
                                                <li><a href="../services/auv-survey">AUV Survey and Positioning.</a></li>
                                                <li><a href="../services/dive-support">Dive Support.</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="../projects/projects">Projects</a>

                                        </li>
                                        <li class=""><a href="../news/blog-grid">News</a>

                                        </li>
                                        <li class=""><a href="../equipments/equip">Equipments</a>
                                            <ul>
                                                <li><a href="products.html">Our Products</a></li>
                                                <li><a href="product-single.html">Product Details</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login.html">Login</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="contact.php">Contact</a></li> -->
                                    </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <!-- Button Box -->
                            <div class="btn-box">
                                <a href="../contact/contact" class="theme-btn btn-style-one">Contact <i class="flaticon-long-arrow-pointing-to-the-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="#" title=""><img src="../images/logo-2.png" alt="" title="" width="70px">Hyrdroinformatics</a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                             <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->