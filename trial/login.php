<?php
include 'connect.php';
error_reporting(0);
    if(isset($_POST['submit'])){
        $username = $_POST['uname'];
        $password = md5($_POST['pass']);
        $rpassword = md5($_POST['rpas']);
        $email = $_POST['email'];

        if ($password == $rpassword){
           $sql = "SELECT * FROM users WHERE usersEmail='$email';"; 
           $result = mysqli_query($conn, $sql);
           if(mysqli_num_rows($result > 0)){ 
                echo "<script>alert('Oops! Email already exists.')</script>";
           } 
           else{
                $sql = "INSERT INTO users (usersName,usersEmail,usersPwd) values ('$username','$email','$password');"; 
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<script>alert('Success')</script>";
                    $username = "";
                    $email = "";
                    $_POST['pass']= "";
                    $_POST['rpas']= "";
                }
                else{
                    echo "<script>alert('Oops! something went wrong.')</script>";
                }
           }          
        }
        else{
            echo "<script>alert('password not matched.')</script>";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style="background-image: url('images/login.jpg');background-position: center;background-repeat: no-repeat;background-size: cover; height:100%;">
    <form action="" method="POST">
    <input id="user" type="text" class="input" name="uname" placeholder="name" value="<?php echo $username;?>" required>
    <input id="pass" type="password" class="input" data-type="password" name="pass" placeholder="pass" value="<?php echo $_POST['pass'];?>" required>
    <input id="pass" type="password" class="input" data-type="password" name="rpas" placeholder="conf pass" value="<?php echo $_POST['rpas'];?>" required>
    <input id="pass" type="text" class="input" name="email" placeholder="email" value="<?php echo $email;?>" required>
    <button type="submit" name="submit">Signup</button>
    <button type="reset">Reset</button>
    </form>
</body>
</html>