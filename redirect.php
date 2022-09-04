<?php 

include 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}
$username = $_SESSION['username'];

    $var = $_COOKIE["delcook"];
    $sql3 = "DELETE FROM personal_scho where scholarshipid='$var' and username='$username' ";
    $result = mysqli_query($conn, $sql3);
    if ($conn->query($sql3) === TRUE) {
        echo "Record deleted successfully";
        header("Location: welcome.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: welcome.php");
    }
?>