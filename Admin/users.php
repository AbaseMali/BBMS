<?php
include('includes/header.php');
include('includes/navbar.php');
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
                        <tr>
                            <td> 1 </td>
                            <td>Jama yusuf</td>
                            <td>M</td>
                            <td>Single</td>
                            <td>
                                O+
                            </td>
                            <td>
                                Horyaal
                            </td>
                            <td> Anemia</td>

                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="edit_id" value="">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="delete_id" value="">
                                    <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                </form>
                            </td>

                        </tr>

                    </tbody>
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