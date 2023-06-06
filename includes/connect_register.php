<?php

if (isset($_POST['register'])) {
    require_once 'connectdb.php';
    require_once 'functions.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pass']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $shop_addr = mysqli_real_escape_string($conn, $_POST['shopAddr']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $uemailExists = uemailExists($conn, $email);
    if ($uemailExists !== false) {
        header("location: ../register.php?error=emailexists");
    }
    else {
        $sql = "INSERT INTO customers(name,email,password,gender,age,phone,shop_addr,zip) VALUES(?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL Error";
        } else {
            mysqli_stmt_bind_param($stmt,"ssssisss",$name, $email, $hashedPwd, $gender, $age, $phone, $shop_addr, $zip);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("Location: ../login.php?signup=success");
        }
    }

}else {
    header("Location: ../register.php");
}






