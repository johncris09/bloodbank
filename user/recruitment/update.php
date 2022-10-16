<?php 
include '../../includes/dbcon.php';
	$donor_id = $_POST['donor_id'];
	$program = $_POST['program'];		
			
	foreach($donor_id as $id)		
	{
			mysqli_query($con,"INSERT INTO program_donor(donor_id,program_id)	
			VALUES('$id','$program')")or die(mysqli_error($con)); 
	}			
	
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='home.php'</script>";   
	


?>