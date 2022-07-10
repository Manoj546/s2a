<?php
    include_once 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
    $sql= "select * from users;";
    $results = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($results);
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($results)){
            echo $row['user_uid'] . "<br>";
        }
    }
?>
</body>
</html>