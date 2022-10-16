<?php
 include 'session.php';
 include 'header.php';
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
                <div class="row" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                    <div class="col-lg-12">
                        <h2>Program List</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Programs
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Program Name</th>
                                            <th>Program Address</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
										$query1=mysqli_query($con,"select * from program ORDER BY program")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['program_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['program'];?></td>
                                            <td><?php echo $row['program_address'];?></td>                                         
                                           
                                    <?php   
                                            
                                    ?>                                         
        
                                            <td class="center">
												<a href="#update<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
											</td>
                                        </tr> 
                                <div class="modal fade" id="update<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit Program</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "edit_program.php" enctype ="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Program</label>
                                                    <input class="form-control" name = "program" value="<?=$row['program'];?>" required = "true"/>  
                                                      <input type = "hidden" class="form-control" name = "program_id" value="<?=$row['program_id'];?>" required = "true"/>                                                
                                                </div>
                                                <div class="form-group">
                                                    <label>Program Address</label>
                                                    <input class="form-control"  name = "program_address" value="<?=$row['program_address'];?>"  />
                                                </div>
                                                <div class="form-group">
                                                    <label>Program Date</label>
                                                    <input  class="datepicker form-control"  name = "program_date" value="<?=$row['program_date'];?>" data-date-format="mm-dd-yyyy" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Program Date</label>
                                                    <input  type = "time" class="timepicker form-control"  name = "program_time" value="<?=$row['program_time'];?>" />
                                                </div>
                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "save_user" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                         </div>
                     <?php }?>									
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
                <div class = "col-lg-12 col-md-12 col-sm-12">
                    <div id = "calendar"></div>
                   
                </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <?php include('footer.php');?>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
   <?php include 'script.php';?>
        <script>
            $(function () { formInit(); });



            $('.datepicker').datepicker({
               minDate: 0,        
              format: 'yyyy-mm-dd'
              
        });
        </script>

    <!-- END GLOBAL SCRIPTS -->
	
</body>
    <!-- END BODY-->
    
</html>
