<?php

if (isset($_POST['confirm'])) {
    require_once 'connectdb.php';
    session_start();
    $bhalf = $_POST['bhalf'];
    $blitre = $_POST['blitre'];
    $shalf = $_POST['shalf'];
    $slitre = $_POST['slitre'];
    $chalf = $_POST['chalf'];
    $clitre = $_POST['clitre'];
    $cquart = $_POST['cquart'];
    $samrudi = $_POST['samr'];
    $currentDate = date("Y-m-d");
    $currentTime = date("H:i:s");
    $cusid = $_SESSION['cus_id'];

    $sql = "INSERT INTO milk_order(bhalf, blitre, shalf, slitre, chalf, clitre, cquart, samrudi, order_date, order_time, cus_id) VALUES(?,?,?,?,?,?,?,?,CURRENT_DATE(),CURRENT_TIME(),?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Error";
    }
    else {
        echo $_SESSION['cus_id'];
        mysqli_stmt_bind_param($stmt,"iiiiiiiii",$bhalf, $blitre, $shalf, $slitre, $chalf, $clitre, $cquart, $samrudi, $cusid );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
       header("location: ../milk-order.php?ordersaved");
    }
} else {
    header("location: ../milk-order.php");
}


