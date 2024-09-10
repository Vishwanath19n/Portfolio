<?php

$to = "vishwanath19namthabad@gmail.com";
$from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Set the email headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Set the subject
$subject = "You have a message.";

// Prepare the body of the email
$body = "Here is what was sent:\r\n";
$body .= "Name: $name\r\n";
$body .= "Email: $from\r\n";
$body .= "Phone: $phone\r\n";
$body .= "Message: $message\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    echo '<p class="green textcenter">Your message was sent successfully! I will be in touch as soon as I can.</p>';
} else {
    echo '<p>Something went wrong, try refreshing and submitting the form again.</p>';
}

?>
