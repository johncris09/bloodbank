<?php 

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'assets/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer; 



	  $donor_first=$_POST['first']; 
	  $donor_last=$_POST['last']; 
	  $donor_middle =$_POST['mi']; 
	  $donor_email =$_POST['email']; 
	  $donor_password =$_POST['password'];	  
	  $donor_occupation =$_POST['donor_occupation']; 
	  $donor_address =$_POST['address']; 
	  $donor_province =$_POST['province']; 
	  $donor_tel =$_POST['telephone']; 
	  $donor_city =$_POST['city'];
	  $donor_nationality =$_POST['nationality'];
	  $donor_age =$_POST['age'];
	  $donor_contact =$_POST['contact'];
	  $donor_telephone =$_POST['telephone'];
	  $donor_gender =$_POST['gender'];
	  $donor_type =$_POST['type'];
	  $donor_preferred =$_POST['preferred'];
	  $donor_bday =date("Y-m-d",strtotime($_POST['bday']));
	  $date=date("Y-m-d");
	 
	 
	  include('includes/dbcon.php');
	  $query=mysqli_query($con,"SELECT * from donor where donor_email='$donor_email'");
	 
	  $queryc=mysqli_query($con,"SELECT * from city where city_id='$donor_city'");
	  $rowc=mysqli_fetch_array($queryc);
	//   print_r($rowc);
	//   $zipcode=$rowc['zipcode'];
	  $num_rows = mysqli_num_rows($query);
	  while($row=mysqli_fetch_array($query)){
		$id=$row['donor_id'];
	  } 
	if ($num_rows<>0){
		echo "<script type='text/javascript'>alert('Sorry! You are already registered! You may now login!');</script>";
		echo "<script>document.location='login.html';</script>";
	} else {





/*	mysqli_query($con,"INSERT INTO donor(donor_first,donor_middle,donor_last,donor_email,donor_password,donor_nationality,donor_occupation,donor_address,donor_city,donor_province,donor_contact,donor_tel,donor_gender,donor_bday,donor_agedonor_pic,donor_zipcode,donor_type,donor_preferred) 
VALUES('$first','$mi','$last','$email','$password','$nationality','$occupation','$address','$city','$province','$contact','$telephone','$gender','$bday', '$donor_age', 'default.gif','$zipcode','$type','$preferred')")or die(mysqli_error($con));  
*/







		if($_FILES['image']['tmp_name'] == ""){

				mysqli_query($con, "INSERT INTO donor(

					donor_last,
					donor_first,
					donor_middle,
					donor_bday,
					donor_age,
					donor_gender,
					donor_contact,
					donor_tel,
					donor_email,
					donor_password,						
					donor_nationality,						
					donor_occupation,
					donor_address,
					donor_city,
					donor_province,	
					donor_preferred, 
					date_created
				)VALUES ( 
					'$donor_last',
					'$donor_first',
					'$donor_middle',
					'$donor_bday',
					'$donor_age',
					'$donor_gender',
					'$donor_contact',
					'$donor_tel',
					'$donor_email',
					'$donor_password',						
					'$donor_nationality',						
					'$donor_occupation',
					'$donor_address',
					'$donor_city',
					'$donor_province',
					'$donor_preferred',
					NOW()		
				)")or die(mysqli_error($con)); 
		}else{
		
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']); 

				if ($image_size==FALSE) { 
					echo "That's not an image!"; 
				}else{ 
					move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
					
					$location="images/" . $_FILES["image"]["name"];

					mysqli_query($con, "INSERT INTO donor( 
						donor_last,
						donor_first,
						donor_middle,
						donor_bday,
						donor_age,
						donor_gender,
						donor_contact,
						donor_tel,
						donor_email,
						donor_password,						
						donor_nationality,						
						donor_occupation,
						donor_address,
						donor_city,
						donor_province,	
						donor_preferred,
						date_created,
						donor_pic

					)VALUES (

						'$donor_last',
						'$donor_first',
						'$donor_middle',
						'$donor_bday',
						'$donor_age',
						'$donor_gender',
						'$donor_contact',
						'$donor_tel',
						'$donor_email',
						'$donor_password',						
						'$donor_nationality',						
						'$donor_occupation',
						'$donor_address',
						'$donor_city',
						'$donor_province',
						'$donor_preferred',
						NOW(),
						'$location'	 
					)")or die(mysqli_error($con)); 
				} 
		}



		$name = $donor_last . ", " .  $donor_first . " " . $donor_middle; 
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
		<html>
			<head>
				<title>Email Verification for ".$donor_email." </title>
			</head>
			<body>
				<p>Thank you for Signing up!</p>
				<table>
					<tr>
						<th> ".$name."\n</th><br>
						<th>Email Verification</th>
					</tr> 
				</table>
			</body>
		</html>
		"; 
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Email Verification';
		$mail->Body    = $message;
		
		$mail->send();
		
		echo "<script type='text/javascript'>alert('Successfully registered as a donor in NIR Blood Bank! You may now login!');</script>";
		echo "<script>document.location='login.html';</script>";

	}

								







?>



