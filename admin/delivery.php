<?php
require("connection.php"); // Include the database connection file

if (isset($_GET['var'])) {
    $id = intval($_GET['var']); // Get the ID from the query parameter and validate it
    
    $query = "UPDATE order SET status = 2 WHERE id = $id";
    
    if ($con->query($query) === TRUE) {
        echo "<script>alert('Record delivered successfully');</script>";
        header("Location: view.php"); // Redirect back to the main page
        exit;
    } else {
        echo "<script>alert('Error rejecting record: " . $con->error . "');</script>";
    }
}
?>
