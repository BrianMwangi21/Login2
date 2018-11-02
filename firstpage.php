<?php
  session_start();

  include("db.php");
  if( isset($_POST['submitjob']) ) {
      $joboffered = $_POST["JobOffered"];
      $jobdetails = $_POST["JobDetails"];
      $contactus = $_POST["Contacts"];
      $dateposted = $_POST["DatePosted"];

      $query = "INSERT INTO  jobinfo ( joboffered, jobdetails, contacts, dateposted) VALUES ('$joboffered' ,'$jobdetails', '$contactus', '$dateposted')";
      $result = mysqli_query($connection, $query);

      if( $result ) {
        //
      }else {
        echo "Failed";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FADES - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">FADES</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          &nbsp
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="firstpage.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <?php

          if( $_SESSION['UserType'] == 'actor' ) {

        ?>

        <li class="nav-item">
          <a class="nav-link" href="viewjobs.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Jobs</span></a>
        </li>

        <?php

          }else {

        ?>

        <li class="nav-item">
          <a class="nav-link" href="viewactors.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Actors</span></a>
        </li>

        <?php

          }

        ?>

        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Profile</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">11 New Tasks!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Welcome
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <p>
                Hello there, welcome to your portal.<br><br>

                Head over to the profile page to refine your profile and make any necessary changes.<br>
                Click 'View Actors' to view all the actors in the system.
                </p>
                
              </div>
            </div>
          </div>

          <?php

            if ( $_SESSION['UserType'] != 'actor' ) {

              ?>

              <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Post Job
            </div>
            <div class="card-body">

                <form method="POST">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="firstName" name="JobOffered" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                        <label for="firstName">Job Offered</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="lastName" name="JobDetails" class="form-control" placeholder="Last name" required="required">
                        <label for="lastName">Job Details</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="text" id="firstName" name="Contacts" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                        <label for="firstName">Contacts</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-label-group">
                        <input type="date" id="lastName" name="DatePosted" class="form-control" placeholder="Last name" required="required">
                        <label for="lastName">Date Posted</label>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submitjob" >Post Job</button>
              </form>
                
              
            </div>
          </div>

              <?php
            }

          ?>


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © FADES 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
