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

            <div class="inner" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Agency List</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Agencies
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Program Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
										$query1=mysqli_query($con,"select * from agency ORDER BY agency_name")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['agency_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['agency_name'];?></td>
                                            <td class="center">
												<a href="#update<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
                                                <a href="#view<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#view<?php echo $id;?>"><i class = "fa fa-view"></i> View</a>

											</td>
                                        </tr> 
                            <div class="modal fade" id="update<?php echo $id;?>" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Add Agency</h4>
                                        </div>
                                        <div class="modal-body">
                                    <form role="form" method="post" action="agency_update.php">
                                         <input class="form-control" name="id" value="<?php echo $id;?>" type="hidden">
                                        <div class="form-group">
                                            <label>Agency Name</label>
                                            <input class="form-control" name="name" value="<?php echo $row['agency_name'];?>" required>

                                        </div>
                                       <div class="form-group">
                                            <label>Agency Address</label>
                                            <input class="form-control" name="agency_address" value="<?php echo $row['agency_address'];?>" required>
                                            <p class="help-block">Address Of Agency Locates</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Contact Number</label>
                                            <input class="form-control" name="agency_contact_number" value="<?php echo $row['agency_contact_number'];?>" required>
                                            <p class="help-block">Name of Agency</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Contact Person</label>
                                            <input class="form-control" name="agency_contact_person" value="<?php echo $row['agency_contact_person'];?>" required>
                                            <p class="help-block">Name of Contact Person</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Position</label>
                                            <input class="form-control" name="agency_contact_person_position" value="<?php echo $row['agency_contact_person_position'];?>" required>
                                            <p class="help-block">Position</p>
                                        </div>
                                       </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>  
                             <div class="modal fade" id="view<?php echo $id;?>" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Agency Information</h4>
                                        </div>
                                        <div class="modal-body">
                                        <div class = "">
                                            <div class="form-group">
                                                <label>Agency Name</label>                                                
                                                 <p class="help-block"><?=$row['agency_name']?></p>
                                             </div>
                                             <div class="form-group">
                                                <label>Agency Address</label>                                                
                                                 <p class="help-block"><?=$row['agency_address']?></p>
                                             </div>
                                              <div class="form-group">
                                                <label>Agency Contact Number</label>                                                
                                                 <p class="help-block"><?=$row['agency_contact_number']?></p>
                                             </div>
                                              <div class="form-group">
                                                <label>Agency Contact Person</label>                                                
                                                 <p class="help-block"><?=$row['agency_contact_person']?></p>
                                             </div>
                                               <div class="form-group">
                                                <label>Position</label>                                                
                                                 <p class="help-block"><?=$row['agency_contact_person_position']?></p>
                                             </div>
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
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well well-small"style = "background-color:red">
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#buttonedModal">
                                Add Agency
                </button>
            </div>
           <?php include 'modal_agency.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
   <?php include 'script.php';?>
        <script>
            $(function () { formInit(); });
        </script>

    <!-- END GLOBAL SCRIPTS -->
	
</body>
    <!-- END BODY-->
    
</html>
