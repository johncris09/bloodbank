<?php
 
											
include('../../includes/dbcon.php'); 

$id = $_GET['id'];
// $query = mysqli_query($con,"DELETE FROM `blood_exam` WHERE blood_exam_id   = $id") or die(mysqli_error());
mysqli_query($con,"UPDATE `blood_exam` SET `release_status` = '1' WHERE `blood_exam`.`blood_exam_id`='$id'") or die(mysqli_error($con)); 

echo "<script type='text/javascript'>alert('Blood Successfully Released!');</script>";
echo "<script>document.location='available_blood.php';</script>";