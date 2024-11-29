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
      
        
        <a href="#">Holy Child Medical Clinic</a>
      </div>
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        
        <li><a href="signup.php">Sign up</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title"> Holy Child Medical Clinic </div>
    <div class="sub_title"> Appointment System</div>
    <div class="btns">
      <a href="login.php">
      <button>Make an Appointment</button>
    </div>
  </div>

  <footer class="footer">
  <div class="footer-content">
    <p>&copy; 2024 HOLY CHILD MEDICAL CLINIC. All rights reserved.</p>
    <nav class="footer-nav">
      <a href="/about">About</a> | 
      <a href="/privacy">Privacy Policy</a> | 
      <a href="/contact">Contact</a>
    </nav>
  </div>
</footer>





</body>
</html

