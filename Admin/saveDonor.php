<?php
include('connection.php');


session_start();

if (isset($_POST['Register'])) {

    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $job = $_POST['job'];
    $Mstatus = $_POST['Mstatus']; 
    $blood_type = $_POST['blood_type'];
    $email = $_POST['email'];
    $contact =  $_POST['contact'];

    $q = "INSERT INTO `donor`(`full_name`, `gender`, `job`, `martial_status`, `blood_type`, `email`, `contact_no`) 
    VALUES 
    ('$fname','$gender','$job','$s','$blood_type','$email','$contact')";


    if (!mysqli_query($conn, $q)) {
        die(" failed to insert row " . mysqli_error($conn));
    }
} else
    die();
?>
	   <?php echo '<script type="text/javascript"> alert(" Inserted successfully...")</script>'; ?> 
	   
<?php
header('location:donor.php');

?>
