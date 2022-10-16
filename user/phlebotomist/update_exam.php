<?php
include('session.php');

 if (isset($_POST['update_exam']))
 { 
	 $did = $_POST['did'];	
	 $eid = $_POST['eid'];	
	 $blood_bag_type = $_POST['blood_bag_type'];
	 $segment_number = $_POST['segment_number'];
	 $time_started = $_POST['time_started'];
	 $time_ended = $_POST['time_ended'];
	 $blood_type = $_POST['blood_type'];
	 $screened_by = $_POST['screened_by'];
	 $hematocrit = $_POST['hematocrit'];	
	 $expiry = $_POST['expiry'];
	 $donation_status = $_POST['donation_status'];
	 
	 mysqli_query($con,"INSERT INTO blood_exam(blood_bag_type,segment_number,time_started,time_ended,user_id,blood_type,hematocrit,exam_status,expiry,donation_id)	
			VALUES('$blood_bag_type','$segment_number','$time_started','$time_ended','$session_id','$blood_type', '$hematocrit','1', '$expiry', '$did')")or die(mysqli_error($con)); 



	mysqli_query($con,"UPDATE physical_exam SET status='1'where exam_id='$eid'")or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated donation details!');</script>";
		echo "<script>document.location='donors_list.php'</script>";
	
} 

?>