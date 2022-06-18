<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" type="text/css" href="CSS/Alumni.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alumni | ISS</title>
    <link rel="shortcut icon" href="logo.png" type="x-icon>"
    <?php include('DBconnection.php'); ?>
</head>
<body>
<div class="topnav" id="myTopnav">
    <h id="topnavhead"><img src="logo.png" width="54" height="54"/><b>IMPERIAL SECONDARY SCHOOL</b></h>
    <a href="Contacts.php" >Contacts</a>
    <a href="Staff.php" >Staff</a>
    <a href="Alumni.php" class="active">Alumni</a>
    <a href="Register.php" >Register</a>
    <a href="About.php" >About</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<div class="rows">
    <div class="col_left">
        <h>LEFT</h>
    </div>
    <div class="col_mid">
      <center>  <h>Alumni Records</h></center>
        <form name="alumniform" method="POST" action="AlumniDB.php">
            <input type="text" class="alumni" name="names" placeholder="Full name" maxlength="45" required><br>
            <input type="text" class="alumni" name="enroll" placeholder="Enrollment year" maxlength="4" required><br>
            <input type="text" class="alumni" name="gradu" placeholder="Graduation Year" maxlength="4" required><br>
            <select name="principal" class="alumni" required>
                <option value="" selected disabled>Principal </option>
                <?php
                    $principal = "SELECT Firstname,Surname FROM Registration WHERE Type='Principal'";
                    $mydata = mysqli_query($success,$principal);
                    if($mydata)
                    {

                        while($thisdata = mysqli_fetch_assoc($mydata))
                        {?>
                <option value="<?php echo $thisdata['Firstname']." ".$thisdata['Surname']; ?>">
                <?php echo $thisdata['Firstname']." ".$thisdata['Surname']; ?></option>
                <?php }
                    }else
                    {?>
                <option value=""><?php echo "Failed"; ?></option> ;
                <?php
                    }
                ?>
            </select><br>
            <select name="myteacher" class="alumni" required>
                <option value="" selected disabled>Famous teacher</option>
                <?php
                    $teacher = "SELECT Firstname,Surname FROM Registration WHERE Type='Teacher'";
                    $mydata = mysqli_query($success,$teacher);
                    if($mydata)
                    {

                        while($thisdata = mysqli_fetch_assoc($mydata))
                        {?>
                <option value="<?php echo $thisdata['Firstname']." ".$thisdata['Surname']; ?>">
                <?php echo $thisdata['Firstname']." ".$thisdata['Surname']; ?></option>
                <?php }
                    }else
                    {?>
                <option value=""><?php echo "Failed"; ?></option> ;
                <?php
                    }
                ?>
            </select><br>
            <select name="perfomance" class="alumni" required>
                <option value="" selected disabled>NECTA RESULTS</option>
                <option value="DIV I">DIV I</option>
                <option value="DIV II">DIV II</option>
                <option value="DIV III">DIV III</option>
                <option value="DIV IV">DIV IV</option>
            </select><br>
            <input type="text" class="alumni" name="job" placeholder="Job Employed" maxlength="20" required><br>
            <input type="text" class="alumni" name="address" placeholder="Address" required><br>
            <input type="email" class="alumni" name="mail" placeholder="E mail" required><br>
            <input type="text" class="alumni" name="phone"  placeholder="Mobile Number" maxlength="10" required><br>
           <center> <input type="submit" value="Submit" class="sub_button"></center>

        </form>

    </div>


    <div class="col_right">
        <h>RIGHT</h>
    </div>
</div>


<div class="col-xs-12" style="padding-top: 5%">
    <img src="ISS/IMPERIAL-BLOG.gif" width="100%" height="133"/>

</div>
<script src="JS/Navigation.js"></script>
</body>
</html>