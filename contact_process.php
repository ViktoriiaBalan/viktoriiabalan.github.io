<?php

    // Ваша адреса для отримання листів
    $to = "viktoriiab16@gmail.com";
    
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mail_subject = "New Message from Website: " . $subject;

    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'></head><body>";
    $body .= "<table style='width: 100%; max-width: 600px; border-collapse: collapse; font-family: Arial, sans-serif;'>";
    $body .= "<thead style='background: #111111; color: #ffffff;'><tr><td style='padding: 15px; font-size: 18px;' colspan='2'>New Message from Viktoriia Balan Website</td></tr></thead>";
    $body .= "<tbody>";
    $body .= "<tr><td style='padding: 10px; border: 1px solid #dddddd; font-weight: bold;'>Name:</td><td style='padding: 10px; border: 1px solid #dddddd;'>{$name}</td></tr>";
    $body .= "<tr><td style='padding: 10px; border: 1px solid #dddddd; font-weight: bold;'>Email:</td><td style='padding: 10px; border: 1px solid #dddddd;'>{$from}</td></tr>";
    $body .= "<tr><td style='padding: 10px; border: 1px solid #dddddd; font-weight: bold;'>Subject:</td><td style='padding: 10px; border: 1px solid #dddddd;'>{$subject}</td></tr>";
    $body .= "<tr><td style='padding: 10px; border: 1px solid #dddddd; font-weight: bold;'>Message:</td><td style='padding: 10px; border: 1px solid #dddddd;'>{$cmessage}</td></tr>";
    $body .= "</tbody>";
    $body .= "</table>";
    $body .= "</body></html>";

    $send = mail($to, $mail_subject, $body, $headers);

?>
