<?php 
include ('session.php');

	$program_name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$agency = $_POST['agency'];		
	$date = $_POST['date'];		
	$time = $_POST['time'];		
			
			mysqli_query($con,"INSERT INTO program(program,program_address,city_id,program_date,program_time)	
			VALUES('$program_name','$address','$city','$date','$time')")or die(mysqli_error($con)); 
				$pid=mysqli_insert_id($con);
				foreach ($agency as $a)
				{
					mysqli_query($con,"INSERT INTO linkages(agency_id,program_id)	
					VALUES('$a','$pid')")or die(mysqli_error($con)); 	
				}
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='programs.php'</script>";   
	


?>