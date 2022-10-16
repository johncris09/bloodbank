<?php 
include 'session.php';
	$nationality = $_POST['nationality'];
	
	
	
	
		mysqli_query($con,"INSERT INTO nationality(nationality)VALUES('$nationality')")or die(mysqli_error($con));  
			
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='nationality.php'</script>";   
	


?>