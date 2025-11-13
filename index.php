<?php
if(isset($_POST['submit'])){
    $to = "mazenshehata2014@gmail.com"; // Replace with your email
    $subject = "New Submission";
    $message = "Email: " . $_POST['email'];
    $headers = "From: webmaster@example.com"; // Replace with your domain

    if(mail($to, $subject, $message, $headers))
        echo "Email sent successfully!";
    else
        echo "Email sending failed.";
}
?>