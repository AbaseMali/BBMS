<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Blood group</th>
                            <th>Date and time</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>Phone Number</th>
                            <th> Action</th>
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