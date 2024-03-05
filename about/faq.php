<?php require '../inc/header.php';?>

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
                    <h1>FAQ's</h1>
                    <span class="title">Get Answers to Your Questions.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- FAQ's Section -->
    <section class="faq-section">
        <div class="auto-container">
            <div class="row">
                <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Our FAQ</span>
                            <h2>Frequently Asked Questions</h2>
                        </div>

                        <ul class="accordion-box style-two">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">What is compatitive price? <div class="icon flaticon-add-1"></div></div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</div>
                                    </div>
                                </div>
                            </li> 

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">How can i get quality product? <div class="icon flaticon-add-1"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn">Do you know about quick delivery <div class="icon flaticon-add-1"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box wow fadeInRight">
                        <figure class="image"><img src="../images/resource/faq-img.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ's Section -->

    <!--Faq Form Section-->
    <section class="faq-form-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">Find Answer</span>
                <h2>Submit Your Question</h2>
            </div>
            <!--Form Outer-->
            <div class="form-outer">
                <!--Faq Form-->
                <div class="faq-form-box">
                    <!--Contact Form-->
                    <form method="post" action="contact.html">
                        <div class="row">

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="name" value="" placeholder="Your name" required>
                            </div> 

                            <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                <input type="email" name="email" value="" placeholder="Your email" required>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <input type="text" name="subject" value="" placeholder="Subject" required>
                            </div> 
                              
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Your text"></textarea>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                            </div>          
                        </div>
                    </form>
                </div>
                <!--End Faq Form-->
            </div>
        </div>
    </section>

    <?php require '../inc/footer.php';?>