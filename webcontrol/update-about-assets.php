<?php
include 'header.php';
$id = $_GET['update'];
function executeUpdateAbout($conn, $image_name1, $image_name2, $video_link, $id)
{
    if ($stmt = $conn->prepare("UPDATE about_assets SET image = ?, image_two = ?, video_link = ? WHERE id = ?")) {
        $stmt->bind_param('ssss', $image_name1, $image_name2, $video_link, $id);
        return $stmt->execute();
    }
}

if (isset($_POST['update_about'])) {

    $stmt = $conn->prepare("SELECT image, image_two FROM about_assets WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $current_image = $row['image'];
    $current_image2 = $row['image_two'];

    $video_link = $_POST['video_link'];

    // Upload first image
    if (isset($_FILES['image']['name'])) {
        $image_name1 = $_FILES['image']['name'];
        if ($image_name1 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name1);
            $ext = end($tmp);
            // rename image
            $image_name1 = "about_" . rand(000, 999) . '.' . $ext;
            $source_path1 = $_FILES['image']['tmp_name'];
            $destination_path1 = APPROOT . '/assets/about_image/' . $image_name1;
            // upload image 
            $upload1 = move_uploaded_file($source_path1, $destination_path1);
            // Log upload status
            if (!$upload1) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image1</div>';
                error_log("Failed to upload image1: " . $source_path1); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-about-assets');
                exit;
            }
        } else {
            $image_name1 = $current_image1;
            header('Location: ' . ADMINURL . 'update-about-assets?update=' . $id);
            exit;
        }
    }

    // Upload second image
    if (isset($_FILES['image_two']['name'])) {
        $image_name2 = $_FILES['image_two']['name'];
        if ($image_name2 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name2);
            $ext = end($tmp);
            // rename image
            $image_name2 = "about_" . rand(000, 999) . '.' . $ext;
            $source_path2 = $_FILES['image_two']['tmp_name'];
            $destination_path2 = APPROOT . '/assets/about_image/' . $image_name2;
            // upload image 
            $upload2 = move_uploaded_file($source_path2, $destination_path2);
            // Log upload status
            if (!$upload2) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image_two</div>';
                error_log("Failed to upload image_two: " . $source_path2); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-about-assets');
                exit;
            }
        } else {
            $image_name2 = $current_image2;
            header('Location: ' . ADMINURL . 'update-about-assets?update=' . $id);
            exit;
        }
    }

    // Insert data into the database
    if (executeUpdateAbout($conn, $image_name1, $image_name2, $video_link, $id)) {
        header('Location: ' . ADMINURL . 'update-about-assets?update=' . $id);
        $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
        exit;
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
        header('Location: ' . ADMINURL . 'update-about-assets?update=' . $id);
        exit;
    }
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
                <span class="btn-inner--text"> <a
                        href="<?php echo ADMINURL . 'view-about-assets?view=' . $id; ?>">Back</a></span>

            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM about_assets WHERE id = ?");
                    $stmt->bind_param('s', $id);
                    $stmt->execute();
                    $results = $stmt->get_result();
                }

                if (!empty($results)) {
                    foreach ($results as $result) {
                        $current_image1 = $result['image'];
                        $current_image2 = $result['image_two'];
                        ?>
                        <div class="col-12 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['update'])) {
                                        echo $_SESSION['update'];
                                        unset($_SESSION['update']);
                                    }
                                    ?>
                                    <h4 class="card-title">Update Service</h4>
                                    <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group mb-3">
                                                <img src="<?php echo ABOUTURL . $result['image'] ?>" alt="about asset"
                                                    width="100px"><br>
                                                <label for="image"></label>
                                                <input id="image" class="form-control" name="image" type="file">
                                            </div>

                                            <div class="form-group mb-3">
                                                <img src="<?php echo ABOUTURL . $result['image_two'] ?>" alt="about asset"
                                                    width="100px"><br>
                                                <label for="image"></label>
                                                <input id="image" class="form-control" name="image_two" type="file">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="body">Video Link</label>
                                                <textarea style="height: 100px;" id="content" name="video_link" cols="30"
                                                    rows="10"
                                                    class="form-control editor"><?php echo $result['video_link']; ?></textarea>
                                            </div>




                                            <input class="btn btn-primary" type="submit" value="Update" name="update_about">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</div>
</div>

<!-- ============================================================== -->
<script src="./ckeditor/ckeditor.js"></script>
<script>
    const editors = document.querySelectorAll('.editor');
    editors.forEach(editorElement => {
        ClassicEditor
            .create(editorElement, {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo'],


            })
            .then(editor => {
                window.editor = editor;

            })
            .catch(err => {
                console.error(err.stack);
            });
    });
</script>
</body>

</html>