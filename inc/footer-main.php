<?php
$stmt = $conn->prepare("SELECT * FROM carousel_images LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();
?>
   <!--Newsleter Section-->
   <section class="newsletter-section" style="background-image: url(images/background/4.jpg);">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <!--Title Column-->
                        <div class="title-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Subscribe <br>to Our Newsletter</h2>
                            </div>
                        </div>

                        <!--Form Column-->
                        <div class="form-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!--Subscribe Form-->
                                <div class="subscribe-form">
                                    <form method="post" action="contact.php">
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Your email" required>
                                            <button type="submit" class="theme-btn btn-style-one">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Newsleter Section-->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure class="image"><a href="#"><img src="images/logo-2.png" alt="" title="" width="70px"></a>
                           <span class="title h5" style="color:#fa7720;font-weight:bolder;"> Hyrdroinformatics</span></figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">Join our community on social media and stay updated with the latest
                                    news, announcements, and insights.</div>
                                    <?php if ($result->num_rows > 0) {
                                foreach ($result as $result_one) { ?>
                                    <ul class="social-icon-colored">
                                        <li class="google"><a href="<?php echo $result_one['instagram']; ?>"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li class="facebook"><a href="<?php echo $result_one['facebook']; ?>"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="dribbble"><a href="<?php echo $result_one['linkedin']; ?>"><i
                                                    class="fab fa-linkedin"></i></a></li>
                                        <li class="twitter"><a href="<?php echo $result_one['twitter']; ?>"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                <?php } ?>
                            <?php } else { ?>
                            <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Company History</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="../contact/contact.php">Contact Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title">Contact Info</h2>
                                <div class="widget-content">
                                    <div class="text">Your feedback and inquiries are valuable to us as we strive to provide exceptional service and support.
                                    </div>
                                    <ul class="contact-list">
                                        <li>No 5 Obi Nkoro avenue Rumo Omoi, Port Harcourt Rivers State, Nigeria.</li>
                                        <li>0703 295 3246, 0806 227 3384</li>
                                        <li>hydrotherapyservicesltd@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="bottom-column col-md-6 col-sm-12">
                        <div class="copyright-text"><a href="#">Hydroinformatics Multi Services Limited</a>  &copy;
                                    <?php echo date("Y"); ?> All rights reserved.</div>
                        </div>
                        <div class="bottom-column col-md-6 col-sm-12">
                            <ul class="footer-links clearfix">
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="policy.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Scroll to top-->
                    <div class="scroll-to-top scroll-to-target" data-target="html"><span
                            class="icon flaticon-right-arrow"></span></div>
                    <!--Scroll to top-->
                </div>
            </div>

        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->



    <script src="./js/jquery.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!--Revolution Slider-->
    <script src="./plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="./plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="./plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="./js/main-slider-script.js"></script>
    <!--Revolution Slider-->
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/jquery.fancybox.js"></script>
    <script src="./js/owl.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/appear.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>