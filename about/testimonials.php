<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM client_review ORDER BY created_at");
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
                    <h1>Testimonials</h1>
                    <span class="title">See What Our Clients Say.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Testimonials</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <div class="row">
                <div class="testimonial-column col-lg-7 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Clients</span>
                            <h2>Our Clients Reviews </h2>
                        </div>
                      
                        <div class="testimonial-carousel owl-carousel owl-theme">
                        <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                            <!-- Testimonial Block -->
                            <div class="testimonial-block-three">
                           
                                <div class="inner">
                           
                                    <span class="icon quote-icon"></span>
                                    <div class="text"><?php echo $result['body'];?></div>
                                    <div class="name"><?php echo $result['name'];?></div>
                                    
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
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="image-box wow fadeInLeft">
                        <figure class="image"><a href="../images/resource/review.jpeg" class="lightbox-image"><img src="../images/resource/review.jpeg" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Testimonial Section Two -->

    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="outer-box clearfix">
            <!-- Testimonial Column -->
            <div class="testimonial-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Clients</span>
                        <h2>Clients Reviews</h2>
                    </div>
                    <div class="testimonial-carousel owl-carousel owl-theme">
                    <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                            <!-- Testimonial Block -->
                            <div class="testimonial-block-three">
                           
                                <div class="inner">
                           
                                    <span class="icon quote-icon"></span>
                                    <div class="text"><?php echo $result['body'];?></div>
                                    <div class="name"><?php echo $result['name'];?></div>
                                    
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

            <!-- Image Column -->
            <div class="image-column" style="background-image: url(../images/resource/review.jpeg);">
                <div class="image-box">
                    <figure class="image"><img src="../images/resource/review.jpeg" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials Section -->

    <!-- Testimonial Section Three -->
    <section class="testimonial-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Clients</span>
                <h2>Clients Reviews</h2>
            </div>

            <div class="carousel-outer">
                <div class="testimonial-carousel-two owl-carousel owl-theme">
                <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                    <!-- Testimonial Block -->
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="thumb"><img src="../webcontrol/assets/review_image/<?php echo $result['image'];?>" alt=""></div>
                            <h6 class="name"><?php echo $result['name'];?></h6>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star light"></span>
                            </div>
                            <div class="text"><?php echo $result['body'];?></div>
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
    </section>

   
    <!--End Testimonial Section Three -->

    <?php require '../inc/footer.php';?>