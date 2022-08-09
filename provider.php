<?php
include 'connect.php';
error_reporting(0);


if (isset($_POST['submit'])) {
	$schloarship = strtoupper($_POST['schloarship']);  
    $scholarshiptype = $_POST['scholarshiptype'];
    $eligibility = strtoupper($_POST['eligibility']); 
    $benfit = $_POST['benfit']; 
    // second table
    $provider = $_POST['provider']; 
	$organisation = $_POST['organisation'];                          
    $start = $_POST['start'];       
    $end = $_POST['end'];
    $file1 = $_POST['file1'];       
    $sql = "SELECT * FROM scholarship WHERE scholarshipname='$scholarship'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO scholarship (schloarship, scholarshiptype, eligibility, benfit)
                VALUES ('$scholarship', '$scholarshiptype', '$eligibility','$benfit');";
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
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO scholarship providers (provider, organisation, start, end,file1)
                VALUES ('$provider', '$scholarship', '$scholarshiptype', '$eligibility','$benfit', '$start', '$end','$file1');";
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
        <!-- <title>Scholarship providers form</title> -->
      </head>
      
      <body>
        <div class="container">
            <header>Scholarship Details</header>
            <form action="#" method="POST" >
                <div class="form first">
                    <div class=" details schloarship">
                        <span class="title" >Enter Scholarship details here:</span>
                        <div class="fields">
                            <div class="input-field">
                                <label>Schloarship name <span class="redstar">*</span> :</label>
                                <input type="text" placeholder="" name="schloarship" value="<?php echo $schloarship; ?>">
                            </div>
                            <div class="input-field">
                                <label>Scholarship type :</label>
                                <select name="scholarshiptype" required>
                                    <option value="">--Select--</option>
                                    <option value="ENGINEERING">Engineering</option>
                                    <option value="MEDICAL">Medical</option>
                                    <option value="BUSINESS">Business</option>
                                    <option value="SPORTS">Sports</option>
                                    <option value="STUDY ABROAD">Study Abroad</option>
                                    <option value="MANAGEMENT">Management</option>
                                    <option value="LAW">Law</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Eligibility :</label>
                                <input type="text" placeholder="" name="eligibility" value="<?php echo $scholarshiptype; ?>" >
                            </div>
                            <div class="input-field">
                                <label>Benefits of the Scholarship:</label>
                                <input type="text" placeholder="" name="benfit" >
                            </div>
                        </div>
                    </div>
                    <span class="title1" >Enter Scholarship provider details here:</span>
                        <div class="fields">
                            
                            <div class="input-field">
                                <label>Provider-id <span class="redstar">*</span> :</label>
                                <input type="text" placeholder="" name="provider" value="<?php echo $organisation; ?>">
                            </div>
                            <div class="input-field">
                                <label>Organisation name :</label>
                                <input type="text" placeholder="" name="organisation" value="<?php echo $scholarshiptype; ?>" >
                            </div>
                            <div class="input-field">
                                <label>Enter start date :</label>
                                <input type="date" placeholder="" name="start">
                            </div>
                            <div class="input-field">
                                <label>Enter end date :</label>
                                <input type="date" placeholder="" name="end">
                            </div>
                            <div class="input-field">
                                <label>Enter photo of the Schloarship :</label>
                                <input type="file" name="file1" value="" required>
                            </div>
                        </div>
                        <div class="buttons">
                            <button name="submit" class="submit">
                            <span class="btntext">SUBMIT</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- <script src="js/provider.js"></script> -->
      </body>
</html>
    