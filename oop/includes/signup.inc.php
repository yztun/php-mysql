<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['txtUserName'];
    $password = password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new Signup($userName, $password);
    $signup->signupUser();
}