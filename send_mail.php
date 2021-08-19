<?php
if (!empty($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg_content = $_POST["msg_content"];

    $message = "Your contact information is received successfully.";
}
