<?php 
include 'dbcon.php';
	$donor_id = $_POST['donor_id'];
	$weight = $_POST['weight'];
	/* $height = $_POST['height']; */
	$blood_pressure = $_POST['blood_pressure'];
	$pulse_rate = $_POST['pulse_rate'];
	$temp = $_POST['temp'];
	$gen_appearance = $_POST['gen_appearance'];
	$skin = $_POST['skin'];
	$heent = $_POST['heent'];
	$heart_lungs = $_POST['heart_lungs'];
	$remarks = $_POST['remarks'];
	$volume = $_POST['volume'];
	$medical_officer = $_POST['medical_officer'];
	$reasons_for_deferral = $_POST['reasons_for_deferral'];		
			
			mysqli_query($con,"INSERT INTO physical_exam(donor_id,weight,blood_pressure,pulse_rate,temp,gen_appearance,skin,heent,heart_lungs,remarks,volume,medical_officer,reasons_for_deferral,exam_status)	
			VALUES('$donor_id','$weight','$blood_pressure','$pulse_rate','$temp','$gen_appearance', '$skin', '$heent', '$heart_lungs', '$remarks', '$volume','$medical_officer','$reasons_for_deferral', '1')")or die(mysqli_error($con)); 
				
			/*echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='donors_list.php'</script>";   
	*/


?>