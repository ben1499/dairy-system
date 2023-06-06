<?php

if(isset($_POST['login'])) {
    require_once 'connectdb.php';
    require_once 'functions.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pass']);

    loginUser($conn, $email, $pwd);
}
else {
    header("Location: ../login.php");
    exit();
}