<?php include 'session.php';

	$donation_id = $_GET['donation_id'];
	
			//mysqli_query($con,"update survey set survey_status='delete' where donation_id='$donation_id'")or die(mysqli_error($con));
            mysqli_query($con,"DELETE FROM donation WHERE donor_id= donation_id")or die(mysqli_error($con));
            mysqli_query($con,"DELETE FROM donation WHERE donor_id= 'blood_exam.donation_id' ")or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";  
	
?>