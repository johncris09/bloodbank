<?php include 'session.php';?>
<html lang="en">
<head>
<meta charset="utf-8"/>

<title>Home | <?php include('title.php');?></title>

<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>

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
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-12 col-sm-12">
						<!-- BEGIN PORTLET-->
								<h3 align="center">EVENT CALENDAR</h3>
							<div  class = "porlet-body" style = "margin-left:138px;">
								<div id = "calendar"></div>									
							</div>
						<!-- END PORTLET-->
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
<script src="moment.min.js"></script>
<script src="fullcalendar.js"></script>
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
		 Index.initCalendar(); // init index page's custom scripts
      });
      
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>