<?php

include 'header.php';
$id = $_GET['update'];
$current_image = '';
if (isset($_POST['update_socials'])) {
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];


    $stmt = $conn->prepare("UPDATE socials SET facebook= ?, linkedin = ?, twitter = ?, instagram = ? WHERE id = ?
                ");
    $stmt->bind_param('sssss', $facebook, $linkedin, $twitter, $instagram, $id);

    if ($stmt->execute()) {

        header('Location: ' . ADMINURL . 'update-socials?update=' . $id);
        $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
        exit;
    } else {
        $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
        header('Location: ' . ADMINURL . 'update-socials?update=' . $id);

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
                        href="<?php echo ADMINURL . 'view-socials?view=' . $id; ?>">Back</a></span>

            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM socials WHERE id = ?");
                    $stmt->bind_param('s', $id);
                    $stmt->execute();
                    $results = $stmt->get_result();
                }
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
                                    <h4 class="card-title">Update </h4>
                                    <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                         

                                        <div class="form-group mb-3">
                                        <label for="service">Facebook</label>
                                        <input id="service" class="form-control" name="facebook" type="text" value="<?php echo $result['facebook'];?>">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">X</label>
                                        <input id="service" class="form-control" name="twitter" type="text" value="<?php echo $result['twitter'];?>">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">Instagram</label>
                                        <input id="service" class="form-control" name="instagram" type="text" value="<?php echo $result['instagram'];?>">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">LinkedIn</label>
                                        <input id="service" class="form-control" name="linkedin" type="text" value="<?php echo $result['linkedin'];?>">
                                    </div>




                                            <input class="btn btn-primary" type="submit" value="Update" name="update_socials">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }
                 ?>
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