<?php
include('includes/header.php');
include('includes/navbar.php');
include('connection.php');
?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Blood group</th>
                            <th>Date and time</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>Unit</th>
                            <th> Action</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        $res = mysqli_query($conn, "SELECT * FROM request");
                        $date = date('Y/m/d H');
                        $i = 1;
                        while ($user = mysqli_fetch_array($res)) {
                           
                            echo "

                            <tr>

                            <td> {$user['request_id']}</td>
                            <td> {$user['name']}</td>
                            <td> {$user['gender']}</td>
                            <td> {$user['blood_group']}</td>
                            <td> $date</td>
                            <td> {$user['phone']}</td>
                            <td> {$user['email']}</td>
                            <td> {$user['hospital']}</td>
                            <td> {$user['unit']}</td>
                            <td> <a href='requests.php?id={$user['request_id']}'  class=\"btn btn-success\">Confirm</a></td>  
                            <td> <a href='requests.php?id={$user['request_id']}'  class=\"btn btn-danger\" onclick = 'return confirm(\"Are you You sure\")' >Reject</a></td>
                            
                            </tr>

                            ";
                                                        $i++;
                                                    }
                                                    ?>

                    </tbody>
                </table>
                <?php 



                 ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>