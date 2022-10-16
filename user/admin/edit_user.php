<?php 

/*include('session.php');*/
include('dbcon.php');

	$id = $_POST['user_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_first = $_POST['user_first'];
	$user_middle = $_POST['user_middle'];
	$user_last = $_POST['user_last'];
	$user_type = $_POST['user_type'];
	




	
			mysqli_query($con,"UPDATE user SET username='$username',password='$password',user_first='$user_first',user_middle='$user_middle', user_last = '$user_last', user_type ='$user_type' where user_id='$id'")or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='users.php'</script>";  
	
?>