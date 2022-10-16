<?php
 include 'session.php';
 include 'header.php';
 ?>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
 <style>
    .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100% !important;
    }
    .fc-day-grid-event .fc-content{
        white-space: normal !important;
    }
 </style>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap" style = "background: url(../assets/rcoro1.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);" >
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Program List</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            List of Programs
						</div>
                        <div class="panel-body" style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Program Name</th>
                                            <th>Program Address</th>
                                            <th>Program Date</th>
                                            <th>Time</th>
                                            <th>Agency</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
										$query1=mysqli_query($con,"select * from program  ORDER BY program")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['program_id'];
                                            $program_date = $row['program_date'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['program'];?></td>
                                            <td><?php echo $row['program_address'];?></td>
                                            <td><?php echo date("M d, Y",strtotime($row['program_date']));?></td>
                                            <td><?php echo date("h:i a",strtotime($row['program_time']));?></td>
                                            <td class="center">
                                            <?php 
                                            $query2=mysqli_query($con,"select * from linkages natural join agency  where program_id='$id' GROUP BY agency_id")or die(mysqli_error($con));
                                                    while ($row2=mysqli_fetch_array($query2)){                                        
                                            echo $row2['agency_name'].",";}
                                            ?>                                                
                                            </td>
                                            <td class="center">
												<a href="#update<?php echo $id;?>" class="btn btn-success" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
											</td>

                                        </tr> 
                                           
                                            <?php include 'modal_edit_program.php';?>   

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
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well well-small"style = "background-color:red">
                <button class="btn btn-success btn-block" data-toggle="modal" data-target="#buttonedModal">
                                Add Program
                </button>
            </div>
            
           <?php include 'modal_program.php';?> 
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
   <?php include 'script.php';?>
    <script src="moment.min.js"></script>
    <script src="fullcalendar.js"></script>

        <script>
            $(function () { formInit(); });
        </script>

    <!-- END GLOBAL SCRIPTS -->
	
</body>
    <!-- END BODY-->
    
</html>
