<?php 
session_start();
include 'connect.php';
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/stfc.css">
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
        <link rel="stylesheet" href="css/apply.css">
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
                    <a href="Index.php" class="active" style="color: black;text-decoration: underline;">Home</a>
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
    <main>
        <section class="course" id="course">
        <?php 
        $var = $_COOKIE["idcook"];
        $sql = "SELECT * FROM scholarship where scholarshipid=$var;";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                ?>
            <h2 class="title1"><?php echo $row['scholarshipname'];?></h2>
            <div class="box-container">
                <div class="imgbox">
                    <img src="schouploads/<?php echo $row["image"]; ?>" alt="" style="width: 100%;height: auto; max-height: 50%;"></div>
                <div class="content">
                    <div class="titlebox">Eligibility:</div>
                    <div>
                        <ol>
                        <?php echo $row['eligibility'];?>
                        </ol>
                    </div>
                    <div style="display: block; align-self: flex-start;"><span style="font-weight: 600;
                        font-family: 'Kanit', sans-serif;font-size: 30;text-decoration: underline;">Benefits:</span><span style="font-size: 15px;">  <?php echo $row['benifit'];?></span></div>

                    <div class="titlebox" >Documents:</div>
                    <div style="font-size: 15px;">
                        The following documents need to be uploaded along the online scholarship application:
                    </div>
                    <br>
                    <ul class="docs">
                    <?php echo $row['documents'];?>
                    </ul>
                    <button class="info" onclick="add() ">
                        <a href="signin.php">Apply</a>
                    </button>
                </div>
            </div>
            <?php
                }
                ?>
        </section>
    </main>
    <!-- ---------footer--------- -->
    <footer class="footer" id="footer">
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
    <script>
        function add(){
            <?php
            $var = $_COOKIE["idcook"];
            $username = $_SESSION['username'];
            $sql = "SELECT * FROM personal_scho WHERE username='$username' AND scholarshipid='$var'";
            $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO personal_scho (username, scholarshipid) VALUES ('$username', '$var');";
            $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Applied for scholarship')</script>";
            header("Location: welcome.php");
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Already applied for scholarship.')</script>";
    }
            ?>
        }
    </script>
</body>

</html>