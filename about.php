<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,300;1,400;1,800&display=swap"
        rel="stylesheet">
    <title>About Us</title>

</head>

<body>

    <!-- -------------header-------------- -->

    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="Index.php" class="logo"><i class="fas fa-user-graduate fa-lg"></i>Scholarship<b>2All</b></a>
        <nav class="navbar">
            <ul>
                <li><a href="Index.php" class="active">Home</a></li>
                <li><a href="about.php" style="color: black;text-decoration: underline;">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="other2.php">Other Scholarships</a></li>
            </ul>
        </nav>
        <div id="login" class="fas fa-user-circle">
            <?php if(!isset($_SESSION['username'])){ ?>
            <a href="signin.php" class="log" class="log"
                style="font-weight: 600;font-family: Kanit, sans-serif;font-size: 80%;">Login</a>
            <?php }
            else{ 
                ?>
            <a href="logout.php" class="log" class="log"
                style="font-weight: 600;font-family: Kanit, sans-serif;font-size: 80%;">Logout</a>
            <?php } ?>
        </div>
    </header>


    <!-- about us -->
    <main style="padding-top: 100px;">
        <div class="testmonial">
            <h1>Founding Team</h1>
            <div class="col4" style="display: flex;align-items: center;justify-content: space-around; padding-top: 2%;">
                <div class="col5">
                    <img src="images/amarnath.jpg" width="250px" height="250px">
                    <h3>Kotturu Amarnath</h3>
                    <p style="text-transform: none;">Mail us at: amarnath.cs20@bmsce.ac.in</p>
                </div>
                <div class="col5">
                    <img src="images/kripakara.jpeg" width="250px" height="250px">
                    <h3>kripakara MN</h3>
                    <p style="text-transform: none;">Mail us at: kripakara.cs20@bmsce.ac.in</p>
                </div>
                <div class="col5">
                    <img src="images/manoj.jpg" width="250px" height="250px">
                    <h3>Manoj Howale S</h3>
                    <p style="text-transform: none;">Mail us at: manojhowle.cs20@bmsce.ac.in</p>
                </div>
            </div>
        </div>
        <div class="motivation">
            <h1 style="text-decoration: underline;text-align: center;">Motivation</h1>
            <p>"Scholarship2All is a website to help students to find the best scholarship scheme suitable for them."
            </p>
            <p> "It provides easy access to scholarships with connections between seekers and scholarship providers."
            </p>
            <p> "Our vision is to ensure affordable education for all, mission is to simplify scholarship accessibility
                for students and disbursement process for providers."</p>
        </div>
    </main>

    <!-- ---------footer--------- -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h1>SCHOLARSHIP2ALL</h1>
                    <ul>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="Index.php">Our services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h1>get help</h1>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="contact.php">Help</a></li>
                        <li><a href="contact.php">Send feedback</a></li>
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
                            <li style="padding-left: 32%;">
                                Kripakara MN
                            </li>
                            <li style="padding-left: 32%;">
                                Manoj Howale S
                            </li>
                        </ul>
                    </div>
                </div>
                <span
                    style="display: contents; color: white; align-items: center;justify-content: center;display: flex;padding-top: 5%;">
                    <span style="font-size: 180%;">Copyright &nbsp;&nbsp;</span> <i class="far fa-copyright fa-2x"></i>
                    <span style="font-size: 180%;">&nbsp;&nbsp; 2022 - All Rights Reserved</span> </span>
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