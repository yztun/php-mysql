<?php
    const NAME_REQUIRED = 'Please enter your name!';
    const EMAIL_REQUIRED = 'Please enter your email!';
    const EMAIL_INVALID = 'Please enter a valid email!';
    const FEEDBACK_REQUIRED = 'Please enter your feedback!';

    if (isset($_POST['btnSubmit'])) {
        echo 'btnSubmit';

        $errors = [];

        // validation process

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

        $feedBack     = filter_input(INPUT_POST, 'txtFeedback', FILTER_SANITIZE_STRING);

        if ($feedBack) {
            $feedBack = trim($feedBack);
            if ($feedBack === '') {
                $errors['feedback'] = NAME_REQUIRED;
            }
        } else {
            $errors['feedback'] = NAME_REQUIRED;
        }

        if (count($errors) === 0) {
            $toAdd = "yarzartun.zotefamily@gmail.com";

            $subject = "FeedBack from bob website ";

            if (preg_match('/shop|customer service|retail/', $feedBack)) {
                $subject .= ' : retail';
            } else if (preg_match('/deliver|fulfill|shipping/', $feedBack)) {
                $subject .= ' : delivery';
            } else if (preg_match('/bill|account/', $feedBack)) {
                $subject .= ' : billing';
            }

            $mailContent = "Customer name: ". str_replace("\r\n", "", $name) . "\n".
                   "Customer email: ". str_replace("\r\n", "", $email)  . "\n".
                   "Customer comments:\n". str_replace("\r\n", "", $feedBack)  . "\n";

            $fromAddress = "From: pfalllay@gmail.com";

            // send mail
            mail($toAdd, $subject, $mailContent, $fromAddress);
        } 

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Customer Feedback</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Customer Feedback</h1>
        <h3><code>Please tell us what you think.</code></h3> 

        <form action="Feedback.php" method="post">

            <label for="txtName">Your Name:</label>
            <input type="text" name="txtName" id="">
            <small class="error"><?php echo $errors['name'] ?? '' ?></small>

            <label for="txtEmail">Your Email:</label>
            <input type="text" name="txtEmail" id="">
            <small class="error"><?php echo $errors['email'] ?? '' ?></small>

            <label for="txtFeedback">Your Feedback:</label>
            <textarea name="txtFeedback" id=""></textarea>
            <small class="error"><?php echo $errors['feedback'] ?? '' ?></small>

            <button type="submit" name="btnSubmit" class="btnSubmit">Send Feedback</button>
        </form>
    </div>
</body>
</html>