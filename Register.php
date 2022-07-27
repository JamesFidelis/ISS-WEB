<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" type="text/css" href="CSS/Register.css">
    <link rel="stylesheet"
          href=
          "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register | ISS</title>
    <link rel="shortcut icon" href="logo.png" type="x-icon>"
</head>
<body>
<?php
session_start();
if (empty($_SESSION['User'])){
    include('navigation.php');
}
else {
    include('navigationLogOut.php');
}
?>
<div class="rows">

    <div class="col_left">

    </div>


    <div id="regform" class="col_mid">
        <center><h><strong>REGISTER HERE</strong></h></center>
    <form name="schooluser" method="POST" action="RegisterDB.php" class="myform" enctype="multipart/form-data">
        <h><strong>Personal Details:</strong></h><br>
        <input type="text" name="fname" id="fnames" class="regiform" placeholder="First Name" required><br>
        <input type="text" name="mname" id="mnames" class="regiform" placeholder="Middle Name" required><br>
        <input type="text" name="sname" id="snames" class="regiform" placeholder="Surname" required><br>
        <input type="text" name="user" id="unames" class="regiform" placeholder="Username" required><br>
        <input type="date" name="dates" id="dob" class="regiform" value="dd/MM/yyyy" required><br>
        <input type="password" name="pass" id="password" class="regiform" placeholder="Password" required><br>
        <input type="checkbox" onclick="showpass()">Show Password<br>
        Upload CV <input type="file" name="CVuploads" id="CVupload" value="CV HERE" required><br>
        <h><strong>Contacts:</strong></h><br>
        <input type="email" name="mail" id="emails" class="regiform" placeholder="Enter E-mail here" required><br>
        <input type="text" name="mnum" id="phone" class="regiform" placeholder="Phone Number" required><br>
        <input type="text" name="fb" id="faceb" class="regiform" placeholder="Facebook Name" required><br>
        <input type="text" name="tweet" id="twitter" class="regiform" placeholder="Twitter Name" required><br>
        <input type="text" name="ig" id="insta" class="regiform" placeholder="Instagram Name" required><br>
       <center> <input type="submit" name="sub" id="submit" onclick="return ValidatePasswords();" value="Register"></center>
    </form>
    <p id="mylogin" align="right">  Already have an account?<button id="login" onclick="document.getElementById('popup').style.display='block'" style="width:auto;">Login</button></p>

        <div id="popup" class="modal">

            <div class="modal-content animate" >
                <div class="imgcontainer">
                    <button onclick="document.getElementById('popup').style.display='none'" class="close" title="Close Modal">&times;</button>

                </div>

                <form class="container" method="POST" action="LoginDB.php">

                    <div class="icons">
                        <b>Username</b><br>
                    <input type="text" placeholder="Enter Username" src="lock.png" name="uname" id="usname" required><br>
                        </div>

                    <div class="icons">
                        <b>Password</b><br>
                    <input type="password" placeholder="Enter Password" name="pssw" id="pasw" required><br>
                    </div>

                    <input type="checkbox" onclick="loginpass()">Show Password<br>
                    <center><input type="submit" id="popuplogin" value="Login"></center><br>

                </form>

                <div class="container" style="background-color:#f1f1f1">
                    <center><button type="button" onclick="document.getElementById('popup').style.display='none'" class="exitbtn">Exit</button></center>
                </div>
            </div>
        </div>
    </div>

    <div class="col_right">


    </div>

</div>


    <div class="col-xs-12" style="padding-top: 5%">
        <img src="ISS/IMPERIAL-BLOG.gif" width="100%" height="133"/>

    </div>

<script src="JS/Register.js"></script>
    <script src="JS/Navigation.js"></script>
</body>
</html>