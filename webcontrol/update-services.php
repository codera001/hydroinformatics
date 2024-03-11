<?php
include 'header.php';
$category_id = $_GET['update'];

function executeUpdate($conn, $category_id, $service, $body, $benefits, $image_name)
{
    $stmt = $conn->prepare("UPDATE services SET service_category = ?, body = ?, benefits = ?, image = ? WHERE category_id = ?");
    $stmt->bind_param('sssss', $service, $body, $benefits, $image_name, $category_id);
    return $stmt->execute();
}

if (isset($_POST['update_service'])) {
    $stmt = $conn->prepare("SELECT image FROM services WHERE category_id = ?");
    $stmt->bind_param('s', $category_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $current_image = $row['image'];

    $service = $_POST['service'];
    $body = $_POST['body'];
    $benefits = $_POST['benefits'];

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if (!empty($image_name)) {
            // Autorename image
            $ext = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_name = "service_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/service_image/' . $image_name;
            $upload = move_uploaded_file($source_path, $destination_path);
        } else {
            $image_name = $current_image;
            if (executeUpdate($conn, $category_id, $service, $body, $benefits, $image_name)) {
                header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
                $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
                exit;
            } else {
                $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
                header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
                exit;
            }
        }
    } else {
        $image_name = $current_image;
    }

    if (executeUpdate($conn, $category_id, $service, $body, $benefits, $image_name)) {
        header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
        $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
        exit;
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
        header('Location: ' . ADMINURL . 'update-services?update=' . $category_id);
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
                        href="<?php echo ADMINURL . 'view-services?view=' . $category_id; ?>">Back</a></span>
                       
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

                    if (!empty($results)) {
                        foreach ($results as $result) {
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
                                        <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data" action="">
                                            <fieldset>
                                                <!-- Form fields -->
                                                <div class="form-group mb-3">
                                                    <label for="service">Service</label>
                                                    <input id="service" class="form-control" name="service" type="text"
                                                        value="<?php echo $result['service_category']; ?>">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="body">Content</label>
                                                    <textarea style="height: 100px;" id="content" name="body" cols="30" rows="10"
                                                        class="form-control editor"><?php echo $result['body']; ?></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="body">Benefits of Service</label>
                                                    <textarea style="height: 100px;" id="content" name="benefits" cols="30"
                                                        rows="10"
                                                        class="form-control editor"><?php echo $result['benefits']; ?></textarea>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <img src="<?php echo SERVICEURL . $result['image'] ?>" alt="" width="100px"><br>
                                                    <label for="image"></label>
                                                    <input id="image" class="form-control" name="image" type="file">
                                                </div>
                                                <input class="btn btn-primary" type="submit" value="Update" name="update_service">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <?php
                        }
                    }

                } ?>
            </div>
            <?php include 'footer.php'; ?>
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