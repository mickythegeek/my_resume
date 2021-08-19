<?php
if (!empty($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg_content = $_POST["msg_content"];

    $toEmail = "lordkay07+HNGi8@gmail.com";
    $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    if (mail($toEmail, $subject, $msg_content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
