<?php

include 'header.php';

if (isset($_POST['add_client'])) {
  
    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if ($image_name != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name);
            $ext = end($tmp);

            // rename image
            $image_name = "client_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/client_image/' . $image_name;
            // upload image 
            $upload = move_uploaded_file($source_path, $destination_path);

            // Log upload status
            if ($upload) {
                $stmt = $conn->prepare("INSERT INTO clients (image) VALUES (?)");
                $stmt->bind_param('s', $image_name);

                if ($stmt->execute()) {

                    header('Location: ' . ADMINURL . 'clients');
                    $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
                    exit;
                } else {
                    $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
                    header('Location: ' . ADMINURL . 'add-client');
                    exit;
                }
            }
        } else {
            // Error handling for file upload failure
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image</div>';
            error_log("Failed to upload image: " . $source_path); // Log the source path of the failed image upload
            header('Location: ' . ADMINURL . 'add-client');
            exit;
        }
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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'clients' ?>">Back</a></span>
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
                            <h4 class="card-title">Add client member</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>
                            
                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image</label>
                                        <input id="image" class="form-control" name="image" type="file">
                                    </div>

                                    <input class="btn btn-primary" type="submit" value="Add" name="add_client">
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