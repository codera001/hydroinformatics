<?php

include 'header.php';



if (isset($_POST['change_password'])) {
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_SESSION['admin_email'];

    // Validate password and confirm password match
    if ($password !== $confirmPassword) {
        header('location: change-password?error=Passwords do not match');
        exit;
    } elseif (strlen($password) < 6) {
        header('location: change-password?error=Password must be at least 6 characters');
        exit;
    } else {
        // Hash the new password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Update password in the database
        $stmt = $conn->prepare("UPDATE admin SET password = ? WHERE email = ?");
        $stmt->bind_param('ss', $hashedPassword, $email);

        if ($stmt->execute()) {
            header('location: dashboard?message=Password has been updated successfully');
            exit;
        } else {
            header('location: change-password?error=Could not update the password');
            exit;
        }
    }
}

?>



<body class="login-area">


    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="main-content-">
        <div class="container h-100">
            <div class="row h-100 align-items-center d-flex justify-content-center w-70 mx-auto mt-5">
                <div class="hero">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>



                <div class="text-center mb-5 py-5">
                    <a href="dashboard" style="text-decoration: none;">
                        <span class="text-center "
                            style=" font-size: 30px; border-radius:40px; font-weight: bold; padding: 60px; ">Change
                            Password</span>
                    </a>
                </div>




                <form action="" method="POST" id="login-form">

                    <p class="text-danger text-center">
                        <?php if (isset($_GET['error'])) {
                            echo $_GET['error'];
                        } ?>
                    </p>
                    <div class="form-group mb-3">
                        <input class="form-control login" type="password" required="" id="password"
                            placeholder="Enter a password" name="password">
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-control login" type="password" required="" id="password"
                            placeholder="Confirm your new password " name="confirm_password">
                    </div>

                    <div class="form-group mb-0">
                        <button class="btn btn-primary info btn-block" type="submit" name="change_password"> Change Password
                        </button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>


    <script src="js/default-assets/active.js"></script>

</body>

</html>