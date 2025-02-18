<?php
require("connection.php");
$name=$_REQUEST["Name"];

$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$phone=$_REQUEST["phone"];
$address=$_REQUEST["address"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];
$res=$con->query("insert into register (Name,email,password,phone,address,state,country) values ('$name','$email','$password','$phone','$address','$state','$country')");
$count=mysqli_affected_rows($con);

header("location:login.php");

?>