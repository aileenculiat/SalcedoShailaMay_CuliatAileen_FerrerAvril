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
    <title> pedia appointment system</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="feedback.php">FEEDBACK</a>
      </div>
      <ul>
        <li><a href="homepage.php">Home</a></li>      
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div title ="center">feedback</div>
    <div class="title">REVIEWS AND FEEDBACK</div>
      <p> good reviews and feedback </p>
    </div>
  </div>
</body>
</html