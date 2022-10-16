<?php
 include 'session.php';
 $name=$_POST['name'];
 $agency_address=$_POST['agency_address'];
 $agency_contact_number=$_POST['agency_contact_number'];
 $agency_contact_person=$_POST['agency_contact_person'];
 $agency_contact_person_position=$_POST['agency_contact_person_position'];
 $id=$_POST['id'];
 mysqli_query($con,"UPDATE agency SET agency_name='$name' , agency_address = '$agency_address', agency_contact_number = '$agency_contact_number', agency_contact_person = '$agency_contact_person', agency_contact_person_position = '$agency_contact_person_position' where agency_id='$id'")or die(mysqli_error($con)); 
 echo "<script type='text/javascript'>alert('Successfully updated agency!');</script>";
 echo "<script>document.location='agency.php'</script>";  
	
?>