<?php require './inc/navbar.php';
$stmt = $conn->prepare("SELECT * FROM carousel_images LIMIT 1");
$stmt->execute();
$result1 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM carousel_images LIMIT 1 OFFSET 1");
$stmt->execute();
$result2 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM carousel_images LIMIT 1 OFFSET 2");
$stmt->execute();
$result3 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM home_assets");
$stmt->execute();
$result4 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM services LIMIT 3");
$stmt->execute();
$result5 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM projects ORDER BY created_at LIMIT 1");
$stmt->execute();
$result6 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM projects ORDER BY created_at LIMIT 2 OFFSET 1");
$stmt->execute();
$result7 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM clients ");
$stmt->execute();
$result8 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM client_review ORDER BY created_at");
$stmt->execute();
$result9 = $stmt->get_result();

$stmt = $conn->prepare("SELECT * FROM news ORDER BY created_at LIMIT 3");
$stmt->execute();
$result10 = $stmt->get_result();



?>
<style>
    .defaultimg {
        opacity: 0.5 !important;

    }

    .bg-primary-dark {
        background-color: rgba(8, 37, 103, .5) !important;
 
    }

 
</style>

<!--Main Slider-->
<section class="main-slider style-two ">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_three_wrapper" data-source="gallery">
        <div class="rev_slider bg-primary fullwidthabanner" id="rev_slider_three" data-version="5.4.1">
            <?php

            ?>
            <ul>
                <!-- Slide 1 -->
                <?php if ($result1->num_rows > 0) {
                    foreach ($result1 as $result_one) { ?>
                        <li data-transition="parallaxvertical " data-description="Slide Description" data-easein="default"
                            data-easeout="default" data-fsmasterspeed="50" data-fsslotamount="7" data-fstransition="fade"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1681" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
                            data-saveperformance="off" data-slotamount="default"
                            data-thumb="./webcontrol/assets/carousel_image/<?php echo $result_one['image'] ?>">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="./webcontrol/assets/carousel_image/<?php echo $result_one['image'] ?>
                                ">

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[200, 200, 200, 200]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['800','800','800','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-65','-105','-85','-85']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h2>
                                    <?php echo $result_one['title'] ?>

                                </h2><br><br>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['650','650','700','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['40','10','10','10']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="text text-dark">
                                    <?php echo $result_one['body'] ?>

                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme " data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-whitespace="normal" data-width="['800', '800','800','450']"
                                data-hoffset="['15','15','15','15']" data-voffset="['120','100','100','100']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="link-box clearfix">
                                    <a href="projects/projects" class="theme-btn btn-style-one">Our Projects</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>


                <?php if ($result2->num_rows > 0) {
                    foreach ($result2 as $result_two) { ?>
                        <!-- Slide 2 -->
                        <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default"
                            data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1682" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
                            data-saveperformance="off" data-slotamount="default"
                            data-thumb="./webcontrol/assets/carousel_image/<?php echo $result_two['image'] ?>">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="./webcontrol/assets/carousel_image/<?php echo $result_two['image'] ?>
                                ">

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[200, 200, 200, 200]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['800', '800','800','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-65','-105','-85','-85']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h2>
                                    <?php echo $result_two['title'] ?>
                                </h2>
                            </div>

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['650','650','700','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['40','10','10','10']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="text text-light">
                                    <?php echo $result_two['body'] ?>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-whitespace="normal" data-width="['800', '800','800','450']"
                                data-hoffset="['15','15','15','15']" data-voffset="['120','100','100','100']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="link-box clearfix">
                                    <a href="projects/projects" class="theme-btn btn-style-one">Our Projects</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>

                <?php if ($result3->num_rows > 0) {
                    foreach ($result3 as $result_three) { ?>
                        <!-- Slide 3 -->
                        <li data-transition="parallaxvertical" data-description="Slide Description" data-easein="default"
                            data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1683" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
                            data-saveperformance="off" data-slotamount="default"
                            data-thumb="./webcontrol/assets/carousel_image/<?php echo $result_three['image'] ?>">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                                data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="./webcontrol/assets/carousel_image/<?php echo $result_three['image'] ?>
                                ">

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[200, 200, 200, 200]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['1000', '1000','1000','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-65','-105','-85','-85']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <h2>
                                    <?php echo $result_three['title'] ?>
                                </h2>

                            </div>

                            <div class="tp-caption" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-width="['650','650','700','450']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['40','10','10','10']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="text text-light">
                                    <?php echo $result_three['body'] ?>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" data-paddingbottom="[100, 100, 100, 100]"
                                data-paddingleft="[100, 100, 100, 100]" data-paddingright="[100, 100, 100, 100]"
                                data-paddingtop="[150, 150, 150, 150]" data-responsive_offset="on" data-type="text"
                                data-height="none" data-whitespace="normal" data-width="['800', '800','800','450']"
                                data-hoffset="['15','15','15','15']" data-voffset="['120','100','100','100']"
                                data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                                data-textalign="['top','top','top','top']"
                                data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                                <div class="link-box clearfix">
                                    <a href="projects/projects" class="theme-btn btn-style-one">Our Projects</a>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>


            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!-- Links Bar -->
<section class="links-bar">
    <div class="auto-container">
        <ul class="services-links clearfix">
            <li><a href="./services/pipeline-route">Pipeline Route Survey</a></li>
            <li><a href="./services/geodetic">Topo-Geodetic Survey</a></li>
            <li><a href="./services/cable-route">Cable Route Survey</a></li>
            <li><a href="./services/dive-support">Dive Support</a></li>
        </ul>
    </div>
</section>
<!--End Links Bar -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <!-- <span class="title">About Company</span> -->
                        <h2>WHO WE ARE</h2>
                    </div>
                    <div class="text text-dark"><strong class="text-dark-80 h1">We </strong> are a fully
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
                        <a href="./contact/contact.php" class="theme-btn btn-style-one">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <?php if ($result4->num_rows > 0) {
                        foreach ($result4 as $result_four) { ?>
                            <figure class="image-1"><a href="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>"
                                    class="lightbox-image" data-fancybox="images"><img
                                        src="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>" alt=""></a>
                            </figure>

                            <figure class="image-2"><a href="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>"
                                    data-fancybox="images"><img
                                        src="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>" alt=""></a>
                            </figure>
                            <div class="video-link wow zoomIn"><a href="<?php echo $result_four['video_link']; ?>" class="link"
                                    data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a></div>

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

<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Services</span>
            <h2>What We Do?</h2>
        </div>
        <div class="row">
            <?php if ($result5->num_rows > 0) {
                foreach ($result5 as $result_five) { ?>
                    <!-- Service Block -->
                    <div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="project-planning.html"><img
                                            src="./webcontrol/assets/service_image/<?php echo $result_five['image'] ?>"></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <span class="icon flaticon-robot-1"></span>
                                <h3><a href="./services/more-services"><?php echo $result_five['service_category'] ?></a></h3>
                                <!-- <div class="text">Lorem ipsum dolor sit amet, consectetur adip isicing elit sed do.</div> -->
                                <div class="link-box"><a href="./services/more-services">Read More</a></div>
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
            <a href="services/more-services" class="theme-btn btn-style-one">More Services</a>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section" style="background-image: url(./images/background/1.jpg);">
    <div class="auto-container">
        <div class="row">
            <!--Column-->
            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="icon-box"><span class="icon flaticon-layer"></span></div>
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="230">0</span></div>
                <h4 class="counter-title">Projects Done</h4>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="icon-box"><span class="icon flaticon-group"></span></div>
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="789">0</span></div>
                <h4 class="counter-title">Satisfied Clients</h4>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="icon-box"><span class="icon flaticon-cup"></span></div>
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="580">0</span></div>
                <h4 class="counter-title">Cup of Coffe</h4>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="icon-box"><span class="icon flaticon-trophy"></span></div>
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="139">0</span></div>
                <h4 class="counter-title">Awards Win</h4>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Project Section -->
<section class="project-section">
    <div class="auto-container">
        <div class="row">
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Section Title -->
                <div class="sec-title">
                    <!-- <span class="title">Our Works</span> -->
                    <h2>Our Projects <br>You Love</h2>
                    <div class="text">At <span style="color:#df6512">Hydroinformatics Multi Services Limited,</span> we
                        pour our hearts into every project we undertake. From conception to completion, our team is
                        dedicated to bringing your vision to life with creativity, precision, and unwavering commitment.

                        Each project we undertake is a testament to our relentless pursuit of excellence. We understand
                        that every detail matters, and we spare no effort in delivering results that exceed
                        expectations.</div>
                </div>

                <!-- Project Block -->
                <div class="project-block wow fadeInUp">
                    <div class="image-box">
                    <?php if ($result6->num_rows > 0) {
                foreach ($result6 as $result_six) { ?>
                        <figure class="image"><img src="./webcontrol/assets/project_image/<?php echo $result_six['image'];?>" alt="project-image"></figure>
                        <div class="overlay-box">
                            <div class="inner">
                                <h3><a href="project-detail.html"><?php echo $result_six['title'];?></a>
                                </h3>
                                <div class="text"><?php echo $result_six['body'];?></div>
                                <div class="link-box"><a href="#">Read More</a></div>
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

                <!-- Projects Link -->
                <div class="project-link-box wow fadeInUp">
                    <div class="inner">
                        <a href="projects/projects">See More Projects <i class="icon flaticon-next-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Project Block -->
                <?php if ($result7->num_rows > 0) {
                foreach ($result7 as $result_seven) { ?>
                <div class="project-block wow fadeInUp">
                    <div class="image-box">
                        <figure class="image"><img src="./webcontrol/assets/project_image/<?php echo $result_seven['image'];?>" alt="project-image"></figure>
                        <div class="overlay-box">
                            <div class="inner">
                                <h3><a href="project-detail.html"><?php echo $result_seven['title'];?></a>
                                </h3>
                                <div class="text"><?php echo $result_seven['body'];?></div>
                                <div class="link-box"><a href="project-detail.html">Read More</a></div>
                            </div>
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
    </div>
</section>
<!--End Project Section -->

<!-- Call To Action -->
<section class="call-to-action" style="background-image: url(./images/background/2.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h2>Provide You The Highest Quality Work <br>That Meets Your Expectation.</h2>
            <div class="link-box"><a href="./contact/contact.php" class="theme-btn btn-style-one">Contact Us</a></div>
        </div>
    </div>
</section>
<!--End Call To Action -->

<!-- Why Choose Us -->
<section class="why-choose-us">
    <div class="layer-images">
        <figure class="layer-1"></figure>
        <figure class="layer-2"></figure>
    </div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <!-- <span class="title">Our Services</span> -->
            <h2>Why Choose Us</h2>
        </div>

        <div class="row">
            <div class="feature-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="text-box">
                        <div class="text">At <span style="color:#df6512">Hydroinformatics Multi Services Limited,</span>
                            we understand that making the right choice for your business is crucial. Here's why we
                            believe we're the perfect fit for your needs.</div>
                    </div>

                    <!-- Feaute Block -->
                    <div class="feature-block">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-wallet"></span></div>
                            <h3><a href="#">Competitive Price</a></h3>
                            <div class="text">We offer competitive pricing without compromising on quality. Our
                                commitment to efficiency and optimization allows us to provide cost-effective solutions
                                that deliver exceptional value to our clients.</div>
                        </div>
                    </div>

                    <!-- Feaute Block -->
                    <div class="feature-block">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-rule-1"></span></div>
                            <h3><a href="#">Quality Product</a></h3>
                            <div class="text">Quality is at the core of everything we do. We adhere to stringent quality
                                standards throughout our processes to ensure that every product we deliver meets or
                                exceeds your expectations.</div>
                        </div>
                    </div>

                    <!-- Feaute Block -->
                    <div class="feature-block">
                        <div class="inner">
                            <div class="icon-box"><span class="flaticon-trolley"></span></div>
                            <h3><a href="#">Quick Delivery</a></h3>
                            <div class="text">We understand the importance of timely delivery. With our streamlined
                                processes and efficient logistics, we ensure that your orders are processed promptly and
                                delivered to you with speed and precision.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion Column -->
            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- <div class="text-box">
                                <div class="text">Excepteur sint occaecat cupidatat proident sunt culpa officia desernt
                                    mollit anim est laborum sed perspiciatis.</div>
                            </div> -->

                    <ul class="accordion-box">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">Inventory management system <div class="icon flaticon-add-1">
                                </div>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Our advanced inventory management system enables us to maintain
                                        optimal stock levels, minimize lead times, and ensure on-time delivery of your
                                        orders.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Our Work Flow Success <div class="icon flaticon-add-1"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our workflow is designed for success. From initial consultation to
                                        project completion, we follow a structured approach that ensures clear
                                        communication, timely updates, and seamless collaboration. We keep you informed
                                        at every step of the way, so you can trust that your project is in good hands.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Scheduled Updates <div class="icon flaticon-add-1"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We believe in keeping you informed and involved throughout the
                                        process. Our scheduled updates ensure that you are always up-to-date on the
                                        progress of your project. Whether it's milestones achieved, challenges
                                        encountered, or next steps planned, you'll have full visibility into our work.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose Us -->

<!-- Testimonials and Clients -->
<section class="testimonials-and-clients">
    <div class="auto-container">
        <div class="row">
            <!-- Testimonial Column -->
            <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Clients</span>
                        <h2>Our Clients Reviews</h2>
                    </div>

                    <div class="testimonial-carousel owl-carousel owl-theme">
                    <?php if ($result9->num_rows > 0) {
                        foreach ($result9 as $result_nine) { ?>
                        <!-- Testimonial BLock -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                          
                                <span class="icon flaticon-right-quotation-sign"></span>
                                <div class="text"><?php echo $result_nine['body'];?></div>
                                <div class="info-box">
                                    <div class="thumb"><img src="./webcontrol/assets/review_image/<?php echo $result_nine['image'];?>" alt="" ></div>
                                    <h4 class="name"><?php echo $result_nine['name'];?></h4>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star light"></span>
                                    </div>
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
            </div>

            <!-- Clients Column -->
            <div class="clients-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-box wow fadeInRight">
                        <figure class="image"><img src="./images/resource/review.jpeg" alt="" width="700px"></figure>
                    </div>

                    <div class="sponsors-outer">
                        <!--Sponsors Carousel-->
                        <ul class="sponsors-carousel owl-carousel owl-theme">
                        <?php if ($result8->num_rows > 0) {
                foreach ($result8 as $result_eight) { ?>
                            <li class="slide-item">
                                <figure class="image"><a href="#"><img src="./webcontrol/assets/client_image/<?php echo $result_eight['image'];?>" alt=""></a>
                                </figure>
                            </li>
                            <?php } ?>
             <?php } else { ?>
                <div class="col-md-12">
                    <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                </div>
             <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial and Clients -->

<!--Fluid Section One-->
<section class="fluid-section-one">
    <div class="outer-container clearfix">
        <!-- Form Column -->
        <div class="form-column clearfix">
            <div class="map-layer"></div>
            <div class="inner-column">
                <div class="sec-title light">
                    <h2>Contact Us Today</h2>
                </div>
                <div class="contact-form">
                    <form action="./webcontrol/handle-contact" method="post" id="contact_form">
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
                                <textarea name="message" placeholder="Your Massage"></textarea>
                            </div>
                            <?php $code = rand(12345, 67890) ?>
                                    <div class="row mb-5">
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
                                <button class="theme-btn btn-style-one" type="submit" name="Submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Image Column-->
        <div class="image-column" style="background-image:url(./images/resource/contactImg.png);">
            <figure class="image-box"><img src="./images/resource/contactImg.png" alt=""></figure>
        </div>
    </div>
</section>
<!-- End Fluid Section -->

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="clearfix">
            <div class="sec-title">
                <span class="title">Our Blog</span>
                <h2>Latest From Blog</h2>
            </div>

            <div class="btn-box">
                <a href="blog-grid.html" class="theme-btn btn-style-one">Load More</a>
            </div>
        </div>

        <div class="row">
            <!-- News BLock -->
            <?php if ($result10->num_rows > 0) {
                foreach ($result10 as $result_ten) { ?>
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a href="./news/blog-grid"><img src="./webcontrol/assets/news_image/<?php echo $result_ten['image'];?>"
                                    alt="" height="200px"></a></figure>
                    </div>
                    <div class="lower-content">
                        <span class="date"><?php echo $result_ten['created_at'];?></span>
                        <h3><a href="./news/blog-grid"><?php echo $result_ten['title'];?></a></h3>
                        <div class="text">
                        <?php
                    $body_without_tags = strip_tags($result_ten['body']); // Remove HTML tags from the body
    $words = str_word_count($body_without_tags, 1); // Count words in the stripped body
    $limitedWords = implode(' ', array_slice($words, 0, 20)); // Get the first 20 words
    echo $limitedWords;
?>

                     </div>
                        <div class="link-box"><a href="./news/blog-grid">Read More</a></div>
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
<!--End News Section -->

<?php require './inc/footer-main.php'; ?>