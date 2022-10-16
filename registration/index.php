<?php include 'header.php';?>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<?php include 'toggle.php'?>
<!-- END SIDEBAR TOGGLER BUTTON -->

<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN REGISTRATION FORM -->
	<form class="login-form" action="register.php" method="post">
			<div class="form-title">
			<span class="form-title">Sign Up</span>
		</div>
		<p class="hint">
			Pre Registration for a new Donor:
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">First Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Middle Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Middle Name" name="mi"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Last Name</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Birthday</label>
			<input class="form-control form-control-inline input-medium date-picker" type="date" name="bday">
			<span class="help-block">
				Select birthday 
			</span>
		</div>
		<div class="md-radio-inline">
											<div class="md-radio">
												<input type="radio" id="radio6" name="gender" class="md-radiobtn" value="male">
												<label for="radio6">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Male </label>
											</div>
											<div class="md-radio">
												<input type="radio" id="radio7" class="md-radiobtn" checked="" name="gender" value="female">
												<label for="radio7">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Female </label>
											</div>
											
										</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contact #</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Contact #" name="contact"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Occupation</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Occupation" name="occupation"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Nationality</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Nationality" name="nationality"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Address</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Prk/Street/Brgy/Block" name="address"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">City/Town</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
		</div>
		<div class="form-group margin-top-20 margin-bottom-20">
			<label class="check">
			<input type="checkbox" name="tnc"/>
			<span class="loginblue-font">I agree to the </span>
			<a href="javascript:;" class="loginblue-link">Terms of Service</a>
			<span class="loginblue-font">and</span>
			<a href="javascript:;" class="loginblue-link">Privacy Policy </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">			
			<button type="submit" id="register-submit-btn" name="register" class="btn btn-primary btn-block uppercase pull-right">Submit</button>
		</div>
	
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<div class="copyright hide">
	 2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/login.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();	
Demo.init();
 ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>