<?php require 'db_con.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pediatric Clinic Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('assets/image/ped.jpeg')no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            width: 45%;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        button {
            background-color: #3373C4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0047AB;
        }
    </style>
</head>
<body>

<?php 

if(isset($_SEESION['success']) && $_SEESION['success'] !='' ){

    echo $_SEESION['success'];
    unset( $_SEESION['success']);
}
if(isset($_SEESION['status']) && $_SEESION['status'] !='' ){

    echo $_SEESION['status'];
    unset( $_SEESION['status']);
}



?>
    <h2>Pediatric Clinic Appointment Form</h2>
    <form action="function.php" method="post">
        <div class="form-container">
            <!-- Left Section -->
            <div class="form-section">
                <h3>Patient Information</h3>
                <label for="childName">Child's Full Name:</label>
                <input type="text" id="childName" name="childName" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="parentName">Parent/Guardian's Full Name:</label>
                <input type="text" id="parentName" name="parentName" required>

                <label for="contactNumber">Contact Number:</label>
                <input type="tel" id="contactNumber" name="contactNumber" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <!-- Right Section -->
            <div class="form-section">
                <h3>Appointment Details</h3>
                <label for="appointmentDate">Preferred Appointment Date:</label>
                <input type="date" id="appointmentDate" name="appointmentDate" required>

                <label for="appointmentTime">Preferred Time:</label>
                <input type="time" id="appointmentTime" name="appointmentTime" required>

                <label for="age">Age:</label>
                <input type="age" id="age" name="age" required>

                <label for="reason">Reason for Visit:</label>
                <textarea id="reason" name="reason" rows="4" placeholder="Describe the reason for the visit..." required></textarea>

                <button type="submit" name="appointmentSubmit" id="appointmentSubmit">Submit Appointment</button>
                <button type="submit" ><a href ="user_homepage.php">Back to home</button>
            </div>
        </div>
    </form>
</body>
</html>
