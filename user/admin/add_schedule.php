<?php 
include 'session.php';
	$date_start =$_POST['date_start'];
	$date_end = $_POST['date_end'];
	$time_start = $_POST['time_start'];
	$time_end = $_POST['time_end'];
	$user_id = $_POST['user_id'];
	
		mysqli_query($con,"INSERT INTO schedule(sched_date,start_time,end_time,user_id,date_end) 
			VALUES('$date_start','$time_start','$time_end','$user_id','$date_end')")or die(mysqli_error($con));  
			
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='schedule.php'</script>";   
	


?>