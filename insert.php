<?php
session_start();
require("connection.php");
$email=$_REQUEST["email"];

$password=$_REQUEST["password"];

$res=$con->query("select * from `register` where `email`='$email' AND `password`='$password'");
$count=$res->num_rows;

if($count>0)
{
    $_SESSION["ee"]=$email;
   $row=$res->fetch_assoc();
   $id=$row["id"];
   $_SESSION["userid"]=$id;
   

   header("location:services.php");
   
}
else{
    header("location:index.php");
 
}

?>