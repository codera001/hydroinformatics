<?php

include 'header.php';

if (isset($_POST['add_socials'])) {
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
 
                $stmt = $conn->prepare("INSERT INTO socials (facebook, linkedin, twitter, instagram) VALUES (?, ?, ?, ?)");
                $stmt->bind_param('ssss', $facebook, $linkedin, $twitter, $instagram);

                if ($stmt->execute()) {

                    header('Location: ' . ADMINURL . 'socials');
                    $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
                    exit;
                } else {
                    $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
                    header('Location: ' . ADMINURL . 'add-socials');
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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'socials' ?>">Back</a></span>
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
                            <h4 class="card-title">Add Socials</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                <div class="form-group mb-3">
                                        <label for="service">Facebook</label>
                                        <input id="service" class="form-control" name="facebook" type="text" value="">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">X</label>
                                        <input id="service" class="form-control" name="twitter" type="text" value="">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">Instagram</label>
                                        <input id="service" class="form-control" name="instagram" type="text" value="">
                                    </div>
                                <div class="form-group mb-3">
                                        <label for="service">LinkedIn</label>
                                        <input id="service" class="form-control" name="linkedin" type="text" value="">
                                    </div>
                 
                                    


                                    <input class="btn btn-primary" type="submit" value="Add" name="add_socials">
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