<?php
include('lab_header.php'); 
include('lab_navbar.php'); 
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

               <h4>Total Donors: 22</h4>

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
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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
include('lab_scripts.php');
include('lab_footer.php');
?>