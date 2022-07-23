<?php
include_once "connect.php";

    $first = mysqli_real_escape_string($conn,$_POST["uname"]);
    $pass = mysqli_real_escape_string($conn,$_POST["pass"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    
    $sql = "insert into users(uname,pass,email) values (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        echo "Sql error";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $first, $email, $pass);
        mysqli_stmt_execute($stmt);
    }

    header("Location: login.php");
?>