<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "imranhasan49.rt@gmail.com";
    $subject = "New message from your portfolio website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if(mail($to, $subject, $body)) {
        echo "Message sent";
    } else {
        echo "Error sending message";
    }
}
?>
