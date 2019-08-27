<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connection.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
  </div>

  <!-- Content Row -->
  <div class="row">

    
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Donors</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php 
                    $query = "SELECT donor_id FROM `donor` ORDER BY donor_id ";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($query_run);
                ?>
               <h4><?php  echo '<h1>' .$row. '</h1>'; ?></h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-diagnoses fa-2x text-gray-300"></i> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Blood Requests</div>

              <?php 
                    $query = "SELECT request_id FROM `request` ORDER BY request_id ";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($query_run);
                ?>

                <h4><?php  echo '<h1>' .$row. '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
            <!-- The icon is gonna be here -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lab Results</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                <?php 
                    $query = "SELECT * FROM `lab` WHERE status = 'positive' or status = 'negative'";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($query_run);
                ?>
                 <h4><?php  echo '<h1>' .$row. '</h1>'; ?></h4>
                </div>
                <div class="col">
             
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin Users</div>

              
              <?php 
                    $query = "SELECT * FROM `users` WHERE type_of_user = 'Admin' ORDER BY user_id ";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php  echo '<h1>' .$row. '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="row">
       
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Recipient Users</div>

              
              <?php 
                    $query = "SELECT * FROM `users` WHERE type_of_user = 'Recipient' ORDER BY user_id ";
                    $query_run = mysqli_query($conn, $query);

                    $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php  echo '<h1>' .$row. '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
   
        </div>

  <!-- Content Row -->

  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>