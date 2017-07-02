<?php
include_once 'dbconnection.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_GET['email'], $_GET['p'])) {
    $email = $_GET['email'];
    $password = $_GET['p']; // The hashed password.
    echo $email."<br>";
    echo $password."<br>";
    if (login($email, $password, $mysqli) == true) {
        // Login success
        //header('Location: ../Home.php');
        echo "yes, access"."\n";
    } else {
        // Login failed
        //header('Location: ../index.php?error=1');
        echo "no access"."\n";
    }
} else {
    // The correct POST variables were not sent to this page.
    echo 'Invalid Request';
}
