<?php
$dbserver = "localhost";
$username = "root";
$password = "";
$dbname = "s2a";

$conn = mysqli_connect($dbserver,$username,$password,$dbname);
if (!$conn) {
    die("connection failed: ". mysqli_connect_error());
}
?>