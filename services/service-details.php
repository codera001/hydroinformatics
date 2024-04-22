
<?php require '../inc/header.php';
$id = $_GET['view'];
$stmt = $conn->prepare("SELECT * FROM services WHERE id = ?");
$stmt->bind_param('s', $id);
$stmt->execute(); 
$results = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM services");
$stmt->execute(); 
$result1 = $stmt->get_result();



?>
    <?php if ($results->num_rows > 0) {
                        foreach ($results as $result) { ?>  

    <!--Page Title-->
    <section class="page-title" style="background-image:url(../images/background/13.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1><?php echo $result['service_category'];?></h1>
                    <!-- <span class="title">This seismic survey utilizes advanced technology to provide detailed imaging of subsurface structures</span> -->
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="../index.php">Home</a></li>
                    <li><?php echo $result['service_category'];?></li>
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
              
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <!-- Image Box -->
                        <div class="image-box">
                            <div class="image wow fadeIn">
                                <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/service_image/<?php echo $result['image'];?>" alt="" style="height:500px"></a>
                            </div>
                        </div>

                        <!--Title Style One-->
                        <div class="content-box"> 
                            <h2><?php echo $result['service_category'];?></h2>
                            <p><?php echo $result['body'];?>.</p>
                          
                          
                         
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
                            <?php if ($result1->num_rows > 0) {
                        foreach ($result1 as $result_one) { ?> 
                                <li class="active"><a href="service-details?view=<?php echo $result_one['id'] ?>"><?php echo $result_one['service_category'];?></a></li>
                                <?php } ?>
                <?php } else { ?>
                  
                <?php } ?>
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

                <div class=" mb-5">
                                <div class="text-column">
                                    <h2 class="text-dark mt-0 mb-4">Benefits of Service</h2>
                                    <p><?php echo $result['benefits'];?></p>
                                   
                                </div>
                                
                            </div>
                <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>

                <div class="row">
                        <div class=" col-md-4 image-box">
                        <div class="image wow fadeIn">
                                <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/service_image/<?php echo $result['image_two'];?>" alt="" style="height:400px; width:100%;"></a>
                            </div>
                           
                        </div>
                        <div class="col-md-4 image-box">
                        <div class="image wow fadeIn">
                                <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/service_image/<?php echo $result['image_three'];?>" alt="" style="height:400px; width:100%;"></a>
                            </div>
                           
                        </div>
                        <div class=" col-md-4 image-box">
                        <div class="image wow fadeIn">
                                <a href="#" class="lightbox-image" data-fancybox="gallery"><img src="../webcontrol/assets/service_image/<?php echo $result['image_four'];?>" alt="" style="height:400px; width:100%;"></a>
                            </div>
                           
                        </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->

    <?php require '../inc/footer.php';?>