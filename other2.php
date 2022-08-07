<?php
include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,300;1,400;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/other2.css">
    <title>Other Scholarships</title>
</head>

<body>

    <!-- -------------header-------------- -->

    <header id="header">
        <div id="menu" class="fas fa-bars"></div>
        <a href="Index.html" class="logo"><i class="fas fa-user-graduate fa-lg"></i>Scholarship<b>2All</b></a>
        <nav class="navbar">
            <ul>
                <li><a href="Index.html" class="active">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="other2.html" style="color: black;text-decoration: underline;">Other Scholarships</a></li>
            </ul>
        </nav>
        <div id="login" class="fas fa-user-circle"><a href="signin.php" class="log"
                style="font-weight: 600;font-family: Kanit, sans-serif;font-size: 80%;">Login</a></div>
    </header>
    <a href="#header"><i class="fas fa-angle-up fa-6x"
            style="color: black; background-color: rgba(255, 255, 255, 0);display: flex;position: fixed;right: 1%;top: 10px;"></i></a>

    <main>
        <div class="cover">
            <h1>Other Scholarships</h1>
            <div>
                <span><a href="#engg" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Engineering</button></a></span>
                <span><a href="#med" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Medical</button></a></span>
                <span><a href="#bus" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Business</button></a></span>
                <span><a href="#law" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Law</button></a></span>
            </div>
            <div>
                <span><a href="#spo" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Sports</button></a></span>
                <span><a href="#abr" rel="noopener noreferrer"><button type="button"
                            class="bttn1">StudyAbroad</button></a></span>
                <span><a href="#man" rel="noopener noreferrer"><button type="button"
                            class="bttn1">Management</button></a></span>
            </div>
        </div>
        <div class="cols" id="engg">
            <h1>Engineering Scholarships</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="cols" id="med">
            <h1>Medical Scholarships</h1>
            <div class="contains">
            <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award : <?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity : <?php echo $row['eligibility']; ?></span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="cols" id="engg">
            <h1>Business Scholarships</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="cols" id="engg">
            <h1>Law Scholarships</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="cols" id="engg">
            <h1>Management Scholarships</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="cols" id="engg">
            <h1>Sports Scholarships</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="cols" id="engg">
            <h1>Study Abroad</h1> 
            <div class="contains">           
                <?php
                $sql = "SELECT * FROM scholarship WHERE scholarshiptype='Engineering';";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="scho">
                    <h3><?php echo $row['scholarshipname']; ?></h3>
                    <span class="align">
                        <span class="data">
                            <span class="col1">Award :<?php echo $row['benifit']; ?> </span>
                            <span class="col1">Eligiblity :<?php echo $row['eligibility']; ?> </span>
                        </span>
                        <span class="apply"><a href="login.html"><button type="button" class="bttn2">Apply</button></a>
                        </span>
                    </span>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <footer class="footer" style="padding-left: 5%;">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h1>SCHOLARSHIP2ALL</h1>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="Index.html">Our services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h1>get help</h1>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="contact.html">Help</a></li>
                        <li><a href="contact.html">Send feedback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h1>Follow us</h1>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
                        <a href="#"><i class="fab fa-discord fa-2x"></i></a>
                    </div>
                </div>
                <div class="footer-col" style="color: rgba(255, 255, 255, 0.931);flex: 1 1 50%;padding-top: 10px;">
                    <div style="align-items: center;justify-content: center;margin: auto;flex-direction: row;">
                        <ul style="font-size: 190%;padding-left: 0;">
                            <li>
                                <span style="font-size: 120%;font-weight: 500;padding-left: 0;" class="doneby">Website
                                    done by:</span> &nbsp;&nbsp;&nbsp; K Amarnath
                            </li>
                            <li style="padding-left: 30%;">
                                Kripakara MN
                            </li>
                            <li style="padding-left: 30%;">
                                Manoj Howale S
                            </li>
                        </ul>
                    </div>
                </div>
                <span
                    style="display: contents; color: white; align-items: center;justify-content: center;display: flex;padding-top: 5%;">
                    <span style="font-size: 180%;">Copyright &nbsp;&nbsp;</span> <i class="far fa-copyright fa-2x"></i>
                    <span style="font-size: 180%;">&nbsp;&nbsp; 2022 - All Rights Reserved</span>
                </span>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>