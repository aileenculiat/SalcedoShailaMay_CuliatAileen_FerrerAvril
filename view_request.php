<?php require 'db_con.php'; ?>

<div class="pagetitle">
  <h1>Requests Information</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-danger" ><a href="appointment_info.php">Home</a></li>
      <li class="breadcrumb-item active">Requests Information</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section>
  <div class="card">

    <div class="card-body">
      <center>
        <h4 class="card-title">Requests Information</h4>
      </center>
      <?php
      $query = $conn->query("SELECT * FROM `appointment_tbl` WHERE `app_id` = '$_REQUEST[app_id]'") or die(mysqli_error($pdo));
      $fetch = $query->fetch_array();

      ?>


      
      <form class="row g-3 needs-validation" method="POST" action="appointment_request.php" enctype="multipart/form-data">

        <div class="col-md-6">
          <label for="UserName" class="form-label">childName</label>
          <input type="text" class="form-control" id="childName" name="childName" value="<?php echo $fetch['childName']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label for="FirstName" class="form-label"> DATE OF BIRTH</label>
          <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $fetch['dob']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="LastName" class="form-label"> Parent/Guardian Name</label>
          <input type="text" class="form-control" id="parentName" name="parentName" value="<?php echo $fetch['parentName']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Email" class="form-label">Email</label>
          <input class="form-control" type="text" id="Email" name="Email" value="<?php echo $fetch['Email']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Contact" class="form-label">Contact</label>
          <input class="form-control" type="text" id="contactNumber" name="contactNumber" value="<?php echo $fetch['contactNumber']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Birthdate" class="form-label"> Appointment Date</label>
          <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" value="<?php echo $fetch['appointmentDate']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Age" class="form-label"> Appointment Time</label>
          <input type="text" class="form-control" id="appointmentTime" name="appointmentTime" value="<?php echo $fetch['appointmentTime']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Country" class="form-label">Age</label>
          <input type="text" class="form-control" id="age" name="age" value="<?php echo $fetch['age']; ?>" readonly>
        </div>

        <div class="col-md-6">
          <label for="Country" class="form-label">Reason of appointment</label>
          <input type="text" class="form-control" id="reason" name="reason" value="<?php echo $fetch['reason']; ?>" readonly>
        </div>


        <br /> <br /> <br /> <br />
        <button name="back" type="submit" class="btn btn-primary btn-user btn-block" href="appointment_request.php">Back</button>

      </form><!-- End Leave Form -->

      
    </div>
  </div>

  </div>
</section>

