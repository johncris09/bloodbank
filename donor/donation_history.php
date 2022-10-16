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
									<i class="fa fa-globe"></i>Donation History
								</div>
								<div class="tools">
									<a href="javascript:;" class="reload" data-original-title="" title="">
									</a>
									<a href="javascript:;" class="remove" data-original-title="" title="">
									</a>
								</div>
							</div>
							<div class="portlet-body">
								<form method="post" action="#">
								<table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
								<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
										 Donation Date
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 Volume
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 Weight
									</th>
								</tr>
								</thead>
								<tbody>
<?php
	$id=$_SESSION['id'];
	$query=mysqli_query($con,"select * from donation LEFT JOIN physical_exam on physical_exam.donation_id  = physical_exam.donation_id  where donor_id ='$id' order by donation_date desc")or die(mysqli_error($con));
			$i=1;
			while($row=mysqli_fetch_array($query))
			{
			
?>	
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
										 <?php echo date("M d, Y",strtotime($row['donation_date']));?>
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 <?php echo $row['volume'];?> mL
									</th>
									<th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
										 <?php echo $row['weight'];?> kgs
									</th>
								</tr>
<?php $i++;}?>
								
								
								</tbody>
								</table>
								
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