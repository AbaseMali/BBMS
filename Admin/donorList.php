<?php
include('connection.php');

$donor = mysqli_query($conn, "SELECT * FROM donor")
?>

<?php while ($row = mysqli_fetch_array($donor)) {  ?>
<div class="row  mb-2 mr-5 ml-5 mt-2">
    <div class="col-12">
        <div class="list-group" id="list-tab" role="tablist">
            <a href="donorProfile.php">
                <li class=" bg-success list-group-item list-group-item-action active text-center " href="" role="tab" aria-controls="Name"><?php echo $row['full_name'] ?></li>
            </a>
        </div>
    </div>
</div>


<?php } ?>