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

            <div class="inner">
                <div class="row"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                    <div class="col-lg-12">
                        <h2>Schedule</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Schedule
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>User Type</th>
                                            <th>Full Name</th>
                                            <th>Date Started</th>
                                            <th>Date Ended</th>                                  
                                            <th>Time Started</th>
                                            <th>Time Ended</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from schedule 
																	LEFT JOIN user on user.user_id = schedule.user_id
																	ORDER BY sched_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['sched_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['user_type'];?></td>
                                            <td><?php echo $row['user_first']. " " .$row['user_middle']. " " .$row['user_last'];?></td>
                                            <td><?php echo date("M d, Y",strtotime($row['sched_date']));?></td>
                                            <td><?php echo date("M d, Y",strtotime($row['date_end']));?></td>                                            
                                            <td class="center"><?php echo date("h:i A",strtotime($row['start_time']));?></td>
                                            <td class="center"><?php echo date("h:i A",strtotime($row['end_time']));?></td>
                                            <td class="center">
												<a href="#update<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
											</td>
                                        </tr> 
                                        <div class="modal fade" id="update<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit Schedule</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "edit_schedule.php" enctype ="multipart/form-data">
                                                <!-- <div class="form-group">
                                                    <input type = "text" name = "sched_id" value = "<?=$row['sched_id'];?>">
                                                </div> -->
                                                <div class="form-group">
                                                    <label>Date Start</label>
                                                    <input class="form-control" type = "date" name = "sched_date" value = "<?=$row['sched_date'];?>"/>
                                                </div>                                               
                                                <div class="form-group">
                                                    <label>Date End</label>
                                                    <input class="form-control" type = "date" name = "date_end" Placeholder = "Specify your Firstname" required = "true" value = "<?=$row['date_end'];?>"/> 
                                                </div> 
                                                <div class="form-group">
                                                    <label>Time Start</label>
                                                    <input class="form-control" type = "time" name = "start_time" Placeholder = "Specify your Midllename" required = "true" value = "<?=$row['start_time'];?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Time End</label>
                                                    <input class="form-control" type = "time" name = "end_time" Placeholder = "Specify your Last name" required = "true" value = "<?=$row['end_time'];?>"/>
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
        <div id="right">
            <div class="well well-small"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <button class = "btn btn-success btn-block" data-toggle="modal" data-target="#schedule"><i class = "icon-calendar"></i> Add Schedule</button>
            </div>

           <?php include 'add_schedule_modal.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer1.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
        <script>
     
        </script>
	
</body>
    <!-- END BODY-->
    
</html>
