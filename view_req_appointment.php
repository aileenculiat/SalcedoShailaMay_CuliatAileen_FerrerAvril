<?php require 'db_con.php'; ?>
<?php require 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - user view request</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>
    <body class="sb-nav-fixed">
    

    <div class="card-body">
        <?php 
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2>'.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2>'.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
                            
                            <div class="  table-responsive">

                            <?php   
                            $pdo = mysqli_connect("localhost", "root", "", "appointment");

                            $query ="SELECT * FROM appointment_tbl";
                            $stmt =mysqli_query($pdo,$query);
                            
                            
                            ?>

                                <h2>VIEW APPOINTMENT REQUEST</h2>
                            
                                <table class="table table-bordered" width ="100%" cellspacing= "0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
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
                                                <a href="edit_appointment.php?app_id=<?= $user['app_id']?>" class="btn btn-sm btn-success">Edit</a>
                                                <a href="function.php?delete_record=<?= $user['app_id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>

                                                </td>

                                           
                                                
                                             
                                                
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                        </table>
                            </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
