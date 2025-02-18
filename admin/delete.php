<?php
require("connection.php");
$id=$_REQUEST["del"];
$res=$con->query("Select * from `addproducts` where `id`='$id'");
$count=$res->num_rows;
if($count>0)
$row=$res->fetch_assoc();
$upload=$row["image"];
unlink("images/$upload");
$res=$con->query("Delete from `addproducts` where `id`='$id'");
$count=mysqli_affected_rows($con);
if($count>0){
header("location:view.php");
}
else
{
   echo "record not declared";
}
?>