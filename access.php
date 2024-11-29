<?php


require 'db_con.php';









function checkUsernameIfExist($username,$pdo) {
    $sql = "SELECT * FROM users_table WHERE username= :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username'=> $username]);

    if($stmt->rowCount() > 0) {
        return true;
        
    } else {
        return false;
       
    }
}




// functions.php

// Function to get PDO connection
function getPDOConnection() {
    $host = 'localhost'; // or your database host
    $db   = 'appointment';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}




// functions.php

// Function to update the appointment status

// functions.php

// Function to update the appointment status
/**function updateAppointmentStatus($pdo, $app, $status) {
    // Ensure the status is either accepted or rejected
    if ($status !== 'accepted' && $status !== 'rejected') {
        return "Invalid status!";
    }

    // Prepare SQL to update the status in the database
    $sql = "UPDATE appointment_tbl SET status = :status WHERE app_id = :app_id AND status = 'pending'";

    try {
        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);
        $stmt->bindParam(':app_id', $app_id, PDO::PARAM_INT);
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            return "Appointment status successfully updated to '{$status}'.";
        } else {
            return "No pending appointment found or status already updated.";
        }
    } catch (PDOException $e) {
        return "Error updating status: " . $e->getMessage();
    }
}**/
?>





