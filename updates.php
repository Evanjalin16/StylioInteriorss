<?php
require("connection.php");
$id=$_REQUEST["id"];

$name=$_REQUEST["Name"];

$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$phone=$_REQUEST["phone"];
$address=$_REQUEST["address"];
$state=$_REQUEST["state"];
$country=$_REQUEST["country"];


$res=$con->query("update `register` set `Name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`address`='$address',`state`='$state',`country`='$country' where `id`='$id'");


header("location:services.php");

?>