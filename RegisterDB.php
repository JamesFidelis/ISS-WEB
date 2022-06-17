<?php
include('DBconnection.php');

$fname= $_POST['fname'];
$mname= $_POST['mname'];
$sname= $_POST['sname'];
$username= $_POST['user'];
$date= $_POST['dates'];
$pass= $_POST['pass'];
$cv= $_POST['CVupload'];
$mail= $_POST['mail'];
$mnum= $_POST['mnum'];
$fb= $_POST['fb'];
$tweet= $_POST['tweet'];
$ig= $_POST['ig'];


//if ($success->connect_error) {
//    die("Connection failed: " . $success->connect_error);
//}
if (!$success){die("Failed to connect to database".mysqli_connect_error());}

$data = "INSERT INTO Registration(Firstname, Middlename, Surname, Username, Dates, Password, CV, Email, Phone, Facebook, Twitter, Instagram) VALUES('$fname','$mname','$sname','$username','$date','$pass','$cv','$mail','$mnum','$fb','$tweet','$ig')";

if (mysqli_query($success, $data)){
    header("location:Register.php");
}else{
    echo "Failed";
}

$data->close();
?>


//$folder = "CV/";
//$upload =  $folder . basename($_FILES["CVupload"]["name"]);
//$uploadOk = 1;
//$FileType = strtolower(pathinfo($upload,PATHINFO_EXTENSION));
//
//
//if (file_exists($upload)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
//
//
//if ($_FILES["CVupload"]["size"] > 800000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}
//
//
//    if($FileType != "pdf" && $FileType != "docx" && $FileType != "jpeg" && $FileType != "jpg") {
//        echo "Sorry, only PDF & Docx files are allowed.";
//        $uploadOk = 0;
//    }
//
//
//if ($uploadOk == 0) {
//    echo "Sorry, file was not uploaded.";
//
//
//} else {
//    if (move_uploaded_file($_FILES["CVupload"]["tmp_name"], $upload)) {
//        echo "The file ". basename( $_FILES["CVupload"]["name"]). " has been uploaded.";
//
//    } else {
//        echo "Sorry, Failed uploading your file.";
//    }
//}
//
//
