<?php
require_once 'connectdb.php';

function uemailExists($conn, $email) {
    $sql = "SELECT * FROM customers WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $email, $pwd) {
    $uemailExists = uemailExists($conn, $email);

    if($uemailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uemailExists["password"];

    //Verifying password with hashed password
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION['name'] = $uemailExists['name'];
        $_SESSION['email'] = $uemailExists['email'];
        $_SESSION['cus_id'] = $uemailExists['cus_id'];
        header("location: ../index.php");
    }
}


