<?php
require("connection.php");
$pname=$_REQUEST["pname"];
$categ=$_REQUEST["categ"];
$subc=$_REQUEST["subc"];
$price=$_REQUEST["price"];
$file=$_FILES["pic"]["name"];
$descri=$_REQUEST["descri"];
$res=$con->query("insert into addproducts (name,category,subcategory,price,image,description) values ('$pname','$categ','$subc','$price','$file','$descri')");
$count=mysqli_affected_rows($con);

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/".$file);
header("location:forms.php");

?>


