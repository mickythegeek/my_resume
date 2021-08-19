<?php
if (!empty($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg_content = $_POST["msg_content"];

    // $toEmail = "lordkay07+HNGi8@gmail.com";
    // $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
    // if (mail($toEmail, $subject, $msg_content, $mailHeaders)) {
    //     $message = "Your contact information is received successfully.";
    //     $type == "success";
    // }

    $conn = mysqli_connect("localhost", "root", "", "resumeresponse") or die("Connection Error: " . mysqli_error($conn));
    mysqli_query($conn, "INSERT INTO contacts (name, phone, email, subject , message) VALUES ('" . $name . "', '" . $email . "','" . $subject . "','" . $msg_content . "')");
    $insert_id = mysqli_insert_id($conn);
    if (!empty($insert_id)) {
        $message = "Your contact information is saved successfully";
    }
}
