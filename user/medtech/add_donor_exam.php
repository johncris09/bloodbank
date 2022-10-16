<?php 

include 'session.php';
	$did = $_POST['did'];
	$weight = $_POST['weight'];
	$method = $_POST['method']; 
	$blood_pressure = $_POST['blood_pressure'];
	$pulse_rate = $_POST['pulse_rate'];
	$temp = $_POST['temp'];
	$gen_appearance = $_POST['gen_appearance'];
	$skin = $_POST['skin'];
	$heent = $_POST['heent'];
	$heent_remarks = $_POST['heent_remarks'];
	$heart_lungs = $_POST['heart_lungs'];
	$remarks = $_POST['remarks'];
	$volume = $_POST['volume'];
	$reasons_for_deferral = $_POST['reasons_for_deferral'];		
			
			mysqli_query($con,"INSERT INTO physical_exam(donation_id,weight,blood_pressure,pulse_rate,temp,gen_appearance,skin,heent,heent_remarks,heart_lungs,remarks,volume,user_id,reasons_for_deferral,method)	
			VALUES('$did','$weight','$blood_pressure','$pulse_rate','$temp','$gen_appearance', '$skin', '$heent', '$heent_remarks', '$heart_lungs', '$remarks', '$volume','$session_id','$reasons_for_deferral','$method')")or die(mysqli_error($con)); 
				

			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='physical.php'</script>";   
	


?>