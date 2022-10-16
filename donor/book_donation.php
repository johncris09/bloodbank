<?php include 'session.php';?>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Home | <?php include('title.php');?></title>
<?php include('head.php');?>
</head>
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include('page-header.php');?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php include('sidebar.php');?>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-green-haze">
									<i class="icon-settings font-green-haze"></i>
									<span class="caption-subject bold uppercase"> Book a Blood Donation</span>
								</div>
								
							</div>
							<div class="portlet-body form">
								<form role="form" class="form-horizontal" method="post" action="book.php">
									<div class="form-body">
										
										<div class="form-group form-md-line-input">
											<label class="col-md-2 control-label" for="form_control_1">Date of Booking</label>
											<div class="col-md-10">
												<div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
													<input type="text" class="form-control" readonly="" name="date" required>
													<span class="input-group-btn">
													<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group form-md-line-input has-success">
											<label class="col-md-2 control-label" for="form_control_1">Time of Booking</label>
											<div class="col-md-3">
												<div class="input-group">
													<input type="text" class="form-control timepicker timepicker-no-seconds" name="time" required>
													<span class="input-group-btn">
													<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group form-md-line-input has-success">
											<label class="col-md-2 control-label" for="form_control_1">Blood Type</label>
											<div class="col-md-3">
												<div class="input-group">
													<!-- <input type="text" class="form-control" name="blood_type" required> -->
													<select name="blood_type" class = "form-control">
													<option></option>
													<option>A+</option>
													<option>A-</option>
													<option>B+</option>
													<option>B-</option>
													<option>AB+</option>
													<option>AB-</option>
													<option>O</option>
													</select>
													<span>Leave it blank if you dont know your blood type</span>
												</div>
											</div>
										</div>
										
										<div class="form-group form-md-line-input">
											<label class="col-md-2 control-label" for="form_control_1"></label>
											<div class="col-md-10">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<!--<input type="checkbox" id="status" class="md-check" name="status" value="yes">
														<label for="status">
														<span></span>
														<span class="check"></span>
														<span class="box"></span>
														Check if booking for bloodletting program </label>-->
													</div>
													
												</div>
											</div>
										</div>
										<div class="hideme" style="display: none">
										<div class="form-group form-md-line-input has-warning">
											<label class="col-md-2 control-label" for="form_control_1">Program Name</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="form_control_1" placeholder="Name of Program" name="program">
												<div class="form-control-focus">
												</div>
											</div>
										</div>
										<div class="form-group form-md-line-input">
											<label class="col-md-2 control-label" for="form_control_1">Select Host Agency</label>
											<div class="col-md-10">
												<select class="form-control input-xlarge select2me" data-placeholder="Select..." multiple="multiple" name="agency[]">
													<?php										 include('../includes/dbcon.php');
														$query2=mysqli_query($con,"select * from agency order by agency_name")or die(mysqli_error());
														    while($row=mysqli_fetch_array($query2)){
																	?>
																<option value="<?php echo $row['agency_id'];?>"><?php echo $row['agency_name'];?></option>
													<?php }?>
												</select>
												<div class="form-control-focus">
												</div>
											</div>
										</div>
										<div class="form-group form-md-line-input has-warning">
											<label class="col-md-2 control-label" for="form_control_1">Agency Name (if not in the above option)</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="form_control_1" placeholder="Warning state" name="agency_name">
												<div class="form-control-focus">
												</div>
											</div>
										</div>
										
										<div class="form-group form-md-line-input has-success">
											<label class="col-md-2 control-label" for="form_control_1">Booking Address</label>
											<div class="col-md-10">
												<textarea class="form-control" rows="3" placeholder="Prk/Street/" name="address"></textarea>
												<div class="form-control-focus">
												</div>
											</div>
										</div>
										<div class="form-group form-md-line-input">
											<label class="col-md-2 control-label" for="form_control_1">Booking City</label>
											<div class="col-md-10">
												<select class="form-control input-xlarge select2me" data-placeholder="Select..." name="city">
													<?php										
														$query3=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
														    while($row3=mysqli_fetch_array($query3)){
																	?>
																<option><?php echo $row3['city_name'];?></option>
													<?php }?>
												</select>
												<div class="form-control-focus">
												</div>
											</div>
										</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-2 col-md-10">
												<button type="button" class="btn default">Cancel</button>
												<button type="submit" class="btn blue">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
						
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include('footer.php');?>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<?php include('script.php');?>
<script>
	$("#status").click(function(){
        $(".hideme").toggle('slow');
      });
	  jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		 $(".hideme").hide('slow');
		 ComponentsPickers.init();
		 ComponentsDropdowns.init();

      });
      
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>