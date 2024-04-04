<?php require '../inc/header.php';
$id = $_GET['view'];
$stmt = $conn->prepare("SELECT * FROM projects WHERE id = ? ORDER BY created_at");
$stmt->bind_param('s', $id);
$stmt->execute(); 
$results = $stmt->get_result();
?>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
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
                    <h1>Project Details</h1>
                    <span class="title">Explore our portfolio.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Portfolio Details-->
    <section class="project-details-section">
        <div class="project-detail">
            <div class="auto-container">
                <div class="image-box">
                    <div class="row clearfix">
                    <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                        <div class="image col-lg-12 col-md-12 col-sm-12 wow fadeIn">
                            <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/project_image/<?php echo $result['image'];?>" alt=""></a>
                        </div>

                        <!-- <div class="image col-lg-4 col-md-4 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                            <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/project_image/<?php echo $result['image'];?>" alt=""></a>
                        </div> -->
                        <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
                    </div>
                </div>
                
                <!--Title Style One-->
                <div class="content-box"> 
                    <div class="row">
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2><?php echo $result['title'];?></h2>
                                <p><?php echo $result['body'];?></p>
                                <br>
                              
                                
                            </div>
                        </div>
                        
                   
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Portfolio Details-->
    <?php require '../inc/footer.php';?>