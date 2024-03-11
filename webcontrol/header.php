
<?php 
// if (!isset($_SESSION['logged_in'])) {
//     header('location:index');
//     exit;
// }
include('server/connection.php');
if (!isLoggedIn()) {
    header('Location: ' . ADMINURL . 'index');
    
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
    <link rel="stylesheet" href="./css/default-assets/mini-event-calendar.min.css">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>



            <div class="flapt-page-wrapper">

                <?php include 'sidebar.php'; ?>