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

<div class="container mt-3">
    <h2>Update record</h2>

    <?php
        if(isset($_GET['app_id'])) {
           
            $id = $_GET['app_id'];

            $sql = "SELECT * FROM appointment_tbl WHERE app_id = $id";
            $stmt = $pdo->query($sql);
            $appointment_tbl = $stmt->fetch();

        }
    
    ?>
    
    <form action="function.php" method="post">

        <input type="hidden" name="app_id" value="<?=$appointment_tbl['app_id']?>">
        <div class="mb-3 mt-3">
            <label for="childName" class="form-label">Child Name:</label>
            <input type="text" class="form-control" id="childName" value="<?=$appointment_tbl['childName'];?>"  placeholder="Enter Enter child's name" name="childName">
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth:</label>
            <input type="text" class="form-control" id="dob" value="<?=$appointment_tbl['dob'];?>"  placeholder="Enter Birhtday" name="dob">
        </div>

    
        <div class="mb-3 mt-3">
            <label for="parentName" class="form-label">Parent/Guardian NAme:</label>
            <input type="text" class="form-control" id="parentName" value="<?=$appointment_tbl['parentName'];?>"  placeholder="Enter Parent/Guardian Name" name="parentName">
        </div>

        <div class="mb-3">
            <label for="contactNumber" class="form-label">Contact Number:</label>
            <input type="text" class="form-control" id="contactNumber" value="<?=$appointment_tbl['contactNumber'];?>"  placeholder="Enter Contact Number" name="contactNumber">
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email"  value="<?=$appointment_tbl['email'];?>" placeholder="Enter email" name="email">
        </div>

        <div class="mb-3">
            <label for="appointmentDate" class="form-label">Appointment Date:</label>
            <input type="date" class="form-control" id="appointmentDate" value="<?=$appointment_tbl['appointmentDate'];?>"  placeholder="Enter Appointment Date" name="appointmentDate">
        </div>

        <div class="mb-3 mt-3">
            <label for="appointmentTime" class="form-label">Appointment Time:</label>
            <input type="time" class="form-control" id="appointmentTime" value="<?=$appointment_tbl['appointmentTime'];?>"  placeholder="Enter Appointment Time" name="appointmentTime">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="text" class="form-control" id="age" value="<?=$appointment_tbl['age'];?>"  placeholder="Enter age" name="age">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="reason" class="form-label">reason:</label>
            <input type="text" class="form-control" id="reason"  value="<?=$appointment_tbl['reason'];?>" placeholder="Enter reason" name="reason">
        </div>
       
        <button type="submit" name="updateAppointment" id="updateAppointment" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>