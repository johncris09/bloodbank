<?php 

/*include('session.php');*/
include('dbcon.php');

	$id = $_POST['program_id'];
	$program = $_POST['program'];
	$program_address = $_POST['program_address'];
	$program_date = $_POST['program_date'];
	$program_time = $_POST['program_time'];

	




	
			mysqli_query($con,"UPDATE program SET program='$program',program_address='$program_address',program_date='$program_date',program_time='$program_time' where program_id='$id'")or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='programs.php'</script>";  
?>