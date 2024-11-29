<?php 

require 'db_con.php';
require 'access.php';
//$pdo = mysqli_connect("localhost", "root", "", "appointment");


//function for appointment form
if(isset($_POST['appointmentSubmit'])){
    $childName = $_POST['childName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];
    $age = $_POST['age'];
    $reason = $_POST['reason'];
   

    $sql = 'INSERT INTO appointment_tbl(childName, dob, parentName,contactNumber,email,appointmentDate,appointmentTime,age,reason) VALUES(:childName, :dob, :parentName,:contactNumber,:email,:appointmentDate,:appointmentTime,:age,:reason)';
    $stmt = $pdo->prepare($sql);

    $data = [
        'childName'=> $childName,
        'dob' => $dob,
        'parentName' => $parentName ,  
        'contactNumber'=> $contactNumber,
        'email' => $email,
        'appointmentDate' => $appointmentDate, 
        'appointmentTime'=> $appointmentTime,
        'age' => $age,
        'reason' => $reason  
    ];
    try {
        $stmt->execute($data);
        // echo 'success!';
        header('Location: user_homepage.php');
        echo 'Appointment Request successfully saved!';
    } catch (PDOException $e) {
        echo 'Error:'. $e->getMessage();
    }
    
}




if (isset($_POST['updateStatus'])) {
    // Retrieve appointment ID and new status from the form (or URL)
    $app_id = $_POST['app_id'];
    $status = $_POST['status'];  // 'accepted' or 'rejected'

    // Validate status input
    if ($status != 'accepted' && $status != 'rejected') {
        echo "Invalid status!";
        exit;
    }

    // Get PDO connection
    $pdo = getPDOConnection();  // Assuming you already have the function to get the PDO connection

    // Call the function to update the status
    $result = updateAppointmentStatus($pdo, $app_id, $status);

    // Output result
    echo $result;  // Display success or error message
}






// edit function
if(isset($_POST['updateAppointment'])){

    $app_id = $_POST['app_id'];
    $childName = $_POST['childName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];
    $age = $_POST['age'];
    $reason = $_POST['reason'];

    $sql = 'UPDATE appointment_tbl SET childName= :childName,dob=:dob,parentName=:parentName,contactNumber=:contactNumber ,email=:email,appointmentDate=:appointmentDate,appointmentTime=:appointmentTime, age=:age,reason=:reason  WHERE app_id =:app_id';
    $stmt = $pdo->prepare($sql);

    $data = [
        'app_id' => $app_id ,
        'childName' => $childName,
        'dob' => $dob,
        'parentName' => $parentName,
        'contactNumber'=> $contactNumber,
        'email' => $email,
        'appointmentDate' => $appointmentDate,
        'appointmentTime' => $appointmentTime  ,
        'age' => $age,
        'reason'=> $reason,
    ];
    try {
        $stmt->execute($data);
         echo 'success!';
        header('Location: view_req_appointment.php');
    } catch (PDOException $e) {
        echo 'Error:'. $e->getMessage();
    }

}


//login

/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputUsername = trim($_POST['username']);
    $inputPassword = trim($_POST['password']);

    // Validate input
    if (!empty($inputUsername) && !empty($inputPassword)) {
        // Prepare and execute query
        $stmt = $pdo->prepare('SELECT id, username, password FROM users WHERE username = :username');
        $stmt->bindParam(':username', $inputUsername);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if ($user && password_verify($inputPassword, $user['password'])) {
            // Store user info in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to protected page
            header('Location: dashboard.php');
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
    close();
}*/




    //galing kay sir na function ng log in at sig

    
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        $sql = 'INSERT INTO users_table(username,email, password) VALUES(:username,:email,:password)';
        $stmt = $pdo->prepare($sql);
    
        $dataTobeInserted = [
            'username'=> $username,
            'email' => $email,
            'password' => $password    
        ];
       
        if (checkUsernameIfExist($username, $pdo) == true) {
            echo 'username already exist!';
            
        }else{
            try {
                $stmt->execute($dataTobeInserted);
                header("Location: login.php");
            } catch (PDOException $e) {
                echo "Error: ". $e->getMessage();
                
            }
        }
    }
    
    
    //login process after submitting the form in our login pages
    //test whether the name login is set or not null
    if (isset($_POST["login"])) {
    
        //declartion of variables that will hold the users input
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // selecting record in database based on the inputted email
        $sql = 'SELECT * FROM users_table WHERE username = :username';
        $stmt = $pdo->prepare($sql);
        $data = ['username'=> $username];
        $stmt->execute($data);
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
        //get the result and assign in $row variable
        $row = $stmt->fetch();
    
        //test whether there is have a record and verify the inputted password if matched
        if ($row && password_verify($password, $row['password'])) {
    
            //setting up the session for username and used id
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            
    
            //page where you will be redirected if successfully login
            header('Location: user_homepage.php');
            exit();
        } else {
            echo 'Invalid username or password!';
            exit();
            
    
        }
    }

/** 
    if(isset($_GET['logout'])) {
        // Start the session 
        session_start(); 
        
        // Unset all session variables 
        $_SESSION = array(); 
    
        // Destroy the session 
        session_destroy();
    
        //Page that you will be taken to after clicking the logout button
        header('Location: login.php');
    }*/
    
    
//deleting records
    if(isset($_GET['delete_record'])){

        $id = $_GET['delete_record'];
    
        $sql = 'DELETE FROM appointment_tbl WHERE app_id = :app_id';
        $stmt = $pdo->prepare($sql);
    
        $data = [
            'app_id' => $app_id    
        ];
        try {
            $stmt->execute($data);
            // echo 'success!';
            header('Location: login.php');
        } catch (PDOException $e) {
            echo 'Error:'. $e->getMessage();
        }
    
    }





    



    ?>














