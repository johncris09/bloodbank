<?php
	$id = $_POST['id'];
	$title = $_POST['title'];
	
	mysqli_query($con,"UPDATE event SET title='$title' where id='$id'")or die(mysqli_error($con)); 
	echo "<script type='text/javascript'>alert('Successfully updated user details!');</script>";
			echo "<script>document.location='home.php'</script>"; 
?>