<?php
include('includes/header.php');
include('includes/navbar.php');
include('connection.php');
?>

<?php

include('../Admin/connection.php');


$donor = mysqli_query($conn, "SELECT * FROM lab where status='Negative' or status='Positive'");
?>

<div class="container-fluid">
    <h2>Lab Result</h2>
    
    <div class="card shadow mb-4">
    <div class="card-body">

<div class="table-responsive">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Result</th>
      
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($donor)) {  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['labid']; ?></th>
      <td><?php echo $row['fullname']; ?></td>
      <td><?php echo $row['status']; ?></td>
     
    </tr>
   
  </tbody>
  <?php } ?>
</table>


</div>
    </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>