<?php
include 'connect.php';
error_reporting(0);


if (isset($_POST['submit'])) {
<<<<<<< HEAD
	$Provider_id = $_POST['Provider_id'];
	$Organisation = $_POST['Organisation name'];
=======
	$Provider = $_POST['Provider'];
	$organisation = $_POST['organisation'];
    $schloarship = $_POST['schloarship'];
    $schloarshiptype = $_POST['schloarshiptype'];
    $eligibility = $_POST['eligibility'];
    $benfit = $_POST['benfit'];
    $start = $_POST['start'];
    $end = $_POST['end'];
>>>>>>> cb435cc8633d83e31180cc5237e50b49cb2b503e
    $restr = strtoupper($username);
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
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/provider.css" />
        <script src="https://kit.fontawesome.com/a8ab30b9ae.js" crossorigin="anonymous"></script>
        <title>Schloarship providers form</title>
      </head>
      
      <body>
        <div class="container">
            <header>Scholarship Details</header>
            <form action="" method="POST" >
                <div class="form first">
                    <div class=" details schloarship">
                        <span class="title" >Enter schloarship details here:</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Provider_id :</label>
                                <input type="text" placeholder="" name="provider" value="<?php echo $provider; ?>" required >
                            </div>
                            <div class="input-field">
                                <label>Organisation name <span class="redstar">*</span> :</label>
                                <input type="text" placeholder="" name="organisation" value="<?php echo $organisation; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Schloarship name :</label>
                                <input type="text" placeholder="" name="schloarship" value="<?php echo $schloarship; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Schloarship type :</label>
                                <input type="text" placeholder="" name="schloarshiptype" value="<?php echo $schloarshiptype; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Eligibility :</label>
<<<<<<< HEAD
                                <select id="cars" name="type">
                                    <option value="">--Select--</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Business">Business</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Study Abroad">Study Abroad</option>
                                    <option value="Management">Management</option>
                                    <option value="Law">Law</option>
                                </select>
=======
                                <input type="text" placeholder="" name="eligibility" value="<?php echo $eligibility; ?>" required>
>>>>>>> cb435cc8633d83e31180cc5237e50b49cb2b503e
                            </div>
                            <div class="input-field">
                                <label>Benefits of the schloarship :</label>
                                <input type="text" placeholder="" name="benfit" value="<?php echo $benfit; ?>" required>
                            </div>
                        </div>
                        <span class="title" >Duration of the Schloarship:</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Enter start date :</label>
                                <input type="date" placeholder="" name="start" value="<?php echo $start; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Enter end date :</label>
                                <input type="date" placeholder="" name="end" value="<?php echo $end; ?>" required>
                            </div>
                        </div>
                        <button class="submit">
                            <span class="btntext">SUBMIT</span>
                            <i class="nav"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </body>