<?php
include('lab_header.php'); 
include('lab_navbar.php'); 
?>

<?php

include('../Admin/connection.php');


$donor = mysqli_query($conn, "SELECT * FROM lab where status='Negative' or status='Positive'");
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
        		<th>Result</th>
        	</tr>
        	<?php while ($row = mysqli_fetch_array($donor)) {  ?>
        	<tr>
        		<td><?php echo $row['labid']; ?> </td>
        		<td><?php echo $row['donor_id']; ?> </td>
        		<td><?php echo $row['fullname']; ?> </td>
        		<td><?php echo $row['gender']; ?> </td>
        		<td><?php echo $row['blood_type']; ?> </td>
        		<td><?php echo $row['unit']; ?> </td>
        		<td><?php echo $row['status']; ?></td>
        	</tr>
        	<?php } ?>
        </table>
    </div>
</div>



<?php
include('lab_scripts.php');
include('lab_footer.php');
?>

