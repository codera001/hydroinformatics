<?php
session_start();
include 'header.php';
$id = $_GET['update'];
 $current_image ='';
if (isset($_POST['update_team'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
  

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if ($image_name != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name);
            $ext = end($tmp);

            // rename image
            $image_name = "team_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/team_image/' . $image_name;
            // upload image 
            $upload = move_uploaded_file($source_path, $destination_path);
            
            //  remove current image
            // $remove_path =  APPROOT . '/assets/service_image/' . $current_image;
            // $remove = unlink($remove_path);
            //   check whether image is removed and if removed or not 
            //  if failed to remove then display message and stop the process
            // if($remove == false ){
            //     $_SESSION['failed-remove'] = "<div class='error'>Failed to remove current image</div>";
            //     die(); stop the process 
            // } 
            // Log upload status
            if($upload) {
                $stmt = $conn->prepare("UPDATE team SET name = ?, title = ?, image = ? WHERE id = ?
                ");
                $stmt->bind_param('ssss',$name, $title, $image_name, $id);
                
                if ($stmt->execute()) {
                  
                    header('Location: ' . ADMINURL . 'update-team?update=' .$id);
                    $_SESSION['update'] = '<div class="alert alert-success">Updated Successfully</div>';
                    exit;
                } else {
                    $_SESSION['update'] = '<div class="alert alert-danger">Failed to Update</div>';
                    header('Location: ' . ADMINURL . 'update-team?update=' .$id);

                    exit;
                }
            }
        } else {
            $image_name = $current_image;
            header('Location: ' . ADMINURL . 'update-team?update=' .$id);

            exit;
        }
    } else{
        $image_name = $current_image;
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
                        href="<?php echo ADMINURL . 'view-team?view=' . $id; ?>">Back</a></span>
                       
            </button>
        </div>
    </header>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <?php
                if (isset($_GET['update'])) {

                    $stmt = $conn->prepare("SELECT * FROM team WHERE id = ?");
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
                                    <h4 class="card-title">Update Team member</h4>
                                    <form class="cmxform" id="signupForm" method="POST"  enctype="multipart/form-data">
                                        <fieldset>
                                        <div class="form-group mb-3">
                                                <img src="<?php echo TEAMURL . $result['image'] ?>" alt="about asset" width="100px"><br>
                                                <label for="image"></label>
                                                <input id="image" class="form-control" name="image" type="file">
                                            </div>
                                        
                                            <div class="form-group mb-3">
                                                <label for="body">Name</label>
                                                <textarea style="height: 100px;" id="content" name="name" cols="30" rows="10"
                                                    class="form-control editor"><?php echo $result['name']; ?></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="body">Title</label>
                                                <textarea style="height: 100px;" id="content" name="title" cols="30" rows="10"
                                                    class="form-control editor"><?php echo $result['title']; ?></textarea>
                                            </div>

                                          


                                            <input class="btn btn-primary" type="submit" value="Update" name="update_team">
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