<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = 'manozmaharjan153@gmail.com';  // Replace with your Gmail address
    $subject = 'New message from contact form';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Create email content
    $email_content = "<h2>New message from contact form</h2>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Message:</strong></p>";
    $email_content .= "<p>$message</p>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Message could not be sent.';
    }
}
?>
