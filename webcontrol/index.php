<?php
include 'server/connection.php';

// $password = "hydro12345";
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// echo "Hashed Password: " . $hashed_password;
// die;


if(isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location: login?error=Invalid email format');
        exit;
    }
    
    $stmt = $conn->prepare("SELECT email, password FROM admin WHERE email = ?");
    $stmt->bind_param('s', $email);
    
    if($stmt->execute()) {
        $stmt->bind_result($email_from_db, $hashed_password);
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['admin_email'] = $email_from_db;
                $_SESSION['logged_in'] = true;
                header('Location: ' . ADMINURL . 'dashboard');
                $_SESSION['login'] = '<div class="alert alert-success">Login successful</div>';

                
                exit;
            } else {
                header('Location: ' . ADMINURL . 'index');
                $_SESSION['login'] = '<div class="alert alert-danger">Incorrect Password</div>';
                exit;
            }
        } else {
            header('Location: ' . ADMINURL . 'index');
            $_SESSION['login'] = '<div class="alert alert-danger">Email not found</div>';
            exit;
        }
    } else {
        header('Location: ' . ADMINURL . 'index');
        $_SESSION['login'] = '<div class="alert alert-danger">Something went wrong</div>';
        exit;
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->

    <title>Hydroinformatics | Multi Services Limited</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo-2.png">

    <!-- Plugins css -->
    <link rel="stylesheet" href="css/default-assets/mini-event-calendar.min.css">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="style.css">

</head>



<body class="login-area">

  
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
     
    <div class="main-content-">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="hero">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-5">
                   
                    <div class="middle-box py-4">
                        <div class="card">
                            <div class="card-body p-4">

                            
     <div class="text-center mb-5 py-5">
    <?php if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    } ?>
     <!-- <a href="index" style="text-decoration: none;">
            <span class="text-center " style="background-color:#5867dd; font-size: 30px; border-radius:40px; font-weight: bold; padding: 60px; color:white;">OGRRE</span>
        </a> -->

        <img  src="img/logo-2.png" width="150" alt="">
     </div>                      

        
     

                                <form action="" method="POST" id="login-form">
                                    <div class="form-group mb-3">
                                        <input class="form-control login" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <a href="forget-password.html" class="text-dark float-right"></a>
                                        <input class="form-control login" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                    </div>

                                    <!-- <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                        <div class="checkbox d-inline mb-0">
                                            <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                            <label for="checkbox-8" class="cr mb-0 font-13">Remember me</label>
                                        </div>
                                        <span><a class="font-12 text-success" href="forget-password.html">Forgot your password?</a></span>
                                    </div> -->

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit" name="login"> Log In </button>
                                    </div>
                                </form>
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Plugins Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>

    <!-- Active JS -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>