
<?php require 'db_con.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

  <link
    rel="shortcut icon"
    href="assets/image/logooo.png"

    type="image/x-icon"/>
</head>
<style>
  /* Importing Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  background: url('assets/image/ped.jpeg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
  
}

.wrapper {
  max-width: 400px;
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
}

.wrapper .title {
  height: 80px;
  background: #3373C4;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper form {
  padding: 40px 35px;
}

.wrapper form .row {
  height: 60px;
  margin-top: 15px;
  position: relative; /* */
}

.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 70px;
  border-radius: 3px;
  border: 1px solid lightgrey;
  font-size: 18px;
  transition: all 0.3s ease;
}

form .row input:focus {
  border-color: #3373C4;
}

form .row input::placeholder {
  color: #999;
}

.wrapper form .row i {
  position: absolute;
  width: 55px;
  height: 100%;
  color: #fff;
  font-size: 22px;
  background: #3373C4;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.wrapper form .pass {
  margin-top: 12px;
}

.wrapper form .pass a {
  color: #3373C4;
  font-size: 17px;
  text-decoration: none;
}

.wrapper form .pass a:hover {
  text-decoration: underline;
}

.wrapper form .button input {
  margin-top: 10px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #3373C4;
  border: 1px solid #3373C4;
  cursor: pointer;
  width: 330px;
  height: 70%;
}

form .button input:hover {
  background: #0D3B6E;
}

.wrapper form .signup-link {
  text-align: center;
  margin-top: 13px;
  font-size: 17px;
}

.wrapper form .signup-link a {
  color: #3373C4;
  text-decoration: none;
}

form .signup-link a:hover {
  text-decoration: underline;
}

  </style>
<body>
<div class="container mt-3">
<div class="container pt-5">
  <div class="wrapper">
    <div class="title"><span>Sign up</span></div>
    <form action="function.php" method="post">
      <div class="row">
        <i class="fas fa-user"></i>

            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div>
        <div class="row">
        <i class="fas fa-user"></i>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div>
        
        <div class="row">
        
        <i class="fas fa-lock"></i>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="row button">
        <input type="submit" name="signup" value ="Sign Up" class="btn btn-primary"></button>
        <div class="signup-link">Already have an account?  <a href="login.php">Login</a></div>
    
      </div>
    </form>
</div>

</body>
</html>