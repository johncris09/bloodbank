<?php include('session.php');

 $id = $_SESSION['id'];
 $first = $_POST['first'];
 $middle = $_POST['middle'];
 $last = $_POST['last'];
 $gender = $_POST['gender'];
 $bday = date("Y-m-d",strtotime($_POST['bday']));
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $occupation = $_POST['occupation'];

 mysqli_query($con,"UPDATE donor SET donor_first='$first',donor_middle='$middle',donor_last='$last',donor_gender='$gender',donor_bday='$bday',donor_contact='$contact',donor_email='$email',donor_occupation='$occupation' where donor_id='$id'")
 or die(mysqli_error()); 
 	$_SESSION['name']=$first." ".$last;
	echo "<script type='text/javascript'>alert('Successfully changed profile!');</script>";
	echo "<script>document.location='profile.php'</script>";
 ?>

