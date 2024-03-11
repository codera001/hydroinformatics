<?php require '../inc/header.php';

$stmt = $conn->prepare("SELECT * FROM services WHERE service_category = 'Cable Route Survey'");
$stmt->execute();
$results = $stmt->get_result();?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(../images/background/13.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Cable Route Survey</h1>
                    <span class="title">Navigate with Confidence</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index.php">Home</a></li>
                    <li>Cable Route Survey</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Service Detail Section -->
    <div class="service-detail-section">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <!-- Image Box -->
                        <div class="image-box">
                            <div class="image wow fadeIn">
                                <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/service_image/<?php echo $result['image'];?>" alt=""></a>
                            </div>
                        </div>

                        <!--Title Style One-->
                        <div class="content-box"> 
                            <h2><?php echo $result['service_category'];?></h2>
                            <p><?php echo $result['body'];?></p>
                            <div class="two-column row">
                                <div class="text-column ">
                                    <h4>Benefits of Service</h4>
                                    <p><?php echo $result['benefits'];?></p>
                                  
                                </div>
                               
                            </div>
                           
                         
                        </div>
                    </div><!-- Service Detail -->
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">

                        <!-- Services Cat List -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Our Services</h3></div>
                            <ul class="category-list">
                            <li class="active"><a href="pipeline-route.php">Pipeline Route Survey</a></li>
                                <li><a href="geophysical.php">Geophysical Survey.</a></li>
                                <li><a href="geo-technical.php"> Geotechnical Engineering.</a></li>
                                <li><a href="2d-seismic.php"> 2DSeismicSurvey.</a></li>
                                <li><a href="dredge.php">Dredge Monitoring and Supervision.</a></li>
                                <li><a href="rig-move.php"> Rig Move and Rig Positioning.</a></li>
                                <li><a href="cable-route.php">Cable Route Survey.</a></li>
                                <li><a href="engineering-sup.php">Engineering Support.</a></li>
                                <li><a href="rescue.php">Search and Rescue Operation.</a></li>
                                <li><a href="environmental.php">Environmental Impact Assessment(EIA).</a></li>
                                <li><a href="geographic.php">Geographic Information System(GIS).</a></li>
                                <li><a href="geodetic.php">Topo-Geodetic Survey.</a></li>
                                <li><a href="hydrographic.php">Hydrographic Survey.</a></li>
                                <li><a href="bathy.php">Bathymetric Survey and Mapping.</a></li>
                                <li><a href="rov-survey.php">ROV Survey and Positioning.</a></li>
                                <li><a href="auv-survey.php"> AUV Survey and Positioning.</a></li>
                                <li><a href="dive-support.php">Dive Support.</a></li>
                            </ul>
                        </div>

                      


                        <!-- Brochure -->
                        <div class="sidebar-widget brochure">
                            <div class="brochure-box">
                                <h6>Need Help<span>?</span></h6>
                             
                                <ul class="info-box">
                                    <li><span class="icon fa fa-envelope"></span> <a href="#">hydrotherapyservicesltd@gmail.com</a></li>
                                    <li><a href="tel:(0251)2353256"><span class="icon fa fa-phone"></span> 0703 295 3246, 0806 227 3384</a></li>
                                </ul>
                                <a href="../contact/contact" class="theme-btn btn-style-one">Contact Us</a>
                            </div>
                        </div>
                    </aside>
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
    <!-- End Service Detail Section -->

    <?php require '../inc/footer.php';?>