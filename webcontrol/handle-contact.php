<?php

include('server/connection.php');
// define siteurl
define('SITEINFO', "hydrotherapyservicesltd@gmail.com");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $to = SITEINFO;
    $subject = $_POST['username'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $headers = $_POST['email'];
    $hide = $_POST['hide'];
    $code = $_POST['code'];

    // Validate input 
    if (empty($headers) || empty($subject) || empty($message)){
        echo "Please fill in all fields.";
        exit;
    }
    if($hide == $code){
        try {
            $stmt = $conn->prepare("INSERT INTO contact_form (first_name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $subject, $headers, $phone, $message);
            $stmt->execute();
            mail($to, $subject, $message, $headers);
            echo 'Email sent successfully!';
           
            header('Location: ' . ADMINURL . '../contact/contact');
           
            exit;
        } catch (Exception $e) {
            echo "Message could not be sent.";
        }
    } else {
        echo  "<div class='text-danger'>Wrong code</div>";
    }

   

} else {
    echo "Invalid request.";
}


