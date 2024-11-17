<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "sngugi175@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Cogmers Church of God Seventh Day for inquiries, prayer requests, or support.">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="contact">
        <h1>Thanks For Contacting COGMERS we will get back to you as soon as possible</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a></p>

   
    <script src="script1.js" defer></script>
</body>
</html>




';