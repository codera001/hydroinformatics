<?php
session_start();
include 'header.php';

if (isset($_POST['add_service'])) {
    $service = $_POST['service'];
    $body = $_POST['body'];
    $category_id = rand(000, 999);

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if ($image_name != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name);
            $ext = end($tmp);

            // rename image
            $image_name = "Service_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/service_image/' . $image_name;
            // upload image 
            $upload = move_uploaded_file($source_path, $destination_path);

            // Log upload status
            if ($upload) {
                $stmt = $conn->prepare("INSERT INTO services (category_id, service_category, body, image) VALUES (?, ?, ?, ?)");
                $stmt->bind_param('ssss', $category_id, $service, $body, $image_name);

                if ($stmt->execute()) {

                    header('Location: ' . ADMINURL . 'services');
                    $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
                    exit;
                } else {
                    $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
                    header('Location: ' . ADMINURL . 'add-service');
                    exit;
                }
            }
        } else {
            // Error handling for file upload failure
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image</div>';
            error_log("Failed to upload image: " . $source_path); // Log the source path of the failed image upload
            header('Location: ' . ADMINURL . 'add-service');
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
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image</label>
                                        <input id="image" class="form-control" name="image" type="file">
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