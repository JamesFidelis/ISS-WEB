<?php
session_start();
if(empty($_SESSION['User'])){
    header('location:Register.php');
}

include("DBconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alumni List | ISS</title>
    <link rel="shortcut icon" href="logo.png" type="x-icon>"
</head>
<body>
<h1>Our School Dashboard</h1>


<h2>ALL REGISTERED ALUMNI</h2>
<table class="alumnis" width="100%" border="1px">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Enrollment</th>
        <th scope="col">Graduation</th>
        <th scope="col">Principal</th>
        <th scope="col">Famous Teacher</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM Alumni";
    $myresult = mysqli_query($success,$query);
    if($myresult)
    {
        while($records = mysqli_fetch_assoc($myresult))
        {?>
            <tr>
                <td><?php echo $records['myName']; ?></td>
                <td><?php echo $records['Enrollment']; ?></td>
                <td><?php echo $records['Graduation']; ?></td>
                <td><?php echo $records['Head']; ?></td>
                <td><?php echo $records['Teacher']; ?></td>
                <td><?php echo $records['Address']; ?></td>
                <td><?php echo $records['Email']; ?></td>
                <td><?php echo $records['Phone']; ?></td>
            </tr>
    </tbody>
        <?php }
    }
    ?>

</table>
<br>
<br>
<div align="center">
    <button class="logout" > <a class="logout" href="Exit.php">Sign out</a></button>

</div>
<script src="JS/Navigation.js"></script>
</body>
</html>
