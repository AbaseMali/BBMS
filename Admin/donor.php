<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <button type="button" class="btn btn-warning px-md-5  " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Donor</button>
  </div>
  
 
  <?php
  include('donorRegistrationForm.php');

  ?>

  <?php
  include('donorList.php');

  ?>


</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>