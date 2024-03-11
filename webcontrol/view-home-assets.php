<?php

include 'header.php';

if (isset($_GET['view'])) {
    $id = $_GET['view'];

    $stmt = $conn->prepare("SELECT * FROM home_assets WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $results = $stmt->get_result();

}
?>

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
                <span class="btn-inner--text"> <a href="home-assets">Back</a></span>
            </button>
        </div>
    </header>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php if($results->num_rows > 0) { ?>
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Home Asset</h6>
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-bordered m-t-30 table-hover">
                                        <tbody>
                                            <?php foreach ($results as $result) { ?>
                                                <tr>
                                                    <th>Date</th>
                                                    <td>
                                                        <span class="client">
                                                            <?php echo (new DateTime($result['created_at']))->format('M d, Y h:i A') ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Image</th>
                                                    <td>
                                                        <?php if (!empty($result['image']) && $result['image'] !== './assets/home_image/') { ?>
                                                            <span class="client"><img
                                                                    src="<?php echo HOMEURL . $result['image'] ?>" width="150"
                                                                    alt="Home Asset image"></span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Video Link</th>
                                                    <td>
                                                        <span class="client">
                                                            <?php echo $result['video_link'] ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                              
                                                <tr>
                                                    <th>Actions</th>
                                                    <td>
                                                        <button type="button" class="btn btn-rounded btn-outline-success">
                                                            <span class="btn-inner--text"><a
                                                                    href="update-home-assets?update=<?php echo $result['id'] ?>">Update</a></span>
                                                        </button>
                                                        <button type="button" class="btn btn-rounded btn-outline-danger">
                                                            <span class="btn-inner--text"><a
                                                                    href="view-home-assets?delete=<?php echo $result['id'] ?>">Delete</a></span>
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
                <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM home_assets WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $_SESSION['delete'] = '<div class="alert alert-success">Deleted Successfully</div>';
        $adminUrl = ADMINURL . 'home-assets';
        echo "<script>window.location.href = '$adminUrl';</script>";
        exit;
    } else {
        $_SESSION['delete'] = '<div class="alert alert-danger">Could not delete</div>';
        $adminUrl = ADMINURL . 'view-home-assets?delete=' . $id;
        echo "<script>window.location.href = '$adminUrl';</script>";
        exit;
    }
}
?>


<?php include 'footer.php'; ?>