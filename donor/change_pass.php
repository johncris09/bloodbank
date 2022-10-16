<?php include('session.php');

 $id = $_SESSION['id'];
 $new = $_POST['new'];

 mysqli_query($con,"UPDATE donor SET donor_password='$new' where donor_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully changed password!');</script>";
	echo "<script>document.location='profile.php'</script>";
 ?>

