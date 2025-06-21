<?php

$name = $_Get['name'];
$email = $_Get['email'];
$subject = $_Get['subject'];
$message = $_Get['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "alkavmaulana@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="https://mlkav.github.io/">homepage</a>.</p>
        
    </div>
</body>
</html>
';
