<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM equipments ORDER BY created_at");
$stmt->execute();
$results = $stmt->get_result();?>

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
                    <h1>Equipments We Use</h1>
                    <span class="title">Discover Our Cutting-Edge Tools.</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index">Home</a></li>
                    <li>Equipments</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="shop-upper-box clearfix">
                <!-- <div class="items-label pull-left">Showing <span>1-9 of 20</span> Results</div> -->
                <!-- <div class="sort-by pull-right">
                    <select class="custom-select-box">
                        <option>Default Sorting</option>
                        <option>Price: Lowest First</option>
                        <option>Price: Highest First</option>
                        <option>Ascending</option>
                        <option>Descending</option>
                    </select>
                </div> -->
            </div>

            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-xl-12 col-lg-12 col-md-12 order-2">
                    <div class="our-shop">
                        <div class="row clearfix w-100">
                          
                            <!--Shop Item-->
                            <?php if ($results->num_rows > 0) {
                            foreach ($results as $result) { ?>
                            <div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                           
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="../webcontrol/assets/equip_image/<?php echo $result['image'];?>" alt="" />
                                        <!-- <div class="overlay-box">
                                            <ul class="option-box">
                                                <li><a href="#"><span class="flaticon-heart"></span></a></li>
                                                <li><a href="#"><span class="flaticon-bag-1"></span></a></li>
                                                <li><a href="../webcontrol/assets/equip_image/<?php echo $result['image'];?>" class="lightbox-image" data-fancybox="products"><span class="flaticon-search-1"></span></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="shop-single.html"><?php echo $result['title'];?></a></h3>
                                       
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
                         

                        <!--Styled Pagination-->
                        <!-- <ul class="styled-pagination text-center">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                        </ul>                 -->
                        <!--End Styled Pagination-->
                 
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->
    <?php require '../inc/footer.php';?>