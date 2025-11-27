<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "imranhasan49.rt@gmail.com"; 
    $subject = "New Message From Portfolio Website";
    $body = "You received a new message from your website contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n\n".
            "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='text-align:center;'>Message sent successfully! ✔</h2>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>Error sending message ❌</h2>";
    }
}
?>
