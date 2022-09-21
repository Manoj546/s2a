<?php
include 'connect.php';
error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}
if (isset($_POST['submit'])) {
    $username = $_SESSION['username'];
    $FirstName = strtoupper($_POST['FirstName']);
	$LastName = strtoupper($_POST['LastName']);
    $DOB = $_POST['DOB'];
    $Bgrp = strtoupper($_POST['Bgrp']);
    $email = $_POST['Email'];
    $phone = $_POST['phone'];
    $gender = strtoupper($_POST['gender']);
    $FatherName = strtoupper($_POST['FatherName']);
    $FatherOccupation = strtoupper($_POST['FatherOccupation']);
    $MotherName = strtoupper($_POST['MotherName']);
    $MotherOccupation = strtoupper($_POST['MotherOccupation']);
    $add1 = strtoupper($_POST['add1']);
    $add2 = strtoupper($_POST['add2']);
    $add3 = strtoupper($_POST['add3']);
    $District = strtoupper($_POST['District']);
    $City = strtoupper($_POST['City']);
    $State = strtoupper($_POST['State']);
    $fadd = $add1 . ", " . $add2 . ", " . $add3 . ", " . $District . ", " . $City . ", " . $State; 
    $School = strtoupper($_POST['School']);
    $marks1 = strtoupper($_POST['marks1']);
    $College = strtoupper($_POST['College']);
    $marks2 = strtoupper($_POST['marks2']);
    $bank = strtoupper($_POST['bank']);
    $rebank = strtoupper($_POST['rebank']);
    $ifsc = strtoupper($_POST['ifsc']);
    $rifsc = strtoupper($_POST['rifsc']);
    $annualinc = $_POST['Annualincome'];

    $photo_name = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
    $photo_tmp_name = $_FILES["photo"]["tmp_name"];
    $photo_size = $_FILES["photo"]["size"];
    $photo_new_name = rand() . $photo_name;

    $sql = "SELECT * FROM personal WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO personal (username,FirstName,LastName,DOB,Bgrp,email,phone,gender,FatherName,FatherOccupation,MotherName,MotherOccupation,fadd, Image) VALUES ('$username', '$FirstName', '$LastName', '$DOB', '$Bgrp', '$email', '$phone', '$gender', '$FatherName', '$FatherOccupation', '$MotherName', '$MotherOccupation', '$fadd',  '$photo_new_name');";
        $sql8 = "INSERT INTO academic_finance (username,School,marks1,College,marks2,bank,ifsc,income) VALUES ('$username','$School', '$marks1', '$College', '$marks2', '$bank', '$ifsc','$annualinc');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            move_uploaded_file($photo_tmp_name, "schouploads/" . $photo_new_name);
            $result = mysqli_query($conn, $sql8);
            echo "<script>alert('Wow! User Registration Completed.')</script>";
            header("Location: welcome.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Woops! User Already Exists.')</script>";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/formnew.css">

    <title>Registeration form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="register-head" style="font-size: 2rem; font-weight: 800;">Registeration form</p>
            <div class="content" id="personal">
                <p class="register-head" style="font-size: 1rem; font-weight: 600; position: relative; float: left;">
                    Personal details</p>
                <div class="input-group">
                    <input type="text" placeholder="First Name " name="FirstName" value="" required>
                    <input type="text" placeholder="Last Name" name="LastName" value="" >
                </div>
                <div class="input-group">
                    <input type="date" class="sml" placeholder="DOB" name="DOB" value="" required>
                    <input type="text" class="sml" placeholder="Blood Group" name="Bgrp" value="" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="Email" value="" required>
                    <input type="number" placeholder="Phone No" name="phone" value="" required>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="MALE">
                    <input type="radio" name="gender" id="dot-2" value="FEMALE">
                    <input type="radio" name="gender" id="dot-3" value="OTHERS">
                    <input type="radio" name="gender" id="dot-4" value="PREFER NOT TO SAY">
                    <span class="gender-title">Gender <span class="redstar">*</span> :</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">others</span>
                        </label>
                        <label for="dot-4">
                            <span class="dot four"></span>
                            <span class="gender">prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="input-group" class="display:flex; flex-direction:row">
                    <button name="button" class="btn" onclick="move(event, 'personal2')">Next</button>
                </div>
            </div>
            <div class="content" id="personal2">
                <p class="register-head" style="font-size: 1rem; font-weight: 600; position: relative; float: left;">
                    Personal details 2</p>
                <div class="input-group">
                    <input type="text" placeholder="Father Name" name="FatherName" value="">
                    <input type="text" placeholder="Father occupation" name="FatherOccupation" value="">
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Mother Name" name="MotherName" value="" >
                    <input type="text" placeholder="Mother occupation" name="MotherOccupation" value="" >
                </div>
                <div class="input-group">
                <label for="photo" style="margin-left:120px; font-size:20px;">Profile picture</label>
                <input type="file" accept="image/*" id="photo" name="photo" required>
                </div>
                <div class="input-group" class="display:flex; flex-direction:row">
                    <button name="button" class="btn" onclick="move(event, 'address')">Next</button>
                    <button name="button" class="btn" onclick="move(event, 'personal')">Previous</button>
                </div>
            </div>
            <div class="content" id="address">
                <p class="register-head" style="font-size: 1rem; font-weight: 600; position: relative; float: left;">
                    Address Details</p>
                <div class="input-group">
                    <input type="text" placeholder="Address Line 1" name="add1" value="" required>
                    <input type="text" placeholder="Address Line 2" name="add2" value="" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Address Line 3" name="add3" value="" required>
                    <input type="text" placeholder="District" name="District" value="" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="City" name="City" value="" required>
                    <input type="text" placeholder="State" name="State" value="" required>
                </div>
                <div class="input-group" class="display:flex; flex-direction:row">
                    <button name="button" class="btn" onclick="move(event, 'academic')">Next</button>
                    <button name="button" class="btn" onclick="move(event, 'personal2')">Previous</button>
                </div>
            </div>
            <div class="content" id="academic">
                <p class="register-head" style="font-size: 1rem; font-weight: 600; position: relative; float: left;">
                    Academic Details</p>
                <div class="input-group">
                    <input type="text" placeholder="School studied" name="School" value="" required>
                    <input type="text" placeholder="Avg Marks obtained in 10th" name="marks1" value="" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="College studied" name="College" value="" required>
                    <input type="text" placeholder="Avg Marks obtained in 12th" name="marks2" value="" required>
                </div>
                <div class="input-group">
                    <input type="file" name="file1" value="" required>
                    <input type="file" name="file2" value="" required>
                </div>
                <div class="input-group" class="display:flex; flex-direction:row">
                    <button name="button" class="btn" onclick="move(event, 'bank')">Next</button>
                    <button name="button" class="btn" onclick="move(event, 'address')">Previous</button>
                </div>
            </div>
            <div class="content" id="bank">
                <p class="register-head" style="font-size: 1rem; font-weight: 600; position: relative; float: left;">
                    Bank Details</p>
                <div class="input-group">
                    <input type="number" placeholder="Bank account" name="bank" value="" required>
                    <input type="number" placeholder="Re-enter Bank account" name="rebank" value="" required>
                </div>
                <div class="input-group">
                    <input type="number" placeholder="Bank IFSCS" name="ifsc" value="" required>
                    <input type="number" placeholder="Re-enter Bank IFSC" name="rifsc" value="" required>
                </div>
                <div class="input-group">
                    <label for="Annualincome" style="margin-left:120px; font-size:20px;">Annual Income</label>
                    <input type="number" placeholder="" name="Annualincome" value="" required>
                </div>

                <div class="input-group" class="display:flex; flex-direction:row">
                    <button name="submit" class="btn">Submit</button>
                    <button name="button" class="btn" onclick="move(event, 'academic')">Prev</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        tabcontent = document.getElementsByClassName("content");
        tabcontent[0].style.display = "flex";

        var inputs = document.getElementsByTagName('input');

        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type == 'radio') {
                inputs[i].checked = false;
            }
        }

        function move(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tabcontent[0].style.display = "none";
    document.getElementById(cityName).style.display = "flex";
  } ;
    </script>
</body>

</html>