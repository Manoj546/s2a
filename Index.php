<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
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
                <?php if(isset($_SESSION['username'])){ ?>
                <li>
                    <a href="welcome.php">Profile</a>
                </li>
                    <?php }
                ?>    
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

    <!-- ----------slider-------------- -->


    <div style="padding-left: 15%;padding-right: 15%; padding-top: 8%; background-color: rgba(226, 230, 235, 0.459);">
        <div style="height: 30%; margin: auto; padding-left: 10%; padding-right: 10%;"></div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 0"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpg" class="d-block w-100" height="500px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: rgba(0, 0, 0, 0.828); font-size: 350%;">Scholarship2All</h1>
                        <p style="color: rgba(0, 0, 0, 0.712); font-weight: 700; font-size: 120%;">Scholarships for a
                            bright future</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" class="d-block w-100" height="500px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: rgba(0, 0, 0, 0.828); font-size: 350%;">Scholarship2All</h1>
                        <p style="color: rgba(0, 0, 0, 0.712); font-weight: 700; font-size: 120%;">Scholarships for a
                            bright future</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" height="500px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: rgba(0, 0, 0, 0.828); font-size: 350%;">Scholarship2All</h1>
                        <p style="color: rgba(0, 0, 0, 0.712); font-weight: 700; font-size: 120%;">Scholarships for a
                            bright future</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev arrow" type="button" height="500px"
                data-bs-target="#carouselExampleCaptions arrow" data-bs-slide="prev">
                <span class="carousel-control-prev-icon arrow" aria-hidden="true"></span>
                <span class="visually-hidden arrow">Previous</span>
            </button>
            <button class="carousel-control-next arrow" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
                <span class="visually-hidden arrow">Next</span>
            </button>
        </div>
    </div>

    <div style="padding-top: 2px"></div>
    <main style="align-items: center;position: relative;margin: auto;">
        <span>
            Scholarship2All
        </span>
        <div
            style="background-color:#121e888c;padding: 4%;width:100%;align-items:center;  border-bottom-right-radius: 50%;border-top-right-radius: 50%;width: 90%; border-left: 15px solid black;border-top: 2px solid black;border-bottom: 2px solid black;border-right: 2px solid black;">
            <h1 style="text-decoration: underline;padding-left: 2%;">How to apply?</h1>
            <ul class="how">
                <li>Sign up with your email id</li>
                <li>Complete your profile i.e., present class, income, location, gender and other required fields</li>
                <li>Apply for scholarships with easy to fill form</li>
                <li>Upload high-quality documents with all fields visible</li>
            </ul>
        </div>
        <div style="height: 80px;"></div>



        <!-- -----------marquee---------- -->

        <span class="marquee"><a href="signin.php" target="_blank">Login to access the Scholarships.</a></span>
        <div style="height: 100px"></div>

        <!-- --------why choose us-------- -->

        <section class="about" id="about">
            <div class="image">
                <img src="images/1.jpg" alt="Snow" style="width: 100%; height: 475px;">
            </div>
            <div class="content">
                <div style="height: 30px"></div>
                <h3 style="text-transform: none;">Why choose us?</h3>
                <p>
                    Scholarship2All is a website designed to help students search a
                    variety of scholarships from the existing wide variety of
                    scholarships.
                </p>
                <p style="padding-bottom: 4%">
                    This scholarships will help you to achieve your educational and
                    career goals. This scholarship will help by lowering the costs of
                    college and other expenses . This way, you will be able to continue
                    with your academic achievements.
                </p>
                <a href="#"><button class="bttn" style="border-radius: 8px">Learn more</button></a>
            </div>
        </section>
        <!-- what we offer -->
        <!-- student highlights -->
        <span
            style="font-family: Kanit, sans-serif;font-size: 550%;font-weight: 500;color: black;font-stretch: expanded;">Students
            highlights</span>
        <section class="product">
            <div class="container-fluid">
                <div class="slider-wrap">
                    <div class="slider-main" id="slider-main">
                        <!-- 1 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">Ankit Agarwal</p1>
                                <img src="images/student3.png" width="415px" height="200px" class="image">
                                <p>"When I was making my decision to go overseas for tertiary education. I didn’t want
                                    to go anywhere else to complete my financial requirement" <br> By - Ankit Agarwal."
                                </p>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">Swapna K</p1>
                                <img src="images/student2.jpg" width="415px" height="200px" class="image">
                                <p>"I did Master's in Computer Science in Stanford University. This scholarship helped
                                    me a lot in the process of completing the course."</p>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">Kanishk Kumar</p1>
                                <img src="images/student1.jpg" width="415px" height="200px" class="image">
                                <p>"Kanishk Kumar (MBA, Master of Marketing, 2022) is a business development and market
                                    entry consulting professional, with a reputation for helping businesses grow."</p>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">Revanth H</p1>
                                <img src="images/student5.jpg" width="415px" height="200px" class="image">
                                <p>"I took a law scholarship from this website. I recommend this scholarship site to
                                    anyone who needs financial assistance to complete their college degrees."</p>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">George WB</p1>
                                <img src="images/student6.jpg" width="415px" height="200px" class="image">
                                <p>"I took a engineering scholarship from this website. I recommend this scholarship
                                    site to anyone who needs financial assistance to complete their college degrees."
                                </p>
                            </div>
                        </div>
                        <!-- 6 -->
                        <div class="item">
                            <div class="text">
                                <p1 class="name">Kavya S</p1>
                                <img src="images/student9.jpg" width="415px" height="200px" class="image">
                                <p>"I took a law scholarship from this website.I recommend this scholarship site to
                                    anyone who needs financial assistance to complete their college degrees."</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <button type="button" class="slider-btn" onclick="prev()"><i class="fa fa-caret-left"
                                aria-hidden="true"></i></button>
                        <button type="button" class="slider-btn" onclick="next()"><i class="fa fa-caret-right"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- do not remove this from here -->
        <script src="js/slider.js"></script>

        <!-- <div class="highlightsbox">
                        <p class="nameofstudent">swapna</p>
                        <img src="student2.jpg" class="model">
                        <div class="details">
                            <p>I got selected for Boston University to complete my Master's in Computer Science but to complete the course I need some financial assistance then i came to know about this site.The scholarships in this site helped me a lot.</p>
                        </div>
                    </div> -->
        <!-- -----------------buttons-------------------- -->
        <div style="justify-self: center; padding-top: 100px;margin: auto;padding-left: 22%;">
            <div style="width: 70%;height: 8px;background-color: rgb(46, 23, 109);"></div>
        </div>
        <div id="buttons" style="padding: 5px 100px">
            <span
                style="font-family: Kanit, sans-serif;font-size: 550%;font-weight: 500;color: black;font-stretch: expanded;">Trending
                now</span>
            <div style="align-items: center;display: flex;justify-content: space-around;flex: 1 1 1 50%;">
                <?php if(!isset($_SESSION['username'])){ ?>
                <a href="signin.php" rel="noopener noreferrer"><button type="button" id="26"  onclick="getId(this)"  class="bttn2 stfc">SHINING STAR</button></a>
                <?php }
            else{ 
                ?>
                <a href="new.php" rel="noopener noreferrer"><button type="button" id="26" onclick="getId(this)"  class="bttn2 stfc">SHINING STAR </button></a>
                <?php } ?>
                <?php if(!isset($_SESSION['username'])){ ?>
                <a href="signin.php" rel="noopener noreferrer"><button type="button" id="29" onclick="getId(this)"  class="bttn2 stfc">BYPL SASHAKT</button></a>
                <?php }
            else{ 
                ?>
                <a href="new.php" rel="noopener noreferrer"><button type="button" id="29" onclick="getId(this)"  class="bttn2 hdfc">BYPL SASHAKT</button></a>
                <?php } ?>
                <?php if(!isset($_SESSION['username'])){ ?>
                <a href="signin.php" rel="noopener noreferrer"><button type="button" id="30"  onclick="getId(this)"  class="bttn2 stfc">VIRCHOW</button></a>
                <?php }
            else{ 
                ?>
                <a href="new.php" rel="noopener noreferrer"><button type="button" id="30"  onclick="getId(this)"  class="bttn2 rolls">VIRCHOW</button></a>
                <?php } ?>
            </div>
            <div
                style="align-items: center;display: flex;justify-content: space-around;flex: 1 1 1 50%;padding-top: 7%;padding-bottom: 20%;">
                <?php if(!isset($_SESSION['username'])){ ?>
                <a href="signin.php" rel="noopener noreferrer"><button type="button" id="28" onclick="getId(this)"  class="bttn2 stfc">GSK SCHOLARSHIP</button></a>
                <?php }
            else{ 
                ?>
                <a href="new.php" rel="noopener noreferrer"><button type="button" id="28" onclick="getId(this)"  class="bttn2 gsk">GSK SCHOLARSHIP</button></a>
                <?php } ?>
                <?php if(!isset($_SESSION['username'])){ ?>
                <a href="signin.php" rel="noopener noreferrer"><button type="button" id="27" onclick="getId(this)"  class="bttn2 stfc">SCHAEFFLER</button></a>
                <?php }
            else{ 
                ?>
                <a href="new.php" rel="noopener noreferrer"><button type="button" id="27" onclick="getId(this)"  class="bttn2 gsk">SCHAEFFLER</button></a>
                <?php } ?>
            </div>
        </div>
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
        createCookie( "idcook" , ' ' );
        function getId(a){
            createCookie( "idcook" , a.id )
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