<?php
session_start();
if(isset($_POST['login']))
{
include '../includes/dbcon.php';
$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];
$user_type_unsafe=$_POST['user_type'];
$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);
$user_type = mysqli_real_escape_string($con,$user_type_unsafe);
$query=mysqli_query($con,"select * from user where username='$user' and password='$pass' and user_type = '$user_type' ")or die(mysqli_error($con));
	   $row=mysqli_fetch_array($query);
           $id=$row['user_id'];
           $counter=mysqli_num_rows($query);
        	$_SESSION['id']=$id;	
		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
			  }
			  else
			  {
			  	if($user_type == 'Administrator'){
					echo "<script type='text/javascript'>document.location='admin/home.php'</script>";  
			  	}
			  	if($user_type == 'Medical Technology'){
					echo "<script type='text/javascript'>document.location='medtech/home.php'</script>";  
			  	}
			   	if($user_type == 'Recruitment Officer'){
					echo "<script type='text/javascript'>document.location='recruitment/home.php'</script>";  
			  	}
			  	if($user_type == 'Phlebotomist'){
					echo "<script type='text/javascript'>document.location='phlebotomist/daily.php'</script>";  
			  	}	
			  }			 
}
?>