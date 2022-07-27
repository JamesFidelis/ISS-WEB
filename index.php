<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home | ISS</title>
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
<script src="JS/Navigation.js"></script>
<div><h1 align="center">WELCOME TO IMPERIAL SECONDARY SCHOOL</h1></div>

<div class="rows">
    <div class="col_mid">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="ISS/pool.jpeg" style="width:100%;" height="450" >
            </div>

            <div class="mySlides fade">
                <img src="ISS/school.jpeg" style="width:100%" height="450">

            </div>

            <div class="mySlides fade">
                <img src="ISS/school-2.jpeg" style="width:100%" height="450">

            </div>
            <div class="mySlides fade">
                <img src="ISS/health.jpeg" style="width:100%" height="450">

            </div><div class="mySlides fade">
                <img src="ISS/ISS.jpeg" style="width:100%" height="450">

            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

    </div>

</div>

<div class="row">
    <div class="left">

        <h3 class="vision" align="center">OUR VISION</h3>
        <p align="center">To create a school community
            where children participate, excel and are
            proud of their achievement to become competitive
            yet compassionate individual equipped with skills
            and competencies of 21st century.We believe that a happy child
            is a successful one. We are committed to providing a positive,
            safe and stimulating environment for children to learn, where all
            are valued. We intend that all children should enjoy their learning,
            achieve their potential and become independent life-long learners.
            Our goal is to support and nurture the children’s and our own natural
            desire to be life-long learners. We are committed to the families we
            serve, providing support and encouragement.We aim to provide a safe
            learning environment with a welcoming atmosphere which creates a sense
            of belonging amongst the families. We maintain an inclusive environment
            which acknowledges and respects children from diverse family and cultural backgrounds.
            Our vision is for each child to develop a curiosity of learning, discover their interests
            and grow in their love of learning. We also desire to have strong families through parent
            support/fellowship and skills training.</p>
    </div>

    <div class="right" >

        <center><h3 id="vision" style="text-decoration: underline; "><strong>REMEMBER</strong></h3></center>
        <br>
        <ul style="padding-left: 35%;">
            <li>Change is the end result of all true learning</li>
            <li>Education is the passport to the future, for tomorrow belongs to those who prepare for it today</li>
            <li>An investment in knowledge pays the best interest</li>
            <li>The roots of education are bitter, but the fruit is sweet</li>
            <li>Education is what remains after one has forgotten what one has learned in school</li>
        </ul>
    </div>

</div>
</div>



<div class="col-xs-12" style="padding-top: 5%">
    <img src="ISS/IMPERIAL-BLOG.gif" width="100%" height="133"/>

</div>

<script src="JS/Home.js"></script>

</body>
</html>