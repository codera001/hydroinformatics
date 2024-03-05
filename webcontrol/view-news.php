<?php
session_start();
include 'header.php';

if (!isset($_SESSION['logged_in'])) {
    header('location:index');
    exit;
}
include('server/connection.php');

if (isset($_GET['view'])) {
    $view = $_GET['view'];

    $stmt = $conn->prepare("SELECT * FROM news WHERE unique_id = ?");
    $stmt->bind_param('s', $view);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();




?>




        <body>



            <div class="flapt-page-wrapper">

                <?php include 'sidebar.php'; ?>


                <div class="flapt-page-content">

                    <header class="top-header-area d-flex align-items-center justify-content-between">
                        <div class="left-side-content-area d-flex align-items-center">
                            <div class="flapt-triggers">
                                <!-- <div class="menu-collasped" id="menuCollasped">
                            <i class='bx bx-grid-alt'></i>
                        </div> -->
                                <div class="mobile-menu-open" id="mobileMenuOpen">
                                    <i class='bx bx-grid-alt'></i>
                                </div>


                            </div>
                        </div>

                        <div class="d-flex text-right align-items-center justify-content-center">
                            <button style="height:40px; width:100%;" type="button" class="btn btn-rounded btn-outline-success">
                                <span class="btn-inner--text"> <a href="add-news">More</a></span>
                            </button>
                        </div>


                    </header>

                    <div class="main-panel">
                        <div class="content-wrapper">


                            <div class="row">


                                <div class="col-12 box-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">News</h6>
                                            <div class="table-responsive">
                                                <table class="table table-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Image1</th>
                                                            <th>Image2</th>
                                                            <th>Image3</th>
                                                            <th>Title</th>
                                                            <th>Content</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                        <td>
                                                                <?php if (!empty($row['img1']  && $row['img1'] !== './assets/images/')) { ?>
                                                                    <span class="client"><img src="<?php echo $row['img1'] ?>" width="150" alt="image1"></span>
                                                                <?php } ?>


                                                            </td>

                                                            <td>
                                                                <?php if (!empty($row['img2']  && $row['img2'] !== './assets/images/')) { ?>
                                                                    <span class="client"><img src="<?php echo $row['img2'] ?>" width="150" alt="image2"></span>
                                                                <?php } ?>


                                                            </td>

                                                            <td>
                                                                <?php if (!empty($row['img3']  && $row['img3'] !== './assets/images/')) { ?>
                                                                    <span class="client"><img src="<?php echo $row['img3'] ?>" width="150" alt="image3"></span>
                                                                <?php } ?>


                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['title']  ?></span>
                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['content']  ?></span>
                                                            </td>

                                                            <td>
                                                            <span class="client"><?php echo (new DateTime($row['created_at']))->format('M d, Y h:i A') ?></span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    <?php }
            } ?>

                    <?php include 'footer.php';  ?>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>