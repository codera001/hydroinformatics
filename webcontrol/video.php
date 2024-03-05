<?php
session_start();
include 'header.php';

if (!isset($_SESSION['logged_in'])) {
    header('location:index');
    exit;
}
include('server/connection.php');

$stmt = $conn->prepare("SELECT * FROM youtube_videos");
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
                        <span class="btn-inner--text"> <a href="dashboard">Back</a></span>
                    </button>
                </div>

            </header>

            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                            <div class="col-12 box-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Youtube videos</h6>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Link</th>
                                                        <th>Video-URL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($results as $result) { ?>
                                                        <tr>
                                                            <td>
                                                            <span class="client"> <?php echo $result['title']  ?> </span>
                                                            </td>

                                                            <td>
                                                                <span class="client"><a href="<?php  echo $result['youtube_url'] ?>" target="_blank" ><?php  echo $result['youtube_url'] ?></a></span>
                                                            </td>
                                                            <td>

                                                            <button type="button" class="btn btn-rounded btn-outline-success">
                                                                        <span class="btn-inner--text"><a href="update-video?update=<?php echo $result['unique_id'] ?>">Update</a></span>
                                                                    </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <?php include 'footer.php';  ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>