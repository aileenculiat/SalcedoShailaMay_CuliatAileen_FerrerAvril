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
    <title>Servicess</title> 
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  
    <link
    rel="shortcut icon"
    href="assets/image/logooo.png"
    type="image/x-icon"/>
    <style>
  
.header {
  background-color: rgb(142, 142, 147);
  display: center;
  align-items: baseline;
  padding: .3rem;
  gap: 1rem;
  justify-content: flex-end;
  padding: 35px;
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
    <h1>Our Services</h1>
  <div class="header">
  <h3>Dr. Umali, Glenda Marquez</h3>
  <h4>Pediatrics/Internal Medicine/Gastroenterology</h4>

  <br>
      <p>Package 1 : Blood Chem for ₱999.00</p>
      <p>Package 2 : Blood Chem Urinalysis for ₱1050.00 </p>
      <p>Package 3 : Blood Chem CBC for ₱1300.00 </p>
      <p>Package 4 : Blood Chem Urinalysis CBC for ₱1375.00 </p>
      <p>Package 5 : Blood Chem Urinalysis HBA1C CBC for ₱1050.00 </p>
 <br>
      <p>
        Release of Results: 1pm a the entrance</p>
        <p>
        Results may also be released through gmail or messenger</p>
        <p>
        Blood Chemistry includes: FBS, SGPT, Lipid Profile, Uric Acid, Creatinine</p>
        <p>
        FASTING IS REQUIRED : 10-12 HOURS</p>
      </div>
  </div>
</body>
</html