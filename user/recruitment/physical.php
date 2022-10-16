<?php
 include 'header.php';
 include 'dbcon.php';
 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="width: 120%">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Donor Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Donor List
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include '../../includes/dbcon.php';								
										$query1=mysqli_query($con,"select * from survey natural join donor where survey_status='0' group by donor_id,survey_date ORDER BY survey_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['donor_id'];										
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['donor_first'];?></td>  
                                            <td><?php echo $row['donor_middle'];?></td>  
                                            <td><?php echo $row['donor_last'];?></td>  
                                            <td class="center">
												<a href="#exam<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#exam<?php echo $id;?>"><i class = "fa fa-pencil"></i>Fill Up Exam</a>
											</td>
                                        </tr> 
										<?php include 'make_exam_modal.php';?>
										<?php }?>									
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
          

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
</body>
    <!-- END BODY-->
    
</html>
