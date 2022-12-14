<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contacts | ISS</title>
    <link rel="shortcut icon" href="logo.png" type="x-icon">
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

    <div class="cols-1" style=" width: 550px; height: 350px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.523914308285!2d38.2940516!3d-6.63065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0b3b693de11c77c!2sImperial%20Secondary%20School!5e0!3m2!1sen!2stz!4v1655505494021!5m2!1sen!2stz"
                width="100%" height="100%" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">

        </iframe>
        <br>

    </div>

    <div class="cols-2" style="padding: 5%;">

        <h2 style="text-decoration: underline;">Contact Us</h2>
        <div id="contacts">
            <div class="contacts">
                <strong><img src="address.png" width="16" height="16"/> Address</strong><br>
                <a href="https://goo.gl/maps/9HoMj75UXbk2aYh28" style="text-decoration: none;" class="fa fa-map icon">
                    Plot No.1 &amp; 38 Block "C"<br>
                    Msolwa - Chalinze, along <br>
                    Dar es Salaam - Morogoro Road.
                </a>
                <br>
            </div>
            <br>
            <div class="contacts">
                <strong><img src="phone.png" width="16" height="16"/>Hotmail</strong><br>
                <a href="tel:+255757700700" class="fa fa-phone icon"> +255 757 700 700</a>
                <br>
            </div>
            <br>
            <div class="contacts">
                <strong><img src="email.png" width="16" height="16"/>E-mail</strong><br>
                <span style="text-transform: lowercase;">
                    <a href="mailto:info@imperial.ac.tz" class="fa fa-envelope icon">info@imperial.ac.tz</a></span>
                <br>
            </div>
            <br>
            <div class="contacts">
                <strong><img src="search.png" width="16" height="16"/>Instagram</strong><br>
                <a href="https://www.instagram.com/imperial_sec_school" class="fa fa-instagram"> @imperial_sec_school</a>
                <br>
            </div>
            <br>
            <div class="contacts">
                <strong><img src="freelance.png" width="16" height="16"/>Facebook</strong><br>
                <a href="https://www.facebook.com/pages/category/High-School/Imperial-Secondary-School-163649250633936/" class="fa fa-facebook">  Imperial Schools Tanzania</a>
                <br>
            </div>

        </div>

    </div>
</div>

<div class="myflex">
    <img class="ss" src="ISS/download.jpeg" width="206" height="156"/>
    &nbsp;
    <img class="ss" src="ISS/download%20(1).jpeg" width="206" height="156"/>
    &nbsp;
    <img class="ss" src="ISS/download%20(2).jpeg" width="206" height="156"/>
</div>

<script src="JS/Navigation.js"></script>
</body>
</html>