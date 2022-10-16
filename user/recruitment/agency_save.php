<?php 
include ('session.php');

	$agency = $_POST['name'];
	$agency_address = $_POST['agency_address'];
	$agency_contact_number = $_POST['agency_contact_number'];
	$agency_contact_person = $_POST['agency_contact_person'];
	$agency_contact_person_position = $_POST['agency_contact_person_position'];
		
			
			mysqli_query($con,"INSERT INTO agency(agency_name,agency_address,agency_contact_number,agency_contact_person,agency_contact_person_position)	
			VALUES('$agency','$agency_address','$agency_contact_number','$agency_contact_person','$agency_contact_person_position')")or die(mysqli_error($con)); 
		
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='agency.php'</script>";   
	


?>