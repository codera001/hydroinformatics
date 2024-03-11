<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM news ORDER BY created_at LIMIT 10");
$stmt->execute(); 
$results = $stmt->get_result();

?>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="../index" title=""><img src="../images/logo-small.png" alt="" title=""></a>
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(../images/background/13.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Blog Grid View</h1>
                    <span class="title">Discover Insights and Perspectives.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Blog Grid View</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-grid">
                        <div class="row">
                        <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { 
                        ?>
                   
                            <!-- News Block Three -->
                            <div class="news-block-four col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-detail?view=<?php echo $result['id'] ?>"><img src="../webcontrol/assets/news_image/<?php echo $result['image'];?>" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="date"><span>   <?php echo (new DateTime($result['created_at']))->format('M d, Y h:i A') ?></div>
                                        <h5><a href="blog-detail?view=<?php echo $result['id'] ?>"><?php echo $result['title'];?></a></h5>
                                      
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
                        </div>

                     
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                      

                    <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Our Services</h3></div>
                            <ul class="category-list">
                            <li class="active"><a href="../services/pipeline-route.php">Pipeline Route Survey</a></li>
                                <li><a href="../services/geophysical.php">Geophysical Survey.</a></li>
                                <li><a href="../services/geo-technical.php"> Geotechnical Engineering.</a></li>
                                <li><a href="../services/2d-seismic.php"> 2DSeismicSurvey.</a></li>
                                <li><a href="../services/dredge.php">Dredge Monitoring and Supervision.</a></li>
                                <li><a href="../services/rig-move.php"> Rig Move and Rig Positioning.</a></li>
                                <li><a href="../services/cable-route.php">Cable Route Survey.</a></li>
                                <li><a href="../services/engineering-sup.php">Engineering Support.</a></li>
                                <li><a href="../services/rescue.php">Search and Rescue Operation.</a></li>
                                <li><a href="../services/environmental.php">Environmental Impact Assessment(EIA).</a></li>
                                <li><a href="../services/geographic.php">Geographic Information System(GIS).</a></li>
                                <li><a href="../services/geodetic.php">Topo-Geodetic Survey.</a></li>
                                <li><a href="../services/.php">Hydrographic Survey.</a></li>
                                <li><a href="../services/bathy.php">Bathymetric Survey and Mapping.</a></li>
                                <li><a href="../services/rov-survey.php">ROV Survey and Positioning.</a></li>
                                <li><a href="../services/auv-survey.php"> AUV Survey and Positioning.</a></li>
                                <li><a href="../services/dive-support.php">Dive Support.</a></li>
                            </ul>
                        </div>

                        <!-- Post Widget -->
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM news ORDER BY created_at LIMIT 3");
                        $stmt->execute(); 
                        $results = $stmt->get_result();
                        ?>
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h3>Latest Article</h3></div>

                            <div class="widget-content">
                                        <?php if ($results->num_rows > 0) {
                                foreach ($results as $result) { 
                                    ?>
                                <article class="post">
                                    <div class="post-inner">
                                        <figure class="post-thumb"><a href="blog-detail?view=<?php echo $result['id'] ?>"><img src="../webcontrol/assets/news_image/<?php echo $result['image'];?>" alt=""></a></figure>
                                        <div class="post-info"> <?php echo (new DateTime($result['created_at']))->format('M d, Y h:i A') ?></div>
                                        <div class="text"><a href="blog-detail?view=<?php echo $result['id'] ?>.html"><?php echo $result['title'];?> </a></div>
                                    </div>
                                </article>
                                
                                            
                                            <?php } ?>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <!-- Brochure -->
                        <div class="sidebar-widget brochure">
                            <div class="brochure-box">
                                <h6>Need Help<span>?</span></h6>
                             
                                <ul class="info-box">
                                    <li><span class="icon fa fa-envelope"></span> <a href="#">hydrotherapyservicesltd@gmail.com</a></li>
                                    <li><a href="#"><span class="icon fa fa-phone"></span> 0703 295 3246, 0806 227 3384</a></li>
                                </ul>
                                <a href="../contact/contact" class="theme-btn btn-style-one">Contact Us</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page container -->

    <?php require '../inc/footer.php';?>