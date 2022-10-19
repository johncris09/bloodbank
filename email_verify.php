<?php
	include('includes/dbcon.php');

	$donor_id = $_GET['id']; 

	$query = mysqli_query($con,"UPDATE `donor` SET `email_verified` = '1' WHERE `donor`.`donor_id` = $donor_id");
	header('Location: login.html');