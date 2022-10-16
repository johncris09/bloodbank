<?php 
include 'session.php';
	$city_name = $_POST['city_name'];
	$zipcode = $_POST['zipcode'];
	
	
	
	
		mysqli_query($con,"INSERT INTO city(city_name,zipcode)VALUES('$city_name','$zipcode')")or die(mysqli_error($con));  
			
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='city.php'</script>";   
	


?>