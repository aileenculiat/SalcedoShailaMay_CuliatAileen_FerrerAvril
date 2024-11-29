<?php
require 'db_con.php'; 
session_start();


// Check if appointment ID is provided
if (isset($_POST['app_id'])) {
    $app_id = $_POST['app_id'];

    // Prepare and execute SQL query to update the appointment status
    $sql = "UPDATE appointment_tbl SET status = 'accepted' WHERE app_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bind_param('i', $app_id);

    if ($stmt->execute()) {
        // Redirect back to the appointment page with a success message
        header("Location: tables.php?status=success");
       // exit();
    } else {
        echo "Error accepting the appointment: " . $pdo->error;
    }

    $stmt->close();
} else {
    echo "No appointment ID provided!";
	
}


?>