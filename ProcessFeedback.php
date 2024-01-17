<?php
    const NAME_REQUIRED = 'Please enter your name!';
    const EMAIL_REQUIRED = 'Please enter your email!';
    const EMAIL_INVALID = 'Please enter a valid email!';
    const FEEDBACK_REQUIRED = 'Please enter your feedback!';

    $errors = [];

    // access variable
    $name     = filter_input(INPUT_POST, 'txtName', FILTER_SANITIZE_STRING);

    if ($name) {
        $name = trim($name);
        if ($name === '') {
            $errors['name'] = NAME_REQUIRED;
        }
    } else {
        $errors['name'] = NAME_REQUIRED;
    }

    $email    = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_STRING);

    if ($email) {
        if (preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email) === 0) {
            $errors['email'] = EMAIL_INVALID;
        }
    }  else {
        $errors['email'] = EMAIL_REQUIRED;
    }


    $email    =    trim($_POST['txtEmail']);
    $feedBack =    trim($_POST['txtFeedback']);

    // credentials 
    $toAdd = "yarzartun.zotefamily@gmail.com";

    $subject = "FeedBack from bob website";

    $mailContent = "Customer name: ". str_replace("\r\n", "", $name) . "\n".
                   "Customer email: ". str_replace("\r\n", "", $email)  . "\n".
                   "Customer comments:\n". str_replace("\r\n", "", $feedBack)  . "\n";
    $fromAddress = "From: pfalllay@gmail.com";

    // send mail
    // mail($toAdd, $subject, $mailContent, $fromAddress);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
    <h1>Feedback submitted</h1>
    <p><?php echo nl2br(htmlspecialchars($feedBack)); ?></p>
</body>
</html>