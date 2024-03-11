<?php require '../inc/header.php';
$id = $_GET['view'];
$stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
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
                    <h1>Blog Post Details</h1>
                    <span class="title">Delve into the intricacies of our latest blog post, crafted with care and insight.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Blog Post Detailss</li>
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
                <?php if ($results->num_rows > 0) {
                                foreach ($results as $result) { 
                                    ?>
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail?view=<?php echo $result['id'] ?>">
                        <!-- News BLock -->
                        <div class="news-block-four">
                    
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="../webcontrol/assets/news_image/<?php echo $result['image'];?>" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="date"><span><?php echo (new DateTime($result['created_at']))->format('M d, Y h:i A') ?></div>
                                    <h3><?php echo $result['title'];?>.</h3><br><br>
                                    <p><?php echo $result['body'];?></p>
                                   
                                </div>
                            </div>
                                    
                          
                        </div>

                   

                     
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Services Cat List -->
                     

                  
                        
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
                <?php } ?>
                                <?php } else { ?>
                                    <div class="col-md-12">
                                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                                    </div>
                                <?php } ?>  
            </div>
        </div>
    </div>
    <!-- End Sidebar Page container -->

    <?php require '../inc/footer.php';?>
    