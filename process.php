<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add code to send an email with the form data here
    // For example, you can use the mail() function or a library like PHPMailer.
    // Be sure to handle validation and security measures for the email sending process.
    
    // After processing the form, you can redirect to a "Thank You" page or homepage
    header("Location: contact.php");
    exit;
}
?>
