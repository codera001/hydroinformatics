<?php
session_start();
include 'header.php';

if (isset($_POST['add_carousel'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $unique_id = rand(0, 9);

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        if ($image_name != "") {
            // Autorename image
            // get the extension of image
            $tmp = explode('.', $image_name);
            $ext = end($tmp);

            // rename image
            $image_name = "Carousel_" . rand(000, 999) . '.' . $ext;
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = APPROOT . '/assets/carousel_image/' . $image_name;
            // upload image 
            $upload = move_uploaded_file($source_path, $destination_path);

            // Log upload status
            if ($upload) {
                $stmt = $conn->prepare("INSERT INTO carousel_images (unique_id, image, title, body) VALUES (?, ?, ?, ?)");
                $stmt->bind_param('ssss', $unique_id, $image_name,  $title, $body);

                if ($stmt->execute()) {

                    header('Location: ' . ADMINURL . 'carousel');
                    $_SESSION['Add'] = '<div class="alert alert-success">Added Successfully</div>';
                    exit;
                } else {
                    $_SESSION['Add'] = '<div class="alert alert-danger">Failed to Add</div>';
                    header('Location: ' . ADMINURL . 'add-carousel');
                    exit;
                }
            }
        } else {
            // Error handling for file upload failure
            $_SESSION['Add'] = '<div class="alert alert-danger">Failed to upload image</div>';
            error_log("Failed to upload image: " . $source_path); // Log the source path of the failed image upload
            header('Location: ' . ADMINURL . 'add-carousel');
            exit;
        }
    }
}
?>
  <!-- Image Column -->
  <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                        <?php if($result4->num_rows > 0){
                     foreach ($result4 as $result_four) { ?>
                            <figure class="image-1"><a href="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>" class="lightbox-image"
                                    data-fancybox="images"><img src="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>" alt=""></a></figure>
                         
                            <figure class="image-2"><a href="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>"
                                    data-fancybox="images"><img src="./webcontrol/assets/home_image/<?php echo $result_four['image'] ?>" alt=""></a></figure>
                            <div class="video-link wow zoomIn"><a href="<?php echo $result_four['video_link'];?>"
                                    class="link" data-fancybox="gallery" data-caption=""><span
                                        class="icon fa fa-play"></span></a></div>

                                        <?php } ?>
                        <?php } else { ?>
                    <div class="col-md-12">
                        <p class="pb-5 mb-5 py-5 text-center" style="font-size: 26px;"> NO RECORD FOUND </p>
                    </div>
                <?php } ?>
                        </div>
                    </div>




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
                <span class="btn-inner--text"> <a href="<?php echo ADMINURL . 'carousel' ?>">Back</a></span>
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
                            <h4 class="card-title">Add Carousel</h4>
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="form-group mb-3">
                                        <label for="service">Title</label>
                                        <input id="service" class="form-control" name="title" type="text" value="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="body">Description</label>
                                        <textarea style="height: 100px;" id="content" name="body" cols="30" rows="10"
                                            class="form-control editor"></textarea>
                                    </div>

                                    <div class="form-group mb-3">
                                        <img src="" alt="" width="100px"><br>
                                        <label for="image">Image</label>
                                        <input id="image" class="form-control" name="image" type="file">
                                    </div>


                                    <input class="btn btn-primary" type="submit" value="Add" name="add_carousel">
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