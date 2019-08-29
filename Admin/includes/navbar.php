    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary   sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon ">
      <!-- <i class="fas fa-laugh-wink"></i> -->
      <img src="img/hush.png" width="50rm" height="50rm" alt="no">
    </div>
    <div class="sidebar-brand-text mx-3">Blood <sup>Bank</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>



  <li class="nav-item">
    <a class="nav-link" href="donor.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Donors</span></a>
  </li>



  <li class="nav-item">
    <a class="nav-link" href="requests.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Requests</span></a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="users.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Users</span></a>
  </li>

  
  <li class="nav-item">
    <a class="nav-link" href="labResult.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Lab results</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="report.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Report</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

  </ul>
  <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-white-600 ">
                    
                ADMIN
                    
                  </span>
                  <img class="img-profile rounded-circle" src="img/pro1.png">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->


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

            <form action="../logout.php" method="POST"> 
            
              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

            </form>


          </div>
        </div>
      </div>
    </div>