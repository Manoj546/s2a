<?php
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "s2a";

$conn = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>