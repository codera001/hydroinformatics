<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM socials");
$stmt->execute();
$result = $stmt->get_result();?>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="../index.php" title=""><img src="../images/logo-small.png" alt="" title=""></a>
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
                    <h1>Contact Us</h1>
                    <span class="title">Thank you for reaching out to us</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="sec-title">
                <!-- <span class="title">Contact Info</span> -->
                <h2>We’re Happy to Discuss Your Project <br>and Answer any Question</h2>
            </div>

            <div class="row">
                <!-- Info Box -->
                <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <h6>Address</h6>
                        <div class="text">No 5 Obi Nkoro avenue Rumo Omoi, <br>Port Harcourt Rivers State, Nigeria.</div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <h6>Email</h6>
                        <div class="text">
                            <span>hydrotherapyservicesltd@gmail.com</span>
                            <!-- <a href="mailto:support@industrez.com">support@industrez.com</a> -->
                        </div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                        <h6>Phone</h6>
                        <div class="text">
                            <span class>0703 295 3246</span><br>
                            <span>0806 227 3384</span>
                        </div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner">
                    <?php if ($result->num_rows > 0) {
                                foreach ($result as $result_one) { ?>
                        <ul class="social-icon-two">
                            <li><a href="<?php echo $result_one['instagram']; ?>"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="<?php echo $result_one['facebook']; ?>"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="<?php echo $result_one['linkedin']; ?>"><span class="fab fa-linkedin"></span></a></li>
                            <li><a href="<?php echo $result_one['twitter']; ?>"><span class="fab fa-twitter"></span></a></li>
                        </ul>
                        <?php } ?>
                            <?php } else { ?>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Section -->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="outer-box">
                <div class="sec-title">
                    <!-- <span class="title">Send Message</span> -->
                    <h2>Drop Us A Message</h2>
                </div>

                <div class="contact-form dark">
                    <form method="post" action="../webcontrol/handle-contact" id="contact-form">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="username" placeholder="Your name" required="">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="phone" placeholder="Phone" required="">
                            </div>

                           

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Your Massage" required=""></textarea>
                            </div>
                            <?php $code = rand(12345, 67890) ?>
                                    <div class="row">
                                        <div class="col-md-5">Anti-spam code <span class="text-danger">
                                                <?php echo $code ?>
                                            </span> </div>
                                        <div class="col-md-7 ">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <input type="hidden" name="hide" value="<?php echo $code ?>">
                                                <input type="text" placeholder="Enter code here" name="code"
                                                    width="100px">
                                            </div>
                                        </div>
                                    </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button class="theme-btn btn-style-one" type="submit" name="Submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="map-outer">
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="../images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Map Section -->

   <?php require '../inc/footer.php';?>