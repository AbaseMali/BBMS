<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container">
    <div class="card text-center " style="width: 60rem; height:40rem;">
        <img class="card-img-top rounded" style="width: 10rem;" src="img/pro1.png " alt="donor profile">
        <div class="card-body">
            <h5 class="card-title">Hassan Jama</h5>
            <p class="card-text">Welcome to profile of < Hassan Jama >
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">M</li>
            <li class="list-group-item">Student</li>
            <li class="list-group-item">Single</li>
            <li class="list-group-item">O+</li>
            <li class="list-group-item">jama@gmail.com</li>
            <li class="list-group-item">+987976878</li>
        </ul>
        <div class="card-body">
           

                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            ...
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#sendToLab">
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