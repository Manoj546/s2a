<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;1,300;1,400;1,800&display=swap"
        rel="stylesheet" />
    <title>REGISTER FORM</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    font-family: 'Rubik', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}
        a:link{
    color: none;
}
*::selection{
    background: rgb(226, 222, 218);
    color: rgb(163, 163, 177);
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
}
html::-webkit-scrollbar{
    width: 1.5rem;
}
html::-webkit-scrollbar-track{
    background: rgb(82, 80, 79);
}
html::-webkit-scrollbar-thumb{
    background:linear-gradient(rgb(0, 0, 0),rgb(204, 21, 21))
}
/*----------------nav bar begin----------------*/
header{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;left: 0;
    padding: 1.5rem 7%;
    z-index: 1000;
    background: rgb(221, 112, 11);
    box-shadow: 0 .1rem .3rem rgba(0, 0, 0, .3);
    text-decoration: none;
}
header :hover{
    color: black;
}
header .logo{
    color: whitesmoke;
    font-size: 2.5rem;
    font-style: oblique;
    font-stretch: expanded;
    text-decoration: none;
}

a:link{
    color: white;
}
a:hover{
    color: white;
}
header :hover{
    color: black;
}
header .navbar ul{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
    text-decoration: none;
}
header .navbar ul li{
    margin: 0 1rem;
    text-decoration: none;

}
header .navbar ul li a{
    font-size: 1.2rem;
    color: wheat;
    font-weight: 900;
    font-size: 160%;
    font-family: 'Rubik', sans-serif;
    text-decoration: none;
}
a:link{
    color: white;
}
a:hover{
    color: white;
}
header .navbar ul li a.active,
header .navbar ul li a:hover{
    color: rgb(8, 8, 8);
    text-decoration: none;
}
header #login{
    font-size: 3rem;
    color: rgb(255, 255, 255);
    cursor: pointer;
    text-decoration: none;
}
header #login:hover{
    color: black;
    text-decoration: none;
}
header div #login:hover{
    color: black;
}
.logo:hover{
    color: black;
    
}
a:hover{
    color: white;
}
header #menu{
    font-size: 2rem;
    color:white;
    cursor: pointer;
    display: none;
    text-decoration: none;
}
header .log{
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
    float: right;
    font-size: 75%;
    padding-left: 6px;
    padding-top: 4px;
    text-decoration: none;
}
.log:hover{
    color: black;
}
.log:link{
    color: black;
}

.log:active{
    color: black;
}
        /* forms */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            background: linear-gradient(150deg,#71b7e6,#9b59b6);
        }
        form{
            display: flex;
            height: fit-content;
            justify-content: center;
            align-items: center;
            padding: 10PX;
        }
        .contain{
            max-width: 1200px;
            width: 100%;
            background:#fff;
            padding: 25px 30px;
            border-radius: 5px;
        }
        .contain .title{
            font-size: 30px;
            font-weight: 300;
            position: relative;
        }
        .contain .title::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 300px;
            background: linear-gradient(150deg,#71b7e6,#9b59b6);
        }
        .contain .title1::before{
            content: '';
            position: absolute;
            left: 36.5%;
            bottom: 0;
            height: 3px;
            width: 300px;
            background: linear-gradient(150deg,#71b7e6,#9b59b6);
        }
        .contain .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
         form .user-details .input-box{
            margin: 20px 0 12px 0;
            width: calc(100%/2 - 20px);
        }
        .user-details .input-box .details{
            display: block;
            font-weight: 500;
            margin-bottom: 3px;
            width: 100%;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 16px;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }
        form .gender-details .category{
            display: flex;
            width: 80%;
            font-size: 19px;
            margin: 14px 0;
            justify-content: space-between;
        }
        form .gender-details .category label{
            display: flex;
            align-items: center;
        }
        form .gender-details .category .dot{
            height: 18px;
            width: 18px;
            background: #d9d9d9;
            border-radius: 50%;
            margin-right: 10px;
            border:5px solid transparent;
        } 
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three,
        #dot-4:checked ~ .category label .four{
            border-color: #d9d9d9;
            background: #9b59b6;
        }
        form input[type="radio"]{
            display: none;
        }
        form .details{
            font-size: 20px;
        }
        form .button{
            height: 45px;
            margin: 45px 0;
            width: 100%;
        }
        form .button input{
            height: 100%;
            width: 100%;
            outline: none;
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 5px;
            letter-spacing: 1px;
            background: linear-gradient(150deg,#71b7e6,#9b59b6);
        }
        form .button input:hover{
            background: linear-gradient(-150deg,#71b7e6,#9b59b6);
        }
        @media (max-width: 584px){
            .contain{
                max-width: 100%;
            }
            form .user-details .input-box{
            margin-bottom: 15px ;
            width: 100%;
        }
        form .gender-details .category{
            width: 100%;
        }
        .contain form .user-details{
            max-height: fit-content;
        }
        }
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type=number] {
      -moz-appearance: textfield;
    }
    .redstar{
        color: red;
    }
    </style>
</head>
<body>
    <!-- header -->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="Index.html" class="logo"><i class="fas fa-user-graduate"></i>Scholarship<b>2All</b></a>
        <nav class="navbar">
            <ul>
                <li><a href="Index.html" class="active"><b>Home</b></a></li>
                <li><a href="about.html"><b>About</b></a></li>
                <li><a href="contact.php"><b>Contact</b></a></li>
                <li><a href="other.html"><b>Other Scholarships</b></a></li>
            </ul>
        </nav>
        <span style="min-width: 1%;"></span>
    </header>
<!-- form --> 
<form action="/Index.html">
<div class="contain">
    <div class="title1 title" style="align-items: center;display: flex; justify-content: center;font-weight: 600;">REGISTRATION FORM</div>
    <div class="title" style="padding-top: 30px;">Personal Details</div>
    <form action="#">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Last Name <span class="redstar">*</span> :</span>
                <input type="text" placeholder="Enter your last name" required>
            </div>
            <div class="input-box">
                <span class="details">First Name <span class="redstar">*</span> :</span>
                <input type="text" placeholder="Enter your first name" required>
            </div>
            <div class="input-box">
                <span class="details">Date of birth <span class="redstar">*</span> :</span>
                <input type="date" placeholder="dd/mm/yy" required>
            </div>
            <div class="input-box">
                <span class="details">Blood Group <span class="redstar">*</span> :</span>
                <input type="text" placeholder="Blood group" required>
            </div>
            <div class="input-box">
                <span class="details">Father's Name :</span>
                <input type="text" placeholder="Father's name" >
            </div>
            <div class="input-box">
                <span class="details">Father's Occupation :</span>
                <input type="text" >
            </div>
            <div class="input-box">
                <span class="details">Mother's Name :</span>
                <input type="text" placeholder="Mother's name" >
            </div>
            <div class="input-box">
                <span class="details">Mother's Occupation :</span>
                <input type="text"  >
            </div>
            <div class="input-box">
                <span class="details">Email :</span>
                <input type="text" placeholder="Enter your Email" >
            </div>
            <div class="input-box">
                <span class="details">Mobile Number :</span>
                <input type="number" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <input type="radio" name="gender" id="dot-4">
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
    <div class="title">Address</div>
        <div class="user-details">
        <div class="input-box">
            <span class="details">State/Union Territory <span class="redstar">*</span> :</span>
            <input list="select-state" type="text" />
            <datalist id= "select-state">
                <option value="Andhra Pradesh"></option> 
                <option value="Arunachal Pradesh"></option>
                <option value="Assam"></option>
                <option value="Bihar"></option> 
                <option value="Chhattisgarh"></option>
                <option value="Goa"></option>
                <option value="Gujarat"></option> 
                <option value="Haryana"></option>
                <option value="Himachal Pradesh"></option>
                <option value="Jharkhand"></option> 
                <option value="Karnataka"></option>
                <option value="Kerala"></option>
                <option value="Madhya Pradesh"></option> 
                <option value="Maharashtra"></option>
                <option value="Manipur"></option>
                <option value="Meghalaya"></option>
                <option value="Mizoram"></option>
                <option value="Nagaland"></option>
                <option value="Odisha"></option>
                <option value="Punjab"></option>
                <option value="Rajasthan"></option>
                <option value="Sikkim"></option>
                <option value="Tamil Nadu"></option>
                <option value="Telangana"></option>
                <option value="Tripura"></option>
                <option value="Uttar Pradesh"></option>
                <option value="Uttarakhand"></option>
                <option value="West Bengal"></option>
                <option value="Andaman and Nicobar Islands"></option>
                <option value="Chandigarh"></option>
                <option value="Dadra & Nagar Haveli and Daman & Diu"></option>
                <option value="Delhi"></option>
                <option value="Jammu and Kashmir"></option>
                <option value="Lakshadweep"></option>
                <option value="Puducherry"></option>
                <option value="Ladakh"></option>
            </datalist>
        </div>
        <div class="input-box">
            <span class="details">District :</span>
            <input type="text" >
        </div>
        <div class="input-box">
            <span class="details">Village/Town :</span>
            <input type="text" placeholder="Village/Town/City">
        </div>
        <div class="input-box">
            <span class="details">PIN code :</span>
            <input type="number" placeholder="PIN code" >
        </div>
        <div class="input-box">
            <span class="details">D/No :</span>
            <input type="text" >
        </div>
        <div class="input-box">
            <span class="details">Land mark :</span>
            <input type="text" placeholder="Near by famous building">
        </div>
    <div class="title">Academic Details</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">school studied :</span>
                <input type="text" placeholder="School name" >
            </div>
            <div class="input-box">
                <span class="details">10th marks :</span>
                <input type="text" placeholder="percentage/grade/points" >
            </div>
            <div class="input-box" style="display: flex;position: relative;">
                <span class="details">upload 10th mark sheet here :</span>
            </div>
            <input type="file" id="img" name="img" accept="image/*" style="padding-top: 2%;display: flex;left: 0;position: relative;margin: auto;">
            <div style="width: 15%;"></div>
            <div class="input-box">
                <span class="details">college studied :</span>
                <input type="text" placeholder="Enter your first name" >
            </div>
            <div class="input-box">
                <span class="details">12th marks :</span>
                <input type="text" placeholder="percentage/grade/points" >
            </div>
            <div class="input-box" style="display: flex;position: relative;">
                <span class="details">upload 12th mark sheet here :</span>
            </div>
            <input type="file" id="img" name="img" accept="image/*" style="padding-top: 2%;display: flex;left: 0;position: relative;margin: auto;">
            <div style="width: 15%;"></div>
        </div>
    <div class="title">Bank Details</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Bank Account(A/C) Number :</span>
                <input type="text" placeholder="Enter Account Number" >
            </div>
        <div class="input-box">
            <span class="details">Confirm Bank Account(A/C) Number :</span>
            <input type="text" placeholder="Re-Enter Account Number">
        </div>
        <div class="input-box">
            <span class="details">Bank IFSC code :</span>
            <input type="text" placeholder="Enter IFSC code">
        </div>
        <div class="input-box">
            <span class="details">Confirm Bank IFSC code :</span>
            <input type="text" placeholder="Re-Enter IFSC code">
        </div>
        <div class="input-box" style="display: flex;position: relative;">
            <span class="details">upload bank statement here :</span>
        </div>
        <input type="file" id="img" name="img" accept="image/*" style="padding-top: 2%;display: flex;left: 0;position: relative;margin: auto;">
        <div style="width: 15%;"></div>
        <div class="check box" style="width: 100%;">
            <span class="details" style="padding-right: 26%;">I have read and understood the guidelines for registration.</span>
            <input type="checkbox"  required>
        </div>
        <div class="check box" style="width: 100%;">
            <span class="details" style="padding-right: 24%;">I am aware that if more than one application is found to be filled (fresh or renewal), all my/my child's/ward's applications are liable to be rejected</span>
            <input type="checkbox"  required>
        </div>
        <div class="button">
            <input type="submit" value="Register">
        </div>
    </form>
</div>
</form>
</body>
</html>