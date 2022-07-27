<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" type="text/css" href="CSS/Staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Staff | ISS</title>
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

<h2 style="padding-top: 5%;" align="center">OUR STAFF</h2>

    <div class="staff-rowd">
    <div class="column">
        <div class="content">
        <center>
        <img src="Staff/Aditya.jpg" width="160" height="160"/>
       <p> <strong><h>CEO</h></strong><br>
           Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
           mollitia minus qui aliquam aspernatur id nulla quia quo
           voluptas molestiae et porro optio. Qui molestiae quo dolor
           odit nam eligendi culpa sed doloribus odit ea consequatur.
           </center>
       </p>
        </div>
    </div>

    <div class="column">
        <div class="content">
        <center>
        <img src="Staff/principal.jpg" width="156" height="156"/>
       <p> <strong><h>Principal</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
        </center></p>
        </div>
    </div>

    <div class="column">
        <div class="content">
        <center>
        <img src="Staff/vice.jpg" width="156" height="156"/>
        <p> <strong><h>Vice Principal</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
    </div>

    <div class="column">
        <div class="content">
        <center>
        <img src="Staff/eric.jpg" width="156" height="156"/>
        <p> <strong><h>Administrator</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
        </center>
        </p>
    </div>
</div>
</div>

    <div class="staff-rowd" style="padding-top: 1%;">
        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/lady1.jpg" width="156" height="156"/>
       <p> <strong><h>Secretary</h></strong><br>
           Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
           mollitia minus qui aliquam aspernatur id nulla quia quo
           voluptas molestiae et porro optio. Qui molestiae quo dolor
           odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
       </p>

    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/gymlady.jpg" width="156" height="156"/>
        <p> <strong><h>Coach</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/gym.webp" width="156" height="156"/>
        <p> <strong><h>Coach</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/lady2.jpg" width="156" height="156"/>
        <p> <strong><h>Teacher</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>

</div>
    </div>

    <div class="staff-rowd" style="padding-top: 1%;">

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/lady3.jpg" width="156" height="156"/>
       <p> <strong><h>Teacher</h></strong><br>
           Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
           mollitia minus qui aliquam aspernatur id nulla quia quo
           voluptas molestiae et porro optio. Qui molestiae quo dolor
           odit nam eligendi culpa sed doloribus odit ea consequatur.
        </center>
       </p>
    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/Tom.jpg" width="156" height="156"/>
        <p> <strong><h>Teacher</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/guy1.jpg" width="156" height="156"/>
        <p> <strong><h>Teacher</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
        </div>

        <div class="column">
            <div class="content">
        <center>
        <img src="Staff/guy2.jpg" width="156" height="156"/>
        <p> <strong><h>Teacher</h></strong><br>
            Lorem ipsum dolor sit amet. Aut obcaecati delectus sed
            mollitia minus qui aliquam aspernatur id nulla quia quo
            voluptas molestiae et porro optio. Qui molestiae quo dolor
            odit nam eligendi culpa sed doloribus odit ea consequatur.
            </center>
        </p>
    </div>
</div>
    </div>



<div class="col-xs-12" style="padding-top: 5%">
    <img src="ISS/IMPERIAL-BLOG.gif" width="100%" height="133"/>

</div>

<script src="JS/Navigation.js"></script>
<script src="JS/Navigation.js"></script>
</body>
</html>