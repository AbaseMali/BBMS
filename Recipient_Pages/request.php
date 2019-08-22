<?php
include('recip_header.php');
include('recip_navbar.php');
include('connection.php');
?>


<?php
include('needBlood.php')
?>
<div class="container-fluid">
    <h2>Request blood</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Request Blood
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#needBlood">
                    Request
                </button>
            </h6>
        </div>
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
                            <td> <a href='updateForm.php?id={$user['request_id']}'  class=\"btn btn-success\">UPDATE</a></td>  
                            
                            </tr>

                            ";
                                                        $i++;
                                                    }
                                                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


<?php
include('recip_scripts.php');
include('recip_footer.php');
?>