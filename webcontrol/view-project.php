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

    $stmt = $conn->prepare("SELECT * FROM projects WHERE unique_id = ?");
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
                                <span class="btn-inner--text"> <a href="add-project">More</a></span>
                            </button>
                        </div>


                    </header>

                    <div class="main-panel">
                        <div class="content-wrapper">


                            <div class="row">


                                <div class="col-12 box-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Project</h6>
                                            <div class="table-responsive">
                                                <table class="table table-nowrap">
                                                    <thead>
                                                        <tr>
                                                        <th>Image</th>
                                                            <th>Project Name</th>
                                                            <th>Client</th>
                                                            <th>Category</th>
                                                            
                                                            <th>Project Location</th>
                                                            <th>Year Built</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                        <td>
                                                                <?php if (!empty($row['image']  && $row['image'] !== './assets/images/')) { ?>
                                                                    <span class="client"><img src="<?php echo $row['image'] ?>" width="150" alt="image1"></span>
                                                                <?php } ?>


                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['name']  ?></span>
                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['client']  ?></span>
                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['category']  ?></span>
                                                            </td>

                                                         
                                                            <td>
                                                                <span class="client"><?php echo $row['location']  ?></span>
                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $row['year']  ?></span>
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