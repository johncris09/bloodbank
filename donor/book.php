<?php 
session_start();
error_reporting(0);
include('../includes/dbcon.php');

	$id=$_SESSION['id'];
	$date = date("Y-m-d",strtotime($_POST['date']));
	$time = date("H:i",strtotime($_POST['time']));
	$time = date("H:i",strtotime($_POST['time']));
	$blood_type = $_POST['blood_type'];
	//$status = $_POST['status'];
	//$program = $_POST['program'];
	//$agency_name = $_POST['agency_name'];
	//$address = $_POST['address'];
	//$city = $_POST['city'];
	//$host = $_POST['agency'];
	  
	//mysqli_query($con,"INSERT INTO booking(donor_id,booking_date,booking_time,booking_address,booking_city,program_name) 
	//	VALUES('$id','$date','$time','$address','$city','$program')")or die(mysqli_error($con));  
	
	mysqli_query($con,"INSERT INTO booking(donor_id,booking_date,booking_time,blood_type) 
		VALUES('$id','$date','$time','$blood_type')")or die(mysqli_error($con));  

	$bid=mysqli_insert_id($con);

	/*if($status=='yes')
	{
		mysqli_query($con,"INSERT INTO booking(status) VALUES('1')")or die(mysqli_error($con));

		if($agency_name<>"")
		{
			mysqli_query($con,"INSERT INTO agency(agency_name) VALUES('$agency_name')")or die(mysqli_error($con));
		}

		foreach($host as $val) {	
				    mysqli_query($con,"INSERT INTO linkages(program_id,agency_id) VALUES('$bid','$val')")or die(mysqli_error($con));
					}
	}*/
	
	echo "<script type='text/javascript'>alert('Successfully added new booking!');</script>";
	echo "<script>document.location='book_donation.php'</script>";   
	
	
?>