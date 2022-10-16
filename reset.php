<?php 

include('includes/dbcon.php');
	
	$email = $_POST['email'];
	
    $query = mysqli_query($con, "SELECT * FROM donor WHERE donor_email='$email'")or die(mysqli_error($con));
      $count=mysqli_num_rows($query);

        if ($count > 0)
        {
            $string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $code="";
            $limit=5;
            $i=0;
            while($i<=$limit)
            {
                $rand=rand(0,61);
                $code.=$string[$rand];
                $i++;
            }
            mysqli_query($con,"UPDATE donor SET donor_password='$code' where donor_email='$email'")or die(mysqli_error($con));

            ini_set( 'display_errors', 1 );
    
            error_reporting( E_ALL );
            
                            $to = $email;
                            $subject = "Email Verification";

                            $message = "
                            <html>
                            <head>
                            <title>Change the password for your username</title>
                            </head>
                            <body>
                            <p>Here is the new password for you account ".$email."</p>
                            <table>
                            <tr>
                            <th>Email</th>
                            <th>New Password</th>
                            </tr>
                            <tr>
                            <td>".$code."</td>
                            <td></td>
                            </tr>
                            </table>
                            </body>
                            </html>
                            ";

                            // Always set content-type when sending HTML email
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                            // More headers
                            $headers .= 'From: <webmaster@example.com>' . "\r\n";
                            $headers .= 'Cc: myboss@example.com' . "\r\n";

                               var_dump(mail($to,$subject,$message,$headers));
                               echo $code;
                
                      
            }
	       else
           {
                echo "<script type='text/javascript'>alert('Email address not found!');</script>";
                echo "<script>document.location='login.html'</script>";  
           }	
?>