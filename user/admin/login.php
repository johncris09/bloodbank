<?php session_start();
if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$email = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from user where username='$email' and password='$pass' and user_type='Administrator'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $id=$row['user_id'];
           $first=$row['user_first'];
           $last=$row['user_last'];
           //$pic=$row['donor_pic'];
           $counter=mysqli_num_rows($query);
		  	if ($counter == 0) 
			  {	
			 	 echo "<script type='text/javascript'>alert('Invalid username or password!');
			 	 document.location='index.php';window.history.back();</script>";
			  } 
			  elseif ($counter > 0)
			  {
			  	$_SESSION['id']=$id;	
				//$_SESSION['pic']=$pic;
				$_SESSION['name']=$first." ".$last;
				  

			  		echo "<script type='text/javascript'>document.location='home.php'</script>";
			  	
				  
  
	  }
}

?>
	
