<?php
ob_start();
include('lab_header.php'); 
include('lab_navbar.php'); 
?>
<?php

include('../Admin/connection.php');


$donor = mysqli_query($conn, "SELECT * FROM lab where status='Sended'");
?>
<div class="row  mb-2 mr-5 ml-5 mt-2">
    <div class="col-12">
        <table class="table table-bordered">
        	<tr>
        		<th>Lab ID</th>
        		<th>Donor ID</th>
        		<th>FullName</th>
        		<th>Gender</th>
        		<th>Blood Type</th>
        		<th>Unit</th>
        		<th>Negative</th>
        		<th>Positive</th>
        	</tr>
        	<?php while ($row = mysqli_fetch_array($donor)) {  ?>
        	<tr>
        		<td><?php echo $row['labid']; ?> </td>
        		<td><?php echo $row['donor_id']; ?> </td>
        		<td><?php echo $row['fullname']; ?> </td>
        		<td><?php echo $row['gender']; ?> </td>
        		<td><?php echo $row['blood_type']; ?> </td>
        		<td><?php echo $row['unit']; ?> </td>
        		<td><a class="btn btn-success" href="lab_request.php?labidn=<?php echo $row['labid']; ?>">Negative</a></td>
        		<td><a class="btn btn-danger" href="lab_request.php?labidp=<?php echo $row['labid']; ?>">Positive</a></td>
        	</tr>
        	<?php } ?>
        </table>
        <?php 
        if (isset($_GET['labidn'])) {
        	
        	$labidn = $_GET['labidn'];

        	$sql = mysqli_query($conn,"UPDATE `lab` SET `status`='Negative' WHERE labid='$labidn'");

        	if ($sql) {
        		
        		header("location: lab_result.php");
        	}
        }

         ?>
         <?php 
        if (isset($_GET['labidp'])) {
        	
        	$labidp = $_GET['labidp'];

        	$query = mysqli_query($conn,"UPDATE `lab` SET `status`='Positive' WHERE labid='$labidp'");

        	if ($query) {
        		
        		header("location: lab_result.php");
        	}
        }

         ?>
        </div>
        </div>



<?php
include('lab_scripts.php');
include('lab_footer.php');
?>