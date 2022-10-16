<?php 
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../includes/dbcon.php');
$session_id=$_SESSION['id'];

$user_query = mysqli_query($con,"select * from user where user_id = '$session_id'")or die(mysql_error($con));
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['username'];
?>
