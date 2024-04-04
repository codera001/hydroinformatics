<?php require '../inc/header.php';
$stmt = $conn->prepare("SELECT * FROM projects ORDER BY created_at");
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
                <h1>Projects</h1>
                <span class="title">Explore our portfolio.</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="../index">Home</a></li>
                <li>Projects Five</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Projects Section -->
<section class="projects-page-section">
    <!--Sortable Masonry-->
    <div class="sortable-masonry">
        <div class="auto-container">
            <!--Filter-->
            <div class="filters">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter=".all">PROJECTS</li>

                </ul>
            </div>

            <div class="items-container row">
            <?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
                <!-- Portfolio Block -->
                <div class="project-block-five all masonry-item power-energy material col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="../webcontrol/assets/project_image/<?php echo $result['image'];?>" alt="" style="height:300px"></figure>
                            <div class="overlay-box">
                                <div class="inner">
                                    <div class="icon-box"><a href="../webcontrol/assets/project_image/<?php echo $result['image'];?>" class="lightbox-image"
                                            data-fancybox="gallery"><span class="icon flaticon-plus"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h4><a href="project-detail?view=<?php echo $result['id'] ?>"><?php echo $result['title'];?></a></h4>
                            <div class="text"><?php
                    $body_without_tags = strip_tags($result['body']); 
    $words = str_word_count($body_without_tags, 1);
    $limitedWords = implode(' ', array_slice($words, 0, 12));
    echo $limitedWords;
?>
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
    </div>
</section>
<!-- End Projects Section -->
<?php require '../inc/footer.php'; ?>