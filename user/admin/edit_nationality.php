<?php 

/*include('session.php');*/
include('dbcon.php');

	$id = $_POST['nationality_id'];
	$nationality = $_POST['nationality'];
	

	
			mysqli_query($con,"UPDATE nationality SET nationality='$nationality' where nationality_id='$id'")or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='nationality.php'</script>";  
	
?>