<?php 
session_start();
include("db_con.php");
include("function.php");

//$user_data =check_login($pdo);

?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Holy Child Medical Clinic</title> 
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link
    rel="shortcut icon"
    href="assets/image/logooo.png"
    type="image/x-icon"/>



  
  </head>
<body>
  <nav>

    <div class="menu">
      <div class="logo">
      
        
        <a href="user_homepage">Holy Child Medical Clinic</a>
      </div>
      <ul>
        <li><a href="user_homepage.php">Home</a></li>
        <form class="function.php">
        <button class="btn btn-primary" name="logout" id="logout" >Log out</button>
        </form>
       
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title"> Holy Child Medical Clinic </div>
    <div class="sub_title"> Appointment System</div>
    <div class="btns">
      <a href="appointment.php">
      <button>Make an Appointment</button>
    </div>
  </div>

  <footer class="footer">
  <div class="footer-content">
    <p>&copy; 2024 HOLY CHILD MEDICAL CLINIC. All rights reserved.</p>
    <nav class="footer-nav">
      
      <a href="/privacy">Privacy Policy</a> | 
      
    </nav>
  </div>
</footer>





</body>
</html

