<?php

include 'header.php';

if (!isset($_SESSION['logged_in'])) {
    header('location:index');
    exit;
}
include('server/connection.php');
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
                        <span class="btn-inner--text"> <a href="video">Back</a></span>
                    </button>
                </div>
            </header>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <?php 
                        if (isset($_GET['update'])) {
                            $update_id = $_GET['update'];
                            $stmt = $conn->prepare("SELECT * FROM youtube_videos WHERE unique_id = ?");
                            $stmt->bind_param('s', $update_id);
                            $stmt->execute();
                            $videos = $stmt->get_result();
                        }

                        if (!empty($videos)) {
                            foreach ($videos as $video) {
                        ?>
                                <div class="col-12 box-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Update video</h4>
                                            <form class="cmxform" id="signupForm" method="POST" action="video-logic.php?view=<?php echo $update_id ?>" enctype="multipart/form-data">

                                                <fieldset>
                                                    <div class="form-group mb-3">
                                                        <label for="title">Title</label>
                                                        <input id="title" class="form-control" placeholder="Video URL" name="link" type="text" value="<?php echo $video['youtube_url']; ?>" required>
                                                    </div>
                                                    <input class="btn btn-primary" type="submit" value="Update" name="update_video">
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                    <?php include 'footer.php';  ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
