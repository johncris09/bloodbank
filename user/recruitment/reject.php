<?php include 'session.php';


	$id = $_REQUEST['id'];  

	$query=mysqli_query($con,"select * from donor where donor_id='$id'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);  
	$donor_email = ucwords($row['donor_email']);  
	$lastname = $row['donor_last'];  


	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require '../../assets/vendor/autoload.php';

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer; 


	$mail->isSMTP();                   
	$mail->Host = "smtp.gmail.com";                 //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'genevabantiad04@gmail.com';                     //SMTP username
	$mail->Password   = 'ogjczcuqhsrzpdsi';                      
	$mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
	$mail->Port       = 465;    
	$mail->setFrom('genevabantiad04@gmail.com', 'Bag Of Hope');
	$mail->addAddress($donor_email, 'Address Name');  
		

	$message = "
		<p>Good day Mr/Mrs $lastname!</p>
		<p>Sorry to inform you that you were not selected based on your survey responses.!</p> 
		<p>Regards,</p>
	"; 
	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Rejected';
	$mail->Body    = $message;

	$mail->send(); 
	
	mysqli_query($con,"update survey set survey_status='Rejected' where survey_id='$id'")or die(mysqli_error($con));

	echo "<script type='text/javascript'>alert('Successfully updated status of donor!');</script>";
	echo "<script>document.location='home.php'</script>";  
	
?>
