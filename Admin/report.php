<?php
include('includes/header.php');
include('includes/navbar.php');
include('connection.php');
?>

 <div class="page-wrapper">
        <!-- start header -->
		
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                           <div class="card text-white bg-dark mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                            
                                 <div class="card-body">
                                   <h5 class="card-title">Donor report by Date</h5>
                                   <form action="donor_report.php" method="POST">
                                <p > Start-Date : <input type="date" name="startDate" >
                                </p>  
                                <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                                </p>   
                                <h5 class="card-title">Select donor by Id</h5> 
                                <p > &nbsp; Id :&nbsp; <input type="input" name="donor_id">
                                </p>                         
                               </div>
                               <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                           </div>

                           <div class="card text-white bg-dark mb-4 col-md-4" style="width: 378px; margin:0px  20px 20px 2px; display:inline-block;">
                            
                            <div class="card-body">
                              <h5 class="card-title">All lab report by Date</h5>
                              <form action="lab_report.php" method="POST">
                           <p > Start-Date : <input type="date" name="startDate" >
                           </p>  
                           <p > &nbsp; End-Date :&nbsp; <input type="date" name="endDate">
                           </p>   
                           <h5 class="card-title">Select donor by Id</h5> 
                           <p > &nbsp; Id :&nbsp; <input type="input" name="donor_id">
                           </p>                         
                          </div>
                          <button name="Print"  style="margin-left:120px;  color: red">Report</button> </form>                      
                      </div>


                     
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
     