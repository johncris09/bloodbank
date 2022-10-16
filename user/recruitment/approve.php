<?php include 'session.php';
/*include '../assets/includes/dbcon.php'; 
*/
	$id = $_REQUEST['id'];
	

		$smtp_email ='ryan15reydiamare@gmail.com';
		$smtp_password = 


		$this->load->library('phpmailer_lib');
			 
		$mail = $this->phpmailer_lib->load();
			$mail->SMTDebug = 2;
			$mail->IsSMTP();  
			$mail->Host = "smtp-relay.sendinblue.com";
			$mail->SMTPAuth = true;
			$mail->Username = 'ryan15reydiamare@gmail.com';
			$mail->Password = 'ryan15rey';
			$mail->SMTPSecure = 'SSL';  
			$mail->Port = 587;  
			

			$mail->SetFrom('ryan15reydiamare@gmail.com', 'Blood Donation'); 
			$mail->AddAddress($donor_email);  
			$mail->Subject = 'Congrats'; 
			$mail->Body = '<p>Good day Mr/Mrs,</p>
			<p>
			Thank You fpor donataing blood !</p>  
			<br> 
			<p>Regards,</p>';
			$mail->AltBody = 'try';
			$mail->send;
	echo "Mail has been sent successfully";
		mysqli_query($con,"update survey set survey_status='Accepted' where survey_id='$id'")or die(mysqli_error($con));
		
		/*$result = mysqli_query($con, "select donor_email FROM donor WHERE donor_id = '$id' ")or die(mysqli_error($con));
		$row = mysqli_fetch_array($result);
		echo $row['donor_id'];*/
	
		
			



							




	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";
	
?>
