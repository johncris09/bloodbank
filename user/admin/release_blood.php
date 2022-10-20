<?php
 
											
include('../../includes/dbcon.php'); 

$id = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM `blood_exam` WHERE blood_exam_id   = $id") or die(mysqli_error());

echo "<script type='text/javascript'>alert('Blood Successfully Released!');</script>";
echo "<script>document.location='available_blood.php';</script>";