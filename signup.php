<?php
include_once "connect.php";

    $first = $_POST["uname"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    
    $sql = "insert into users(uname,pass,email) values ('$first','$pass','$email');";
    mysqli_query($conn, $sql);
    header("Location: login.php");
?>