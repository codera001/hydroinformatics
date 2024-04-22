<?php require '../inc/header.php';

$stmt = $conn->prepare("SELECT * FROM hse");
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
                <h1>Health, Safety and Environment</h1>
                <span class="title">Prioritizing health, safety, and environmental sustainability is not just a duty but
                    a commitment to safeguarding lives and the planet for generations to come</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="../index">Home</a></li>
                <li>Health, Safety and Environment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Pricing Section -->
<?php if ($results->num_rows > 0) {
                    foreach ($results as $result) { ?>
<section class="pricing-section bg-light">
    <div class="auto-container ">
        <div class="sec-title text-center">
            <span class="title">HEALTH, SAFETY AND ENVIRONMENT</span>
            <h2>CORPORATE SAFETY POLICY STATEMENT</h2>
        </div>



        <div class="main row">
          <div class="col-md-8">
                <p class="text-dark">HYDROINFORMATICS MULTI SERVICES LIMITED recognizes the
                    importance of the health and safety environment in which she works. Human
                    resources is our best asset, therefore it is the policy of HSL to safeguard
                    all persons, property and environment connected with our operations.<br>

                    As a MARINE company, we comply with all codes and statutory requirements and
                    adopt any plan that will enhance the business of safety in our organization
                    without violating the relevant government legislation.<br>

                    In other to realize the above policy statement, HYDROINFORMATICS MULTI
                    SERVICES LIMITED will do everything at all times to ensure that all the
                    person(s) engaged in her activities are medically fit, must be PPE compliant
                    and ensure that safety is taken into account from pre mobilization stage of
                    any project to its completion.<br>

                    We will undertake frequent inspection of office and project locations
                    ashore, organize audit of equipment and give the findings and
                    recommendations urgent and adequate attention needed to create safe work
                    environment for our personnel. Engage in and support all programs that will
                    improve the awareness of our staff. Protect and preserve the environment to
                    the best of our ability.
                </p>

            </div>

             <div class="col-md-4">
             <img src="../webcontrol/assets/hse_image/<?php echo $result['image'];?>" alt="" class="rounded-circle">
             </div>

        </div>

        <div class="sec-title row my-5">
            <h3 class="text-dark text-center mb-5 h4 text-uppercase">Health, Safety and Environment Activities</h3>
           <div class="col-md-8">
            <img src="../webcontrol/assets/hse_image/<?php echo $result['image_two'];?>" alt="" style="max-height:100vh;" class="rounded">
           </div>
           <div class="col-md-4" >
               <div>
                <img src="../webcontrol/assets/hse_image/<?php echo $result['image_three'];?>" alt="" style="max-height:35vh; width:500px;" class="rounded">
               </div><br>
               <div>
                <img src="../webcontrol/assets/hse_image/<?php echo $result['image_four'];?>" alt=""style="max-height:35vh; width:500px;" class="rounded">
               </div>
           </div>
        </div>
        <div class="sec-title row my-5">
          
               <div class="col-md-4" >
                <img src="../webcontrol/assets/hse_image/<?php echo $result['image_five'];?>" alt="" style="max-height:35vh; width:500px;" class="rounded">
               </div><br>
               <div class="col-md-4" >
                <img src="../webcontrol/assets/hse_image/<?php echo $result['image_six'];?>" alt=""style="max-height:35vh; width:500px;" class="rounded">
               </div>
               <div class="col-md-4" >
                <img src="../webcontrol/assets/hse_image/<?php echo $result['image_seven'];?>" alt=""style="max-height:35vh; width:500px;" class="rounded">
               </div>
           
        </div>


    </div>
</section>
<?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
<?php require '../inc/footer.php'; ?>