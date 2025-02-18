<?php
require("connection.php");
$id=$_REQUEST["del"];

$res=$con->query("Delete from `order` where `id`='$id'");
$count=mysqli_affected_rows($con);

header("location:myorders.php");

?>