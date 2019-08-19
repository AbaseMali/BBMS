<?php
include('recip_header.php');
include('recip_navbar.php');
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
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Blood group</th>
                            <th>Date and time</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Hospital</th>
                            <th>Phone Number</th>
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
                        </tr>

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