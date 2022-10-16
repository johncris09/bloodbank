<?php include('session.php');?>
<!DOCTYPE html>
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
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				
				
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet box green-haze">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-globe"></i>Fill up Questionnaire
								</div>
								
							</div>
							<div class="portlet-body">
								<form method="post" action="questionaire_save.php">
								<div class="row">
									<div class="form-group form-md-line-input col-md-12">
										<label class="col-md-2 control-label" for="form_control_1">Select Program</label>
										<div class="col-md-10">
											<select class="form-control input-xlarge select2me" data-placeholder="Select..." name="program">
											<?php										 include('../includes/dbcon.php');
												$query2=mysqli_query($con,"select * from program order by program_date desc")or die(mysqli_error($con));
												    while($row=mysqli_fetch_array($query2)){
											?>
												<option value="<?php echo $row['program_id'];?>"><?php echo $row['program']." ".$row['program_address'];?></option>
												<?php }?>
											</select>
										</div>
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
								<tbody>
<?php
	include('../includes/dbcon.php');	
	$query=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($query))
			{
				$cid=$row['category_id'];
			
?>	
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
										 <?php echo $row['category'];?>
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 YES
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 NO
									</th>
								</tr>
<?php
		$query1=mysqli_query($con,"select * from question where category_id='$cid'")or die(mysqli_error($con));
		
			while($row1=mysqli_fetch_array($query1))
			{
				$qid=$row1['question_id'];
			
?>		<input type="hidden" name="qid[]" value="<?php echo $qid;?>">
								<tr role="row" class="even">
									<td class="sorting_1">
										 <?php echo $i;?>
									</td>
									<td>
										 <?php echo $row1['question'];?>
									</td>
									<td>
										
										<div class="md-radio">
											<input type="radio" id="<?php echo $qid;?>1" name="answer<?php echo $qid;?>" class="md-radiobtn" value="yes" >
											<label for="<?php echo $qid;?>1">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											</label>
										</div>
										
									</td>
									<td>
									
										<div class="md-radio">
											<input type="radio" id="<?php echo $qid;?>2" name="answer<?php echo $qid;?>" class="md-radiobtn" value="no">
											<label for="<?php echo $qid;?>2">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											</label>
										</div>
										 
									</td>
								</tr>									
<?php $i++;}}?>
								
								
								</tbody>
								</table>
								<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-9 col-md-10">
												<button type="button" class="btn default">Cancel</button>
												<button type="submit" class="btn blue">Submit</button>
											</div>
										</div>
									</div>
							</form>	
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
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<?php include('script.php');?>
<script>
	  jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		 ComponentsPickers.init();
		 ComponentsDropdowns.init();
		 TableAdvanced.init();
      });
      
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>