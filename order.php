<?php
session_start();
require("connection.php");

$pname = $_REQUEST["pname"];
$categ = $_REQUEST["categ"];
$subc = $_REQUEST["subc"];
$price = $_REQUEST["price"];
$file = $_FILES["pic"]["name"];
$quantity = $_REQUEST["quantity"]; 
$total=$_REQUEST["totalPrice"] ;
if (isset($_SESSION["userid"])) {
    $user_id = $_SESSION["userid"];
    $res = $con->query("INSERT INTO `order` (name, category, subcategory, price, Quantity,Total_amount, user_id) 
                        VALUES ('$pname', '$categ', '$subc', '$price', '$quantity','$total' ,'$user_id')");
    
    
    if ($res) {
      
        move_uploaded_file($_FILES["pic"]["tmp_name"], "images/" . $file);
       
        header("location:services.php");
    } else {
       
        echo "Error placing order: " . $con->error;
    }
} else {
    
    header("location:login.php");
}
?>
