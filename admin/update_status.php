<?php
require("connection.php");

// Check if the required parameters are provided
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = intval($_GET['id']);
    $status = intval($_GET['status']);

    // Update the order's status in the database
    $query = "UPDATE orders SET status = $status WHERE id = $id";

    if ($con->query($query)) {
        echo "Order status updated successfully.";
    } else {
        echo "Error updating order status: " . $con->error;
    }
} else {
    echo "Invalid request.";
}

// Redirect back to the orders page
header("Location: order.php");
exit;
?>
