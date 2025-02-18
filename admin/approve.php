<?php
require("connection.php"); // Include the database connection file

if (isset($_GET['del'])) {
    $id = intval($_GET['del']); // Get the ID from the query parameter and validate it
    
    $query = "UPDATE `order` SET status = 1 WHERE id = $id";
    
    if ($con->query($query) === TRUE) {
        echo "<script>alert('Record approved successfully');</script>";
        header("Location: join.php"); // Redirect back to the main page
        exit;
    } else {
        echo "<script>alert('Error approving record: " . $con->error . "');</script>";
    }
}
?>
