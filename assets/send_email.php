<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "graphixcript@gmail.com"; // Change this to your desired email address
    $headers = "From: $email";
    $mailSubject = "Contact Form: $subject";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
    
    if (mail($to, $mailSubject, $mailBody, $headers)) {
        echo "success"; // This message will be shown to the user when the email is sent successfully.
    } else {
        echo "error"; // This message will be shown to the user if there's an error sending the email.
    }
}
?>