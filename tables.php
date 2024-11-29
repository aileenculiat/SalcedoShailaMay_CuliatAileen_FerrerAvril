
<?php require 'db_con.php'; ?>
<? 
require 'access.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - PAS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    

    <div class="card mb-4">
                            
                            <div class="table-responsive">
                                <h2>APPOINTMENT RECORD</h2>
                                <form action="processAppointmentStatus.php" method="post">
                                <table class="table table-bordered" width ="100%" cellspacing= "0">
                                        <thead>
                                            <tr>
                                                <th>Appointment Id</th>
                                                <th>PATIENT'S FULLNAME</th>
                                                <th>DATE OF BIRTH</th>
                                                <th>PARENT/GUARDIAN FULLNAME</th>
                                                <th>CONTACT NUMBER</th>
                                                <th>EMAIL</th>
                                                <th>PREFERRED APPOINTMENT DATE</th>
                                                <th>PREFERRED APPOINTMENT TIME</th>
                                                <th>AGE </th>
                                                <th>REASON FOR VISIT</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <?php 
                                            $sql = 'SELECT * FROM appointment_tbl';
                                            $users = $pdo->query($sql);
                                        ?>
                                        <tbody>
                                            <?php foreach($users as $user): ?>
                                            <tr>
                                                <td><?= $user['app_id']?></td>
                                                <td><?= $user['childName']?></td>
                                                <td><?= $user['dob']?></td>
                                                <td><?= $user['parentName']?></td>
                                                <td><?= $user['contactNumber']?></td>
                                                <td><?= $user['email']?></td>
                                                <td><?= $user['appointmentDate']?></td>
                                                <td><?= $user['appointmentTime']?></td>
                                                <td><?= $user['age']?></td>
                                                <td><?= $user['reason']?></td>
                                                <td><?= $user['status']?></td>

                                                <td>
                                                <form method="POST" action="function.php" >
                                                <input type="hidden" name="app_id" value="1"> <!-- Dynamic appointment ID -->
    
                                                <button  class="btn btn-primary" type="submit" name="status" value="accepted">Accept</button>
                                                <button   class="btn btn-danger" type="submit" name="status" value="rejected">Reject</button>
                                            </form>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                        </table>
                        <button type="submit"  name="back" id="back" class="btn btn-primary"><a href=" index.php">Back</button>
                            </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Holy Child Medical Clinic 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
                                            </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
