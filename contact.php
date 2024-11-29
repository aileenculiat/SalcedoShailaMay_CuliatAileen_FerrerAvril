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
    <title>Contacts</title> 
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
    <link
    rel="shortcut icon"
    href="assets/image/logooo.png"

    type="image/x-icon"/>
    <style>
   body {
  margin: 0;
  
}

.header {
  background-color: rgb(142, 142, 147);
  display: center;
  align-items: baseline;
  padding: .3rem;
  gap: 1rem;
  justify-content: flex-end;
  padding: 35px;
}
.logo img {
    position: relative;
    width: 80px;
    float:left;
    margin-top:57px;
    cursor: pointer;
    position: fixed;
    height: auto;
    top: 0px;
    left: 400px;
    max-height: 300px;
    max-width: 350px;
    }
    
</style>

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
    <h1>Contacts</h1>
  <div class="header">
  <div class="logo">
        <img src="assets/image/logooo.png" alt="logo"></div>
       
      <p>Phone Number: 0922 871 2491</p>
      <p>Email: holychildmedicalclinic@gmail.com </p>
    </div>
  </div>
</body>
</html