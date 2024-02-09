<?php

session_start();

if (!isset($_POST['txtName'], $_POST['txtPassword'])) {
    exit('Please fill both the username and password fields');
}

if ($_POST['txtName'] === 'Admin' && $_POST['txtPassword'] === 'admin123') {
    session_regenerate_id();

    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['txtName'];

    // echo 'Welcome ' . $_SESSION['name'] . '!';
    header('Location: home.php');
} else {
    echo 'Incorrect credentials!';
}