<?php
include('connection.php');
include('recip_header.php');
include('recip_navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

  </div>
  <div class="row">

    <!-- Blood -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">A positive</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'A+' ORDER BY donor_id ";
                $query_run = mysqli_query($conn, $query);

                $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
              </div>
            </div>
            <div class="col-auto">
              <h4> A+ </h4>
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
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">A negative</div>
              <?php
              $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'A-' ORDER BY donor_id ";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);
              ?>
              <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <h4> A- </h4>
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
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">B positive</div>
              <div class="row no-gutters align-items-center">
                <?php
                $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'B+' ORDER BY donor_id ";
                $query_run = mysqli_query($conn, $query);

                $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
                <div class="col">
                </div>
              </div>
            </div>
            <div class="col-auto">
              <h4> B+ </h4>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">B negative</div>
              <?php
              $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'B-' ORDER BY donor_id ";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);
              ?>
              <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <h4> B- </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Row 2 -->
  <div class="row">

    <!-- Blood -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">O negative</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'O-' ORDER BY donor_id ";
                $query_run = mysqli_query($conn, $query);

                $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
              </div>
            </div>
            <div class="col-auto">
              <h3> O- </h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">O positive</div>
              <?php
              $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'O+' ORDER BY donor_id ";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);
              ?>
              <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <h4> O+ </h4>
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
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">AB negative</div>
              <div class="row no-gutters align-items-center">
                <?php
                $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'AB-' ORDER BY donor_id ";
                $query_run = mysqli_query($conn, $query);

                $row = mysqli_num_rows($query_run);
                ?>
                <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
                <div class="col">
                </div>
              </div>
            </div>
            <div class="col-auto">
              <h4> AB- </h4>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">AB positive</div>
              <?php
              $query = "SELECT blood_type FROM `donor` WHERE  blood_type = 'AB+' ORDER BY donor_id ";
              $query_run = mysqli_query($conn, $query);

              $row = mysqli_num_rows($query_run);
              ?>
              <h4><?php echo '<h1>' . $row . '</h1>'; ?></h4>
            </div>
            <div class="col-auto">
              <h3> AB+ </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <?php
  include('recip_scripts.php');
  include('recip_footer.php');
  ?>