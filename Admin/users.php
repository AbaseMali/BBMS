<?php
include('includes/header.php');
include('includes/navbar.php');
include('connection.php');
?>

<?php
include('adduser.php')
?>

<div class="container-fluid">
    <h2>Users</h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add user
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduser">
                    Add User
                </button>
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Contact</th>
                            <th>Type of user</th>
                            <th>Action</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Where data comes or the table cells -->
                  

                    </tbody>
                    <?php 
$res=mysqli_query($conn,"SELECT * FROM users ");
$i=1;
while ( $user=mysqli_fetch_array($res)) {
echo "

<tr>

<td> {$user['user_id']}</td>
<td> {$user['name']}</td>
<td> {$user['username']}</td>
<td> {$user['email']}</td>
<td> {$user['password']}</td>
<td> {$user['contact']}</td>
<td> {$user['type_of_user']}</td>
<td> <a href='updateForm.php?id={$user['user_id']}'  class=\"btn btn-success\">UPDATE</a></td>  
<td> <a href='deleteForm.php?id={$user['user_id']}' class=\"btn btn-danger\" onclick = 'return confirm(\"Are you You sure\")' >DELETE</a></td>



</tr>

";
$i++;
}
 ?>





                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>