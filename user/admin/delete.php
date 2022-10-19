<?php

											
include('../../includes/dbcon.php'); 

$id = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM program WHERE program.program_id = $id") or die(mysqli_error());

echo "<script type='text/javascript'>alert('Program Successfully deleted!');</script>";
echo "<script>document.location='programs.php';</script>";
