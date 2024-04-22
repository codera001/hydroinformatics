<?php

include 'header.php';

if (isset($_POST['add_hse'])) {
    
    // Upload first image
    if (isset($_FILES['image']['name'])) {
        $image_name1 = $_FILES['image']['name'];
        if ($image_name1 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name1);
            $ext = end($tmp);
            // rename image
            $image_name1 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path1 = $_FILES['image']['tmp_name'];
            $destination_path1 = APPROOT . '/assets/hse_image/' . $image_name1;
            // upload image 
            $upload1 = move_uploaded_file($source_path1, $destination_path1);
            // Log upload status
            if (!$upload1) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image1</div>';
                error_log("Failed to upload image1: " . $source_path1); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
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
            $image_name2 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path2 = $_FILES['image_two']['tmp_name'];
            $destination_path2 = APPROOT . '/assets/hse_image/' . $image_name2;
            // upload image 
            $upload2 = move_uploaded_file($source_path2, $destination_path2);
            // Log upload status
            if (!$upload2) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image_two</div>';
                error_log("Failed to upload image_two: " . $source_path2); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }
// upload third image
    if (isset($_FILES['image_three']['name'])) {
        $image_name3 = $_FILES['image_three']['name'];
        if ($image_name3 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name3);
            $ext = end($tmp);
            // rename image
            $image_name3 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path3 = $_FILES['image_three']['tmp_name'];
            $destination_path3 = APPROOT . '/assets/hse_image/' . $image_name3;
            // upload image 
            $upload3 = move_uploaded_file($source_path3, $destination_path3);
            // Log upload status
            if (!$upload3) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image3</div>';
                error_log("Failed to upload image3: " . $source_path3); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }

    // image four
    if (isset($_FILES['image_four']['name'])) {
        $image_name4 = $_FILES['image_four']['name'];
        if ($image_name4 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name4);
            $ext = end($tmp);
            // rename image
            $image_name4 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path4 = $_FILES['image_four']['tmp_name'];
            $destination_path4 = APPROOT . '/assets/hse_image/' . $image_name4;
            // upload image 
            $upload4 = move_uploaded_file($source_path4, $destination_path4);
            // Log upload status
            if (!$upload4) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image4</div>';
                error_log("Failed to upload image4: " . $source_path4); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }
    // image five
    if (isset($_FILES['image_five']['name'])) {
        $image_name5 = $_FILES['image_five']['name'];
        if ($image_name5 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name5);
            $ext = end($tmp);
            // rename image
            $image_name5 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path5 = $_FILES['image_five']['tmp_name'];
            $destination_path5 = APPROOT . '/assets/hse_image/' . $image_name5;
            // upload image 
            $upload5 = move_uploaded_file($source_path5, $destination_path5);
            // Log upload status
            if (!$upload5) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image4</div>';
                error_log("Failed to upload image4: " . $source_path5); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }
    // image six
    if (isset($_FILES['image_six']['name'])) {
        $image_name6 = $_FILES['image_six']['name'];
        if ($image_name6 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name6);
            $ext = end($tmp);
            // rename image
            $image_name6 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path6 = $_FILES['image_six']['tmp_name'];
            $destination_path6 = APPROOT . '/assets/hse_image/' . $image_name6;
            // upload image 
            $upload6 = move_uploaded_file($source_path6, $destination_path6);
            // Log upload status
            if (!$upload6) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image4</div>';
                error_log("Failed to upload image4: " . $source_path6); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }
    // image seven
    if (isset($_FILES['image_seven']['name'])) {
        $image_name7 = $_FILES['image_seven']['name'];
        if ($image_name7 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name7);
            $ext = end($tmp);
            // rename image
            $image_name7 = "hse_" . rand(000, 999) . '.' . $ext;
            $source_path7 = $_FILES['image_seven']['tmp_name'];
            $destination_path7 = APPROOT . '/assets/hse_image/' . $image_name7;
            // upload image 
            $upload7 = move_uploaded_file($source_path7, $destination_path7);
            // Log upload status
            if (!$upload7) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image4</div>';
                error_log("Failed to upload image4: " . $source_path7); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-hse');
                exit;
            }
        }
    }
    
    // Insert data into the database
    if ($stmt = $conn->prepare("INSERT INTO hse (image, image_two, image_three, image_four, image_five, image_six, image_seven) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param('sssssss', $image_name1, $image_name2, $image_name3, $image_name4, $image_name5, $image_name6, $image_name7);
        if ($stmt->execute()) {
            header('Location: ' . ADMINURL . 'hse');
            $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
            exit;
        } else {
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add: ' . htmlspecialchars($conn->error) . '</div>';
            header('Location: ' . ADMINURL . 'add-hse');
            exit;
        }
    } else {
        $_SESSION['Add'] = '<div class="alert alert-danger">Database Error: ' . htmlspecialchars($conn->error) . '</div>';
        header('Location: ' . ADMINURL . 'add-hse');
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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'hse' ?>">Back</a></span>
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
                            <h4 class="card-title">Add hse</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>

                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image</label>
                                        <input id="image" class="form-control" name="image" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image2</label>
                                        <input id="image" class="form-control" name="image_two" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image3</label>
                                        <input id="image" class="form-control" name="image_three" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image4</label>
                                        <input id="image" class="form-control" name="image_four" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image5</label>
                                        <input id="image" class="form-control" name="image_five" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image6</label>
                                        <input id="image" class="form-control" name="image_six" type="file">
                                    </div>
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image7</label>
                                        <input id="image" class="form-control" name="image_seven" type="file">
                                    </div>


                                    <input class="btn btn-primary" type="submit" value="Add" name="add_hse">
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