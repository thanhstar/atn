<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Account</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              include('conn.php');

              $query = "SELECT id FROM users ORDER BY id";
              $query_run = mysqli_query($conn,$query);

              $row = mysqli_num_rows($query_run);

              echo '<h4> Total Account:'.$row.'</h4>';
              ?>
      

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Song</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              include('conn.php');

              $query = "SELECT song_id FROM song ORDER BY song_id";
              $query_run = mysqli_query($conn,$query);

              $row = mysqli_num_rows($query_run);

              echo '<h4> Total song:'.$row.'</h4>';
              ?>
      
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Singers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              include('conn.php');

              $query = "SELECT singer_id FROM singer ORDER BY singer_id";
              $query_run = mysqli_query($conn,$query);

              $row = mysqli_num_rows($query_run);

              echo '<h4> Total singer:'.$row.'</h4>';
              ?>
      
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Genres</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              include('conn.php');

              $query = "SELECT genre_id FROM genre ORDER BY genre_id";
              $query_run = mysqli_query($conn,$query);

              $row = mysqli_num_rows($query_run);

              echo '<h4> Total genre:'.$row.'</h4>';
              ?>
              </div>
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