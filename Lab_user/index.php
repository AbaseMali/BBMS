<?php  ?>
<?php
include('lab_header.php'); 
include('lab_navbar.php'); 
include('../Admin/connection.php');

?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lab</h1>
  
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-6 mb-4">
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


    <!-- Pending Requests Card Example -->
    <div class="col-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lab Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php 
                    $query = "SELECT labid FROM `lab` ORDER BY labid ";
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
  </div>

  <!-- Content Row -->

  <?php
include('lab_scripts.php');
include('lab_footer.php');
?>