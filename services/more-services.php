<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM services");
$stmt->execute();
$results = $stmt->get_result();
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
                    <h1>Services</h1>
                    <span class="title">Explore Our Range of Expertise.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

  <!-- Services Section -->
  <section class="services-section alternate">
    <div class="auto-container">
        <div class="sec-title text-center">
            <!-- <span class="title">Our Services</span> -->
            <h2>What We Do?</h2>
        </div>
        <div class="row">
            <!-- Service Block -->
            <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
            <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">                   
                    <div class="image-box">
                        <figure class="image"><a href="service-details?view=<?php echo $result['id'] ?>"><img src="../webcontrol/assets/service_image/<?php echo $result['image'];?>" alt=""></a></figure>
                    </div>
                    <div class="lower-content">
                        <span class="icon flaticon-robot-1"></span>
                        <h3><a href="service-details?view=<?php echo $result['id'] ?>"><?php echo $result['service_category'];?></a></h3>
                        <div class="text">          <?php
                    $body_without_tags = strip_tags($result['body']); // Remove HTML tags from the body
    $words = str_word_count($body_without_tags, 1); // Count words in the stripped body
    $limitedWords = implode(' ', array_slice($words, 0, 12)); // Get the first 20 words
    echo $limitedWords;
?>
</div>
                        <!-- <div class="link-box"><a href="pipeline-route">Read More</a></div> -->
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
</section>
 

<?php require '../inc/footer.php';?>