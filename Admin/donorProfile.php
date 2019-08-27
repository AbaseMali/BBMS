<?php
include('includes/header.php');
include('includes/navbar.php');
include('connection.php');


?>

<?php
        if(isset($_GET['donor_id'])){

        $donor_id = $_GET['donor_id'];
           
       $row= mysqli_query($conn,"SELECT * FROM `donor` WHERE donor_id ='$donor_id'");
       while ( $user=mysqli_fetch_array($row)){ ?>



<div class="container">
    <div class="card text-center " style="width: 60rem; height:40rem;">
        <img class="card-img-top rounded" style="width: 10rem;" src="img/pro1.png " alt="donor profile">
        <div class="card-body">
            <h5 class="card-title"><?php echo $user['full_name']?></h5>
            <p class="card-text">Welcome to profile of < <?php echo $user['full_name']?> >
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $user['gender'] ?></li>
            <li class="list-group-item"><?php echo $user['job'] ?></li>
            <li class="list-group-item"><?php echo $user['martial_status'] ?></li>
            <li class="list-group-item"><?php echo $user['blood_type'] ?></li>
            <li class="list-group-item"><?php echo $user['email'] ?></li>
            <li class="list-group-item"><?php echo $user['contact_no'] ?></li>
        </ul>
        <div class="card-body">
           <?php } }?>


                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            ...
                        </div>
                    </div>
                </div>

                <button type="button"  class="btn btn-primary float-right" data-toggle="modal" data-target="#sendToLab" >
                    Send to lab
                </button>
                <?php
                include('sendToLab.php')
                ?>
                           
                           
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>