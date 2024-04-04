<?php require '../inc/header.php';

$stmt = $conn->prepare("SELECT * FROM about_assets");
$stmt->execute();
$results = $stmt->get_result();


$stmt = $conn->prepare("SELECT * FROM services LIMIT 3");
$stmt->execute();
$result2 = $stmt->get_result();
?>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="../images/logo-small.png" alt="" title=""></a>
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
                    <h1>About Us </h1>
                    <span class="title">Relentless commitment to excellence in Nigeria's energy landscape..</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <l</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <!-- <span class="title">About Company</span> -->
                            <h2>Bridging Global Practices with  Sector <br> Local Entrepreneurship in Nigeria's Energy</h2>
                        </div>
                        <div class="text text-dark">We are a fully
                                indigenous company incorporated in Nigeria with the Corporate Affairs Commission (CAC)
                                since February 2020. We wish to bridge the gap between global practice and local
                                entrepreneurship in the national energy industry through the provision of excellent
                                professional services in the Oil and Gas industries, subsea construction and navigation
                                aids in the following areas:</div>
                            <ul class="list-style-one">
                                <li>Geophysical Seabed Survey.</li>
                                <li>Bathymetric Survey.</li>
                                <li>Geotechnical Engineering.</li>
                                <li>G.I.S</li>
                                <li>Rig move and Rig positioning</li>
                                <li>Pipeline Route Survey</li>
                                <li>Dredge monitoring and supervision</li>
                                <li>Topo-Geodetic Survey</li>
                                <li>Cable Route Survey</li>
                                <li>Seismic QA/QC Services</li>
                                <li>Hydrographic Survey</li>
                                <li>Support for Engineering projects including
                                    pipeline and platform installations.</li>
                            </ul>
                        <div class="btn-box">
                            <a href="../contact/contact" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                    <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                        <div class="text-layer">A</div>
                        <figure class="image-1 wow fadeInUp"><a href="../webcontrol/assets/about_image/<?php echo $result['image'];?>" class="lightbox-image" data-fancybox="images">
                        <img src="../webcontrol/assets/about_image/<?php echo $result['image'];?>" alt="" style="height:500px;"></a></figure>
                        <figure class="image-2 wow fadeInDown"><a href="../webcontrol/assets/about_image/<?php echo $result['image_two'];?>" class="lightbox-image" data-fancybox="images"><img src="../webcontrol/assets/about_image/<?php echo $result['image_two'];?>" alt="" style="height:500px;"></a></figure>
                     
                        <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Emd About Section -->

    <!-- Funfacts And Clients -->
    <section class="fun-facts-and-clients" style="background-image: url(../images/background/5.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="funfact-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="content-box wow fadeInDown">
                            <div class="sec-title">
                                <h2>CORPORATE PHILOSOPHY</h2>
                            </div>
                            <div class="text text-dark">We are an assembly of RESEARCH-ORIENTED PROFESSIONALS passionate about bringing a touch of excellence to our deliverables to our clients. Our highly experienced personnel have over 15 years of world-class experience.
Hydroinformatics roadmap springs from the desire to MIGRATE from analogue system to a research- driven, technology-driven, and digitized system that modifies the existing method of project execution through a direct partnership with software and equipment manufacturers around the world. Our threefold 'therapeutic' approach include:
    <ul class="list-style-one">
                                <li>Corporate Vision.</li>
                                <li>Corporate Mission.</li>
                                <li>Values.</li>
     


We intend to provide timely quality technical geophysical and geomatics solutions to our clients focusing on subsurface imaging, positioning, and mapping using advanced technologies.
Our values lie in our strength and abilities to meet and exceed our clients' demands with a high level of accuracy and precision.</div>

                            <div class="bottom-box">
                                <div class="row">
                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-layer"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="320">0</span></div>
                                            <h4 class="counter-title">Projects Done</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="counter-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="icon-box"><span class="icon flaticon-trophy-1"></span></div>
                                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="25">0</span></div>
                                            <h4 class="counter-title">Awards Win</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Clients Column -->
                <div class="clients-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sponsors-outer">
                            <!--Sponsors Carousel-->
                            <ul class="sponsors-carousel owl-carousel owl-theme">
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/1.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/2.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/3.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/4.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/1.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/2.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/3.png" alt=""></a></figure></li>
                                <li class="slide-item"><figure class="image"><a href="#"><img src="../images/clients/4.png" alt=""></a></figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Funfacts And Clients -->

    <!-- Services Section -->
    <section class="services-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                <!-- <span class="title">Our Services</span> -->
                <h2>What We Do?</h2>
            </div>
            <div class="row">
            <?php if ($result2->num_rows > 0) {
                foreach ($result2 as $result_two) { ?>
                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="../services/more-services"><img
                                            src="../webcontrol/assets/service_image/<?php echo $result_two['image'] ?>"></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <span class="icon flaticon-robot-1"></span>
                                <h3><a href="./services/more-services"><?php echo $result_two['service_category'] ?></a></h3>
                                <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit sed do.</div> -->
                                <div class="link-box"><a href="../services/more-services">Read More</a></div>
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


            <!-- Btn Box -->
            <div class="btn-box text-center">
                <a href="../services/more-services" class="theme-btn btn-style-one">More Services</a>
            </div>
        </div>
    </section>
    <!--End Services Section -->


    <!-- Team Section -->
    <!-- <section class="team-section alternate">
        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2>Important Members</h2>
            </div>

            <div class="row">
            
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="team.html"><img src="../images/resource/team-1.jpg" alt=""></a></figure>
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <h5 class="name"><a href="team.html">Christine Bailly</a></h5>
                            <span class="designation">Developer</span>
                        </div>
                    </div>
                </div>

             

            </div>
        </div>
    </section> -->
    <!--End Team Section -->
    <?php require '../inc/footer.php';?>