<?php

include 'header.php';
$id = $_GET['update'];

function executeUpdatehse($conn, $image_name1, $image_name2, $image_name3, $image_name4, $image_name5, $image_name6, $image_name7, $id)
{
    $sql = "UPDATE hse SET ";
    $params = array();

    if (!empty($image_name1)) {
        $sql .= "image = ?, ";
        $params[] = $image_name1;
    }
    if (!empty($image_name2)) {
        $sql .= "image_two = ?, ";
        $params[] = $image_name2;
    }
    if (!empty($image_name3)) {
        $sql .= "image_three = ?, ";
        $params[] = $image_name3;
    }
    if (!empty($image_name4)) {
        $sql .= "image_four = ?, ";
        $params[] = $image_name4;
    }
    if (!empty($image_name5)) {
        $sql .= "image_five = ?, ";
        $params[] = $image_name5;
    }
    if (!empty($image_name6)) {
        $sql .= "image_six = ?, ";
        $params[] = $image_name6;
    }
    if (!empty($image_name7)) {
        $sql .= "image_seven = ?, ";
        $params[] = $image_name7;
    }

    $sql = rtrim($sql, ", "); // Remove the trailing comma and space

    $sql .= " WHERE id = ?";
    $params[] = $id;

    if ($stmt = $conn->prepare($sql)) {
        // Dynamically bind parameters based on the number of images being updated
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
        return $stmt->execute();
    }
}

if (isset($_POST['update_hse'])) {
    // Retrieve form data
    // $id = $_POST['id'];

    // Initialize image variables
    $image_name1 = $image_name2 = $image_name3 = $image_name4 = $image_name5 = $image_name6 = $image_name7 = "";

    // Check and upload images
    foreach (array('image', 'image_two', 'image_three', 'image_four', 'image_five', 'image_six', 'image_seven') as $index => $image_field) {
        if (isset($_FILES[$image_field]['name'])) {
            $image_name = $_FILES[$image_field]['name'];
            if ($image_name != "") {
                // Autorename image
                $tmp = explode('.', $image_name);
                $ext = end($tmp);
                $image_name = "hse_" . rand(000, 999) . '.' . $ext;
                $source_path = $_FILES[$image_field]['tmp_name'];
                $destination_path = APPROOT . '/assets/hse_image/' . $image_name;
                // Upload image
                if (move_uploaded_file($source_path, $destination_path)) {
                    // Update image variable
                    ${"image_name" . ($index + 1)} = $image_name;
                } else {
                    $_SESSION['update'] = '<div class="alert alert-danger">Failed to upload ' . $image_field . '</div>';
                    header('Location: ' . ADMINURL . 'update-hse?update=' . $id);
                    exit;
                }
            }
        }
    }

    // Perform database update
    if (executeUpdatehse($conn, $image_name1, $image_name2, $image_name3, $image_name4,$image_name5, $image_name6, $image_name7, $id)) {
        $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
    }
    header('Location: ' . ADMINURL . 'update-hse?update=' . $id);
    exit;
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
                        href="<?php echo ADMINURL . 'view-hse?view=' . $id; ?>">Back</a></span>
                       
            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM hse WHERE id = ?");
                    $stmt->bind_param('s', $id);
                    $stmt->execute();
                    $results = $stmt->get_result();
                }

                if (!empty($results)) {
                    foreach ($results as $result) {
                        // $current_image = $result['image'];
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
                                    <h4 class="card-hse_category">Update hse</h4>
                                    <form class="cmxform" id="signupForm" method="POST"  enctype="multipart/form-data">
                                        <fieldset>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image1</label>
                                                <input id="image" class="form-control" name="image" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_two'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image2</label>
                                                <input id="image" class="form-control" name="image_two" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_three'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image3</label>
                                                <input id="image" class="form-control" name="image_three" type="file">
                                            </div>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_four'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image4</label>
                                                <input id="image" class="form-control" name="image_four" type="file">
                                            </div>
                                        
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_five'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image5</label>
                                                <input id="image" class="form-control" name="image_five" type="file">
                                            </div>
                                        
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_six'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image6</label>
                                                <input id="image" class="form-control" name="image_six" type="file">
                                            </div>
                                        
                                        <div class="form-group mb-3">
                                                <img src="<?php echo HSEURL . $result['image_seven'] ?>" alt="hse asset" width="100px"><br>
                                                <label for="image">Image7</label>
                                                <input id="image" class="form-control" name="image_seven" type="file">
                                            </div>
                                        
                                           
                                          

                                          


                                            <input class="btn btn-primary" type="submit" value="Update" name="update_hse">
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