<?php
// Include necessary files for database connection and functions
require 'db_con.php'; // Make sure to include the file where the PDO connection and update functions are defined
require 'access.php';
// Check if the form was submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure the necessary POST parameters are set (appointment_id and status)
    if (isset($_POST['app_id']) && isset($_POST['status'])) {
        $app_id = $_POST['app_id'];  // The appointment ID passed from the form
        $status = $_POST['status'];  // Either 'accepted' or 'rejected'

        // Validate status
        if ($status !== 'accepted' && $status !== 'rejected') {
            echo "Invalid status!";
            exit; // Exit if status is not valid
        }

        // Get PDO connection (assuming you have a function for this)
        $pdo = getPDOConnection();

        // Call the function to update the status of the appointment
        $result = updateAppointmentStatus($pdo, $app_id, $status);

        // Display the result of the update
        echo $result;
    } else {
        echo "Missing appointment ID or status.";
    }
} else {
    // If the request method is not POST, display an error message
    echo "Invalid request method!";
}

// Function to update the appointment status
function updateAppointmentStatus($pdo, $app_id, $status) {
    // SQL query to update the appointment status
    $sql = "UPDATE appointment_tbl SET status = :status WHERE app_id = :app_id";

    try {
        // Prepare the statement
        $stmt = $pdo->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':app_id', $app_id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            return "Appointment status successfully updated to '{$status}'.";
            header(Location: 'tables.php');
        } else {
            return "No rows were updated. Check the appointment ID or current status.";
        }
    } catch (PDOException $e) {
        // Catch any SQL errors and display them
        return "Error updating status: " . $e->getMessage();
    }
}
?>
