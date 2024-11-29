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
    <title> About Us</title> 
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   
    <link
    rel="shortcut icon"
    href="assets/image/logooo.png"
    type="image/x-icon"/>
  
  </head>
   <style>
   body {
  margin: 0;
}

.header {
  background-color: rgb(142, 142, 147);
  display: flex;
  align-items: baseline;
  padding: .5rem;
  gap: 1rem;
  justify-content: flex-end;
}

.logo img {
    position: relative;
    width: 185px;
    float:left;
    margin-top:59px;
    cursor: pointer;
    position: fixed;
    height: auto;
    top: 0px;
    left: 30px;
    max-height: 500px;
    max-width: 350px;
    }
  .footer {
  background-color: #3373C4; /* Light grey background */
  color: #333; /* Dark text */
  text-align: center;
  padding: 20px 10px;
  border-top: 1px solid #ddd; /* Optional border */
  font-size: 14px;
}

.footer-content a {
  color:black; /* Blue links */
  text-decoration: none;
  margin: 0 5px;
}

.footer-content a:hover {
  text-decoration: underline;
}

   
</style>

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
    <h1>About Us</h1>
  <div class="header">
        <div class="logo">
        <img src="assets/image/logooo.png" alt="logo"></div>
        <h2>HOLY CHILD MEDICAL </h2>
  <div class="title">HOLY CHILD MEDICAL CLINIC</div>
      
      <p> Holy Child Medical Clinic is a health facility that provides care and preventive services for children. It is located at Cor. Guiho St. and Roxas Dr., Brgy. Sto. Niño, Calapan, Philippines, 5200.
        
      </p>
    </div>
  </div>
  <footer class="footer">
  <div class="footer-content">
    <p>&copy; 2024 YourWebsiteName. All rights reserved.</p>
    <nav class="footer-nav">
      <a href="/about">About</a> | 
      <a href="/privacy">Privacy Policy</a> | 
      <a href="/contact">Contact</a>
    </nav>
  </div>
</footer>

</body>
</html