<?php
 include 'session.php';
 include 'header.php';
 include 'dbcon.php';
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
                        <h2>Nationality Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Data For Naitonality
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Nationality</th>
                                            <th>Edit</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from nationality ORDER BY nationality_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$nationality_id=$row['nationality_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?=$row['nationality']?></td>
                                            <td><a href="#update<?php echo $nationality_id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $nationality_id;?>"><i class = "fa fa-pencil"></i> Edit</a></td>
												
                                        </tr> 
                            <div class="modal fade" id="update<?=$nationality_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit Nationality</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "edit_nationality.php" enctype ="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <input class="form-control" name = "nationality" value="<?=$row['nationality'];?>" required = "true"/>  
                                                      <input type = "hidden" class="form-control" name = "nationality_id" value="<?=$row['nationality_id'];?>" required = "true"/>      
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
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
            <div class="well well-small" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <button class = "btn btn-success btn-block" data-toggle="modal" data-target="#uiModal"><i class = "icon-plus"></i> Add Nationality</button>
            </div>
           <?php include 'add_nationality_modal.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>


    $("#date").mask("99/99/9999");
</body>
    <!-- END BODY-->
    
</html>
