<?php

include 'header.php';
$category_id = $_GET['update'];
function executeUpdateservice($conn, $service_category, $body,$benefits, $image_name1, $image_name2, $image_name3, $image_name4, $category_id)
{
    // Prepare the SQL statement based on which images are being updated
    $sql = "UPDATE services SET service_category = ?, body = ?, benefits = ?";
    $params = array($service_category, $body ,$benefits);

    // Check each image field and add it to the SQL statement only if it's not empty
    if (!empty($image_name1)) {
        $sql .= ", image = ?";
        $params[] = $image_name1;
    }
    if (!empty($image_name2)) {
        $sql .= ", image_two = ?";
        $params[] = $image_name2;
    }
    if (!empty($image_name3)) {
        $sql .= ", image_three = ?";
        $params[] = $image_name3;
    }
    if (!empty($image_name4)) {
        $sql .= ", image_four = ?";
        $params[] = $image_name4;
    }

    $sql .= " WHERE category_id = ?";
    $params[] = $category_id;

    if ($stmt = $conn->prepare($sql)) {
        // Dynamically bind parameters based on the number of images being updated
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
        return $stmt->execute();
    }
}


if (isset($_POST['update_service'])) {
    // Retrieve form data
    $service_category = $_POST['service_category'];
    $body = $_POST['body'];
    $benefits = $_POST['benefits'];
    // $category_id = $_POST['category_id'];

    // Initialize image variables
    $image_name1 = $image_name2 = $image_name3 = $image_name4 = "";

    // Check and upload images
    foreach (array('image', 'image_two', 'image_three', 'image_four') as $index => $image_field) {
        if (isset($_FILES[$image_field]['name'])) {
            $image_name = $_FILES[$image_field]['name'];
            if ($image_name != "") {
                // Autorename image
                $tmp = explode('.', $image_name);
                $ext = end($tmp);
                $image_name = "service_" . rand(000, 999) . '.' . $ext;
                $source_path = $_FILES[$image_field]['tmp_name'];
                $destination_path = APPROOT . '/assets/service_image/' . $image_name;
                // Upload image
                if (move_uploaded_file($source_path, $destination_path)) {
                    // Update image variable
                    ${"image_name" . ($index + 1)} = $image_name;
                } else {
                    $_SESSION['update'] = '<div class="alert alert-danger">Failed to upload ' . $image_field . '</div>';
                    header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
                    exit;
                }
            }
        }
    }

    // Perform database update
    if (executeUpdateservice($conn, $service_category, $body, $benefits, $image_name1, $image_name2, $image_name3, $image_name4, $category_id)) {
        $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
    }
    header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
    exit;
}



?>



<div class="flapt-page-content">
    <header class="top-header-area d-flex align-items-center justify-content-between">
        <div class="left-scategory_ide-content-area d-flex align-items-center">
            <div class="flapt-triggers">
                <div class="mobile-menu-open" category_id="mobileMenuOpen">
                    <i class='bx bx-grcategory_id-alt'></i>
                </div>
            </div>
        </div>


        <div class="d-flex text-right align-items-center justify-content-center">
            <button style="height:40px; width:100%;" type="button" class="btn btn-rounded btn-outline-success">
                <span class="btn-inner--text"> <a
                        href="<?php echo ADMINURL . 'view-service?view=' . $category_id; ?>">Back</a></span>
                       
            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM services WHERE category_id = ?");
                    $stmt->bind_param('s', $category_id);
                    $stmt->execute();
                    $results = $stmt->get_result();
                }

                if (!empty($results)) {
                    foreach ($results as $result) {
                        $current_image = $result['image'];
                        ?>
                        <div class="col-12 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    if(isset($_SESSION['update'])){
                                    echo $_SESSION['update'];
                                    unset($_SESSION['update']);
                                    }
                                    ?>
                                    <h4 class="card-service_category">Update service</h4>
                                    <form class="cmxform" category_id="signupForm" method="POST"  enctype="multipart/form-data">
                                        <fieldset>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo SERVICEURL . $result['image'] ?>" alt="service asset" width="100px"><br>
                                                <label for="image">Image1</label>
                                                <input category_id="image" class="form-control" name="image" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo SERVICEURL . $result['image_two'] ?>" alt="service asset" width="100px"><br>
                                                <label for="image">Image2</label>
                                                <input category_id="image" class="form-control" name="image_two" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo SERVICEURL . $result['image_three'] ?>" alt="service asset" width="100px"><br>
                                                <label for="image">Image3</label>
                                                <input category_id="image" class="form-control" name="image_three" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo SERVICEURL . $result['image_four'] ?>" alt="service asset" width="100px"><br>
                                                <label for="image">Image4</label>
                                                <input category_id="image" class="form-control" name="image_four" type="file">
                                            </div>
                                        
                                           
                                            <div class="form-group mb-3">
                                                <label for="service_category">Service category</label>
                                                <input type="text" name="service_category" class="form-control" value="<?php echo $result['service_category']; ?>">
                                              
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="body">Body</label>
                                                <textarea style="height: 100px;" category_id="content" name="body" cols="30" rows="10"
                                                    class="form-control editor"><?php echo $result['body']; ?></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="benefits">Benefits</label>
                                                <textarea style="height: 100px;" category_id="content" name="benefits" cols="30" rows="10"
                                                    class="form-control editor"><?php echo $result['benefits']; ?></textarea>
                                            </div>


                                            <input class="btn btn-primary" type="submit" value="Update" name="update_service">
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