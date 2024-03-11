<?php

include 'header.php';

if (isset($_POST['add_about'])) {
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
        }
    }
    
    // Insert data into the database
    if ($stmt = $conn->prepare("INSERT INTO about_assets (image, image_two, video_link) VALUES (?, ?, ?)")) {
        $stmt->bind_param('sss', $image_name1, $image_name2, $video_link);
        if ($stmt->execute()) {
            header('Location: ' . ADMINURL . 'about-assets');
            $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
            exit;
        } else {
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
            header('Location: ' . ADMINURL . 'add-about-assets');
            exit;
        }
    } else {
        $_SESSION['Add'] = '<div class="alert alert-danger">Database Error</div>';
        header('Location: ' . ADMINURL . 'add-about-assets');
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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'about-assets' ?>">Back</a></span>
            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <?php
                            if (isset($_SESSION['Add'])) {
                                echo $_SESSION['Add'];
                                unset($_SESSION['Add']);
                            }
                            ?>
                            <h4 class="card-title">Add asset</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>
                            
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image</label>
                                        <input id="image" class="form-control" name="image" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image two</label>
                                        <input id="image" class="form-control" name="image_two" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="video_link">Video Link</label>
                                        <input id="video_link" class="form-control" name="video_link" type="text" value="">
                                    </div>


                                    <input class="btn btn-primary" type="submit" value="Add" name="add_about">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>


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
<?php include 'footer.php'; ?>