<?php 
include 'session.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_last = $_POST['user_last'];
	$user_first = $_POST['user_first'];
	$user_middle = $_POST['user_middle'];
	$user_type = $_POST['user_type'];
	
	
		mysqli_query($con,"INSERT INTO user(username,password,user_last,user_first,user_middle,user_type) 
			VALUES('$username','$password','$user_last','$user_first','$user_middle','$user_type')")or die(mysqli_error($con));  
			
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='users.php'</script>";
?>