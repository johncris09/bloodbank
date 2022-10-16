<?php
 include 'session.php';
 include 'header.php';
 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap"style = "background: url(../assets/rcoro1.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="width: 120%">
                <div class="row" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                    <div class="col-lg-12">
                        <h2>User Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Data For User List
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
									<tbody>
                                    <?php   
                                    include 'dbcon.php';                                
                                        $query1=mysqli_query($con,"select * from donor ORDER BY donor_id DESC")or die(mysqli_error($con));
                                        while ($row=mysqli_fetch_array($query1)){
                                            $did=$row['donor_id'];                                       
                                    ?>  
                                        <tr class="odd gradeX">
                                            <td style = "text-transform:capitalize;"><?php echo $row['donor_first']. " " .$row['donor_middle']. " " .$row['donor_last'];?></td>  
                                            <td class="center">
                                                <a href="#exam<?php echo $did;?>" class="btn btn-success" data-toggle = "modal" data-target="#exam<?php echo $did;?>"><i class = "fa fa-pencil"></i>Fill Up Exam</a>
                                            </td>
                                        </tr> 
                                        <?php include 'update_exam_modal.php';?>
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
          <!-- RIGHT STRIP  SECTION -->
      
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
    <p>&copy;  BAG OF HOPE Plebotomist &nbsp;2022 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
    <script type="text/javascript">
        $("#datepicker").datepicker().datepicker("setDate", new Date());
    </script>    
</body>
    <!-- END BODY-->
    
</html>
