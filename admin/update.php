<?php
require("connection.php");
$id=$_REQUEST["id"];
$pname=$_REQUEST["pname"];
$categ=$_REQUEST["categ"];
$subc=$_REQUEST["subc"];
$price=$_REQUEST["price"];

$descri=$_REQUEST["descri"];
if(empty($_FILES["pic"]["name"]))
{
    

$res=$con->query("update `addproducts` set `name`='$pname',`category`='$categ',`subcategory`='$subc',`price`='$price',`description`='$descri' where `id`='$id'");
$count=mysqli_affected_rows($con);
}
else{
    $file=$_FILES["pic"]["name"];   
    $res=$con->query("update `addproducts` set `name`='$pname',`category`='$categ',`subcategory`='$subc',`price`='$price',`image`='$file',`description`='$descri' where `id`='$id'");

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/".$file);
}
header("location:view.php");

?>