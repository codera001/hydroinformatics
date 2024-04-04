<?php

include 'header.php';

if (isset($_POST['add_service'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    
    // Upload first image
    if (isset($_FILES['image']['name'])) {
        $image_name1 = $_FILES['image']['name'];
        if ($image_name1 != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name1);
            $ext = end($tmp);
            // rename image
            $image_name1 = "service_" . rand(000, 999) . '.' . $ext;
            $source_path1 = $_FILES['image']['tmp_name'];
            $destination_path1 = APPROOT . '/assets/service_image/' . $image_name1;
            // upload image 
            $upload1 = move_uploaded_file($source_path1, $destination_path1);
            // Log upload status
            if (!$upload1) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image1</div>';
                error_log("Failed to upload image1: " . $source_path1); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-service');
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
            $image_name2 = "service_" . rand(000, 999) . '.' . $ext;
            $source_path2 = $_FILES['image_two']['tmp_name'];
            $destination_path2 = APPROOT . '/assets/service_image/' . $image_name2;
            // upload image 
            $upload2 = move_uploaded_file($source_path2, $destination_path2);
            // Log upload status
            if (!$upload2) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image_two</div>';
                error_log("Failed to upload image_two: " . $source_path2); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-service');
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
            $image_name3 = "service_" . rand(000, 999) . '.' . $ext;
            $source_path3 = $_FILES['image_three']['tmp_name'];
            $destination_path3 = APPROOT . '/assets/service_image/' . $image_name3;
            // upload image 
            $upload3 = move_uploaded_file($source_path3, $destination_path3);
            // Log upload status
            if (!$upload3) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image3</div>';
                error_log("Failed to upload image3: " . $source_path3); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-service');
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
            $image_name4 = "service_" . rand(000, 999) . '.' . $ext;
            $source_path4 = $_FILES['image_four']['tmp_name'];
            $destination_path4 = APPROOT . '/assets/service_image/' . $image_name4;
            // upload image 
            $upload4 = move_uploaded_file($source_path4, $destination_path4);
            // Log upload status
            if (!$upload4) {
                // Error handling for file upload failure
                $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image4</div>';
                error_log("Failed to upload image4: " . $source_path1); // Log the source path of the failed image upload
                header('Location: ' . ADMINURL . 'add-service');
                exit;
            }
        }
    }
    
    // Insert data into the database
    if ($stmt = $conn->prepare("INSERT INTO services (title, body,image, image_two, image_three, image_four) VALUES (?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param('ssssss',$title, $body, $image_name1, $image_name2, $image_name3, $image_name4);
        if ($stmt->execute()) {
            header('Location: ' . ADMINURL . 'service');
            $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
            exit;
        } else {
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
            header('Location: ' . ADMINURL . 'add-service');
            exit;
        }
    } else {
        $_SESSION['Add'] = '<div class="alert alert-danger">Database Error</div>';
        header('Location: ' . ADMINURL . 'add-service');
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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'services' ?>">Back</a></span>
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
                            <h4 class="card-title">Add Service</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="form-group mb-3">
                                        <label for="service">Service</label>
                                        <input id="service" class="form-control" name="service" type="text" value="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="body">Content</label>
                                        <textarea style="height: 100px;" id="content" name="body" cols="30" rows="10"
                                            class="form-control editor"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="body">Benefits of Service</label>
                                        <textarea style="height: 100px;" id="content" name="benefits" cols="30" rows="10"
                                            class="form-control editor"></textarea>
                                    </div>

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


                                    <input class="btn btn-primary" type="submit" value="Add" name="add_service">
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