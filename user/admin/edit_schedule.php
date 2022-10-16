<?php 

/*include('session.php');*/
include('dbcon.php');

	$id = $_POST['sched_id'];
	$sched_date = $_POST['sched_date'];
	$date_end = $_POST['date_end'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];

	
			mysqli_query($con,"UPDATE schedule SET sched_date='$sched_date',date_end='$date_end',start_time='$start_time',end_time='$end_time' where sched_id='$id'")or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='schedule.php'</script>";  
	
?>