<?php
include_once "connect.php";

    $first = mysqli_real_escape_string($conn,$_POST["uname"]);
    $pass = mysqli_real_escape_string($conn,$_POST["pass"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    
    $sql = "insert into users(uname,pass,email) values ('$first','$pass','$email');";
    mysqli_query($conn, $sql);
    header("Location: login.php");
?>