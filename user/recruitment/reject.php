<?php include 'session.php';

	$id = $_REQUEST['id'];
	
			mysqli_query($con,"update survey set survey_status='Rejected' where survey_id='$id'")or die(mysqli_error($con));

	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";  
	
?>
