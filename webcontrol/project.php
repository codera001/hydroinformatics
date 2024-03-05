<?php
session_start();
include 'header.php';

if (!isset($_SESSION['logged_in'])) {
    header('location:index');
    exit;
}
include('server/connection.php');

$stmt = $conn->prepare("SELECT * FROM projects ORDER BY id");
$stmt->execute();
$results = $stmt->get_result();

?>

<body>

    <div class="flapt-page-wrapper">

        <?php include 'sidebar.php'; ?>

        <div class="flapt-page-content">

            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <div class="flapt-triggers">
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                    </div>
                </div>

                <div class="d-flex text-right align-items-center justify-content-center">
                    <button style="height:40px; width:100%;" type="button" class="btn btn-rounded btn-outline-success">
                        <span class="btn-inner--text"> <a href="add-project">New</a></span>
                    </button>
                </div>

            </header>

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <?php if ($results->num_rows > 0) { ?>
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Project</h6>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Project name</th>
                                                        <th>Year built</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($results as $result) { ?>
                                                        <tr>
                                                            <td>
                                                                <?php if (!empty($result['image']  && $result['image'] !== './assets/images/')) { ?>
                                                                    <span class="client"><img src="<?php echo $result['image'] ?>" width="100" alt="image2"></span>
                                                                <?php } ?>


                                                            </td>

                                                            <td>
                                                                <span class="client"><?php echo $result['name'] ?></span>
                                                            </td>
                                                            <td>
                                                                <span class="client"><?php echo $result['year'] ?></span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="px-1">
                                                                        <button type="button" class="btn btn-rounded btn-outline-success">
                                                                            <span class="btn-inner--text"><a href="view-project?view=<?php echo $result['unique_id'] ?>">View</a></span>
                                                                        </button>
                                                                    </div>

                                                                    <button type="button" class="btn btn-rounded btn-outline-success">
                                                                        <span class="btn-inner--text"><a href="update-project?update=<?php echo $result['unique_id'] ?>">Update</a></span>
                                                                    </button>
                                                                    <div class="actions ml-3">
                                                                        <a href="delete-project?delete=<?php  echo $result['unique_id'] ?>" class="action-item mr-2" data-bs-toggle="tooltip" title="" data-original-title="Archive">
                                                                            <i class="fa fa-archive"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-12">
                                <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                            </div>
                        <?php } ?>
                    </div>

                    <?php include 'footer.php';  ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>