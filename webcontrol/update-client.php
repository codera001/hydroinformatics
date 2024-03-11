<?php
include 'header.php';
$id = $_GET['update'];
function executeUpdateClient($conn, $image_name, $id)
{
    $stmt = $conn->prepare("UPDATE clients SET image = ? WHERE id = ?");
    $stmt->bind_param('ss', $image_name, $id);
    return $stmt->execute();
}
if (isset($_POST['update_client'])) {
    $stmt = $conn->prepare("SELECT image FROM clients WHERE id = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $current_image = $row['image'];   

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if (!empty($image_name)) {
            // Autorename image
            $ext = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_name = "client_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/client_image/' . $image_name;
            $upload = move_uploaded_file($source_path, $destination_path);
        } else {
            $image_name = $current_image;
            if (executeUpdateclient($conn, $image_name, $id)) {
                header('Location: ' . ADMINURL . 'update-client?update=' .$id);
                $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
                exit;
            } else {
                // $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
                header('Location: ' . ADMINURL . 'update-client?update=' .$id);
                exit;
            }
        }
    } else {
        $image_name = $current_image;
    }

    if (executeUpdateClient($conn, $image_name, $id)) {
        header('Location: ' . ADMINURL . 'update-client?update=' .$id);
                    $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
        exit;
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
                    header('Location: ' . ADMINURL . 'update-client?update=' .$id);
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
                        href="<?php echo ADMINURL . 'view-client?view=' . $id; ?>">Back</a></span>
                       
            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM clients WHERE id = ?");
                    $stmt->bind_param('s', $id);
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
                                    <h4 class="card-title">Update client member</h4>
                                    <form class="cmxform" id="signupForm" method="POST"  enctype="multipart/form-data">
                                        <fieldset>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo CLIENTURL . $result['image'] ?>" alt="CLIENT asset" width="100px"><br>
                                                <label for="image"></label>
                                                <input id="image" class="form-control" name="image" type="file">
                                            </div>
                                        
                                           

                                          


                                            <input class="btn btn-primary" type="submit" value="Update" name="update_client">
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