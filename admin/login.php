<?php
session_start();
require("connection.php");
$em=$_REQUEST["email"];


$pass=$_REQUEST["password"];

$res=$con->query("Select * from `login` where `email`='$em' AND `password`='$pass'");
$count=$res->num_rows;

if($count>0)
{
    $_SESSION['eee']=$em;
    header("location:dashboard.php");
}
else{
    
   echo "<script>alert('Invalid Email and Password');
   window.location.assign('index.php');</script>";
    
}
?>