<?php
include 'connect.php';
error_reporting(0);


if (isset($_POST['submit'])) {
	$provider = strtoupper($_POST['provider']);  //3
	$organisation = $_POST['organisation'];     //2
    $scholarship = strtoupper($_POST['schloarship']);            //1
    $scholarshiptype = $_POST['scholarshiptype'];   //1
    $eligibility = strtoupper($_POST['eligibility']);       //1
    $benfit = $_POST['benfit'];     //1
    $start = $_POST['start'];       //1
    $end = $_POST['end'];       //1
    $sql = "SELECT * FROM scholarship WHERE scholarshipname='$scholarship'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO scholarship (provider, scholarshipname, scholarshiptype, eligibility, benifit, start, end)
                VALUES ('$provider', '$scholarship', '$scholarshiptype', '$eligibility','$benfit', '$start', '$end');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Wow! Scholarship Registration Completed.')</script>";
            header("Location: provider.php");
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
        <title>Scholarshipproviders form</title>
      </head>
      
      <body>
        <div class="container">
            <header>Scholarship Details</header>
            <form action="" method="POST" >
                <div class="form first">
                    <div class=" details schloarship">
                        <span class="title" >Enter Scholarship details here:</span>
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
                                <label>Scholarship name :</label>
                                <input type="text" placeholder="" name="schloarship" value="<?php echo $schloarship; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Scholarship type :</label>
                                <select name="scholarshiptype">
                                    <option value="">--Select--</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Business">Business</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Study Abroad">Study Abroad</option>
                                    <option value="Management">Management</option>
                                    <option value="Law">Law</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Eligibility :</label>
                                <input type="text" placeholder="" name="eligibility" value="<?php echo $scholarshiptype; ?>" required>
                            </div>
                            <div class="input-field">
                                <label>Benefits of the Scholarship:</label>
                                <input type="text" placeholder="" name="benfit" required>
                            </div>
                        </div>
                        <span class="title" >Duration of the Schloarship:</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Enter start date :</label>
                                <input type="date" placeholder="" name="start" required>
                            </div>
                            <div class="input-field">
                                <label>Enter end date :</label>
                                <input type="date" placeholder="" name="end" required>
                            </div>
                        </div>
                        <button name="submit" class="submit">
                            <span class="btntext">SUBMIT</span>
                            <i class="nav"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </body>