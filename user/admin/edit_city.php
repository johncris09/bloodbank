<?php 

/*include('session.php');*/
include('dbcon.php');

	$id = $_POST['city_id'];
	$city_name = $_POST['city_name'];
	$zipcode = $_POST['zipcode'];

	
			mysqli_query($con,"UPDATE city SET city_name='$city_name', zipcode = '$zipcode'  where city_id='$id'")or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='city.php'</script>";  
	
?>