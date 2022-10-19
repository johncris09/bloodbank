<?php

											
include('../../includes/dbcon.php'); 

$id = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM `user` WHERE `user`.`user_id`  = $id") or die(mysqli_error());

echo "<script type='text/javascript'>alert('User Successfully deleted!');</script>";
echo "<script>document.location='users.php';</script>";
