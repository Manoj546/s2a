<?php 

include 'connect.php';
session_start();
error_reporting();
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,300;1,400;1,800&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a5e9702c06.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a712f78cb8.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <Title>Scholarship2All</Title>
</head>

<body>
    <!-- -------------header-------------- -->

    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="Index.php" class="logo"><i class="fas fa-user-graduate fa-lg"></i>Scholarship<b>2All</b></a>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="Index.php" style="color: black;text-decoration: underline;">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="other2.php">Other Scholarships</a>
                </li>
            </ul>
        </nav>
        <div id="login" class="fas fa-user-circle">
            <a href="logout.php" class="log" class="log"
                style="font-weight: 600;font-family: Kanit, sans-serif;font-size: 80%;">Logout</a>
        </div>
    </header>

    <div class="main">
        <div class="content">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen"><i
                        class="fa-solid fa-address-card fa-lg"></i>Personal Details</button>
                <button class="tablinks" onclick="openCity(event, '2')"><i
                        class="fa-solid fa-book-open-reader fa-lg"></i>Academic Details</button>
                <button class="tablinks" onclick="openCity(event, '3')"><i
                        class="fa-solid fa-credit-card fa-lg"></i>Financial Details</button>
                <button class="tablinks" onclick="openCity(event, '4')"><i class="fa-solid fa-user-graduate fa-lg"></i>Applied Scholarship</button>
                <div style="display:flex; flex-direction: column; position: relative; align-items: center; justify-content: end; height: 65%; ">
                    <?php
                    $sql2 = "SELECT * FROM sessionhis WHERE username='$username' order by sessionid desc limit 1 OFFSET 1";
                    $result2 = mysqli_query($conn, $sql2);
                    ?>
                    <h3 style="margin: 5px 5px 0 0; font-size: 20px; font-weight:600; display:flex; position: relative; justify-content:space-around;">Last Login</h3>
                    <?php while($row2 = mysqli_fetch_assoc($result2)){ ?>
                    <h3 style="margin: 5px 5px 0 0; font-size: 18px; font-weight:400; display:flex; position: relative; justify-content:space-around;"><?php echo $row2['startdate'];?>       <?php echo $row2['starttime'];?></h3>
                    <?php } ?>
                </div>
            </div>
            <?php 
            $sql = "SELECT * FROM personal WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
            <div id="1" class="tabcontent">
                <h3 class="headings">Personal Details</h3>
                <form action="">
                    <div class="input-group">
                        <label class="inputs" for="name">Name: <span class="output"><?php echo $row['FirstName'];?>
                                <?php echo $row['LastName'];?></span></label>
                        <input class="inputs" type="text" name="name" value="" required>
                    </div>
                    <div class="input-group">
                        <label class="inputs" for="phone">Phone no: <span
                                class="output"><?php echo $row['phone'];?></span></label>
                        <input class="inputs" type="text" name="phone" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="Email">Email: <span class="output"><?php echo $row['email'];?></span></label>
                        <input type="text" name="Email" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="address">Address: <span class="output"><?php echo $row['fadd'];?></span></label>
                        <input type="text" name="address" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="dob">DOB: <span class="output"><?php echo $row['DOB'];?></span></label>
                        <input type="text" name="dob" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="BloodGrp">Blood Grp: <span class="output"><?php echo $row['Bgrp'];?></span></label>
                        <input type="text" name="BloodGrp" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="Gender">Gender: <span class="output"><?php echo $row['gender'];?></span></label>
                        <input type="text" name="Gender" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="father">Father name: <span
                                class="output"><?php echo $row['FatherName'];?></span></label>
                        <input type="text" name="father" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="mother">Mother name: <span
                                class="output"><?php echo $row['MotherName'];?></span></label>
                        <input type="text" name="mother" value="" required>
                    </div>
                </form>
            </div>
            <?php 
            $sql7 = "SELECT * FROM academic_finance WHERE username='$username'";
            $result7 = mysqli_query($conn, $sql7);
                while($row7 = mysqli_fetch_assoc($result7)){
                ?>
            <div id="2" class="tabcontent">
                <h3 class="headings">Academic Details</h3>
                <form action="">
                    <div class="input-group">
                        <label for="school">School: <span class="output"><?php echo $row7['School'];?></span></label>
                        <input type="text" name="school" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="mark1">10th marks: <span class="output"><?php echo $row7['marks1'];?></span></label>
                        <input type="text" name="mark1" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="college">College: <span class="output"><?php echo $row7['College'];?></span></label>
                        <input type="text" name="college" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="mark2">12th marks: <span class="output"><?php echo $row7['marks2'];?></span></label>
                        <input type="text" name="mark2" value="" required>
                    </div>
                </form>
            </div>

            <div id="3" class="tabcontent">
                <h3 class="headings">Financial Details</h3>
                <form action="">
                    <div class="input-group">
                        <label for="bank">Bank account: <span class="output"><?php echo $row7['bank'];?></span></label>
                        <input type="text" name="bank" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="ifsc">IFSC code: <span class="output"><?php echo $row7['ifsc'];?></span></label>
                        <input type="text" name="ifsc" value="" required>
                    </div>
                    <div class="input-group">
                        <label for="ifsc">Income: <span class="output"><?php echo $row7['income'];?></span></label>
                        <input type="text" name="ifsc" value="" required>
                    </div>
                </form>
            </div>
            <?php } ?>
            <?php
            $sql1 = "SELECT * FROM personal_scho p, scholarship s WHERE p.username='$username' and s.scholarshipid=p.scholarshipid";
            $result1 = mysqli_query($conn, $sql1);
            ?>
            <div id="4" class="tabcontent">
                <h3 class="headings">Applied Scholarships</h3>
                <div class="applied">
                    <?php while($row1 = mysqli_fetch_assoc($result1)){ ?>
                    <div class="app2">
                        <h1 class="applied-head"><?php echo $row1['scholarshipname'];?></h1>
                        <a href="redirect.php"><button class="applied-bttn" onclick=" getId2(this)" id="<?php echo $row1['scholarshipid']; ?>">Remove</button></a>
                    </div>
                    <?php } ?>
                </div>
                <button class="applied-bttn actv" onclick="document.location.href='other2.php';">Apply another scholarship</button>
            </div>
        </div>
        <div class="images">
            <img src="schouploads/<?php echo $row["Image"]; ?>" alt="" class="profile" width="30%"
                style="aspect-ratio: 1/1; border-radius:50%">
            <h3 style="margin: 25px 0 0 0; font-size: 20px; font-weight:600"><?php echo $row['FirstName'];?>
                <?php echo $row['LastName'];?></h3>
            <h3 style="margin: 5px 5px 0 0; font-size: 18px; font-weight:400"><?php echo $row['email'];?></h3>
        </div>
        <?php
                }
                ?>
    </div>
    <script src="js/tabs.js"></script>
    <script>
        createCookie( "delcook" , ' ' );
        function getId2(aa){
            createCookie( "delcook" , aa.id );
        }
        function createCookie(name, value) {
        var date = new Date();
        date.setTime(date.getTime()+(10*1000));
        var expires = "; expires="+date.toGMTString();

        document.cookie = name+"="+value+expires+"; path=/";
        }
    </script>
</body>

</html>