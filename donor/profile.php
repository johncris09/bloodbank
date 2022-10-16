<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Profile | <?php include('title.php');?></title>
<?php include('head.php');?>
</head>
<!-- END HEAD -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo">
	<!-- BEGIN HEADER INNER -->
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
				
<?php

	$id=$_SESSION['id'];
	
	$query=mysqli_query($con,"select * from donor where donor_id='$id'")or die(mysqli_error($con));
		
		$row=mysqli_fetch_array($query);

		if($row['donor_gender']=='male')
		{
			$male="checked";
			$female="";
		}
		else
		{
			$female="checked";
			$male="";
		}

			
?>														
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="portlet box red tabbable">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>Donor Profile
								</div>
							</div>
							<div class="portlet-body">
								<div class=" portlet-tabs">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#portlet_tab2_3" data-toggle="tab" aria-expanded="true">
											Personal Information </a>
										</li>
										<li class="">
											<a href="#portlet_tab2_1" data-toggle="tab" aria-expanded="false">
											Change Picture </a>
										</li>
										<li class="">
											<a href="#portlet_tab2_2" data-toggle="tab" aria-expanded="false">
											Change Password </a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane" id="portlet_tab2_1">
											<form action="change_pic.php" role="form" method="post" enctype='multipart/form-data'>
														<div class="form-group">
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-new thumbnail" style="width: 250px; height: 260px;">
																	<img src="../images/<?php echo $row['donor_pic'];?>" alt="" style="width: 250px;height: 250px"/>
																</div>
																<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 250px;">
																</div>
																<div>
																	<span class="btn default btn-file">
																	<span class="fileinput-new">
																	Select image </span>
																	<span class="fileinput-exists">
																	Change </span>
																	<input type="file" name="image">
																	</span>
																	<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
																	Remove </a>
																</div>
															</div>
														</div>
														<div class="margin-top-10">
															<button type="submit" class="btn green">
															Submit </button>
															<a href="javascript:;" class="btn default">
															Cancel </a>
														</div>
													</form>
										</div>
										<div class="tab-pane" id="portlet_tab2_2">
											<form action="change_pass.php" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														<input type="hidden" class="form-control" id="pass1" name="oldpass" value="<?php echo $row['donor_password'];?>">
															<label class="control-label">Current Password</label>
															<input type="password" class="form-control"oninput="check1(this)" id="pass2" required>
														</div>
													</div>
												</div>	
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">New Password</label>
															<input type="password" class="form-control" id="new1" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Re-type New Password</label>
															<input type="password" class="form-control" name="new" id="new2" oninput="check(this)" required>
														</div>
													</div>
												</div>
													<div class="margin-top-10">
														<button type="submit" class="btn green-haze">
														Change Password </button>
														<button type="reset" class="btn default">
														Cancel </button>
													</div>
												</form>
										</div>
										<div class="tab-pane active" id="portlet_tab2_3">
												<form role="form" action="profile_save.php" method="post">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">First Name</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="icon-user"></i>
																</span>
															
																<input type="text" placeholder="First Name" class="form-control" name="first" value="<?php echo $row['donor_first'];?>">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Middle Name</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="icon-user"></i>
																</span>
															
																<input type="text" placeholder="Middle Name" class="form-control" name="middle" value="<?php echo $row['donor_middle'];?>">
															</div>
														</div>
													</div>
													<div class="col-md-6">	
														<div class="form-group">
															<label class="control-label">Last Name</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="icon-user"></i>
																</span>
															
																<input type="text" placeholder="Last Name" class="form-control" name="last" value="<?php echo $row['donor_last'];?>">
															</div>
														</div>
													</div>
													
													<div class="col-md-6">	
														<div class="form-group">
															<label class="control-label">Birthday</label>
																<div class="input-group date">
																<span class="input-group-btn">
																	<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
																	</span>
																	<input type="text" readonly="" class="form-control date-picker" name="bday" value="<?php echo date("m-d-Y",strtotime($row['donor_bday']));?>">
																	
																</div>
																<!-- /input-group -->
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Contact Number</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="icon-call-end"></i>
																</span>
																<input type="text" placeholder="Contact Number" class="form-control" name="contact" value="<?php echo $row['donor_contact'];?>" />
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Email Address</label>
															<div class="input-group">
																<span class="input-group-addon">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control" placeholder="Email Address" value="<?php echo $row['donor_email'];?>" name="email">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Occupation</label>
															<input type="text" placeholder="Occupation" class="form-control" value="<?php echo $row['donor_occupation'];?>" name="occupation"/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<div class="icheck-inline">
																<label>
																	<input type="radio" name="gender" class="icheck" data-radio="iradio_flat-dark" value="male" <?php echo $male;?>> Male </label>
																<label>
																<input type="radio" name="gender" class="icheck" data-radio="iradio_flat-grey" value="female" <?php echo $female;?>> Female </label>
															</div>
														</div>
													</div>
													
														<div class="margin-top-20">
															<button href="submit" class="btn green">
															Save Changes </button>
															<a href="javascript:;" class="btn default">
															Cancel </a>
														</div>
														<br><br>
													</form>
					
										</div>
									</div>
								</div>
							</div>
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
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<?php include('script.php');?>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
	ComponentsPickers.init();
	FormiCheck.init(); // init page demo
});
</script>
<script type="text/javascript">

function check(input) {
    if (input.value != document.getElementById('new1').value) {
        input.setCustomValidity('The two passwords must match.');
    } 
		
		else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
   }
}

function check1(input) {
		if (input.value != document.getElementById('pass1').value) {
        input.setCustomValidity('Invalid Password!');
    }

		else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
   }
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>