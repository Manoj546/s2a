<?php
include 'connect.php';
error_reporting(0);


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $restr = strtoupper($username);
	$password = $_POST['password'];
    $sql = "SELECT * FROM scholarships WHERE scholarships_name='$restr'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO scholarships (scholarships_name, eligibility, awards)
                VALUES ('$restr', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Wow! Scholarship Registration Completed.')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            header("Location: scholarinput.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Scholarship Already Exists.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/scholarinput.css">

	<title>Sign up</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Enter Scholarship</p>
			<div class="input-group">
				<input type="text" placeholder="Scholarship Name" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Eligibility" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Awards" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
		</form>
	</div>
</body>
</html>