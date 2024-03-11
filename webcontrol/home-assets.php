<?php

include 'header.php';

$stmt = $conn->prepare("SELECT * FROM home_assets ORDER BY created_at");
$stmt->execute();
$results = $stmt->get_result();
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
    </header>
    <div class="main-panel">
        <div class="content-wrapper">
            <?php
            if (isset($_SESSION['Add'])) {
                echo $_SESSION['Add'];
                unset($_SESSION['Add']);
            }
            if (isset($_SESSION['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
            ?>
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Home Assets</h6>
                            <button type="button" class="btn btn-rounded btn-outline-success float-end">
                                <span class="btn-inner--text"><a href="add-home-assets">Add</a></span>
                            </button><br><br><br>
                            <?php if ($results->num_rows > 0) { ?>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Video Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results as $result) { ?>
                                                <tr>
                                                    <td>
                                                        <span class="client">
                                                            <?php echo (new DateTime($result['created_at']))->format('M d, Y h:i A') ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <?php if (!empty($result['image']) && $result['image'] !== './assets/home_image/') { ?>
                                                            <span class="client"><img src="<?php echo HOMEURL . $result['image'] ?>" width="100" alt="home-image"></span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <span class="client">
                                                            <?php echo $result['video_link'] ?>
                                                        </span>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="px-1">
                                                                <button type="button" class="btn btn-rounded btn-outline-success">
                                                                    <span class="btn-inner--text"><a href="view-home-assets?view=<?php echo $result['id'] ?>">View</a></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-12">
                                    <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;">NO RECORD FOUND</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
