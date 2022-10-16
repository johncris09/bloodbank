
<?php include 'header.php';?>

<?php

 if(isset($_REQUEST['blood_exam_id']))
    {
   $blood_exam_id=$_REQUEST['blood_exam_id'];
    }
      else
     {
    $blood_exam_id=$_POST['blood_exam_id'];
    }
 ?>
 <body>
<div class = "container">
	<div class = "row">	
		<div class = "col-lg-12 col-md-12">
			<?php include 'dbcon.php';
			$query1=mysqli_query($con,"select * from blood_exam WHERE blood_exam_id = '$blood_exam_id'")or die(mysqli_error());
			$row1=mysqli_fetch_assoc($query1);			
		?>
		<h4>FOR BLOOD BANK USE ONLY</h4>
			<div class = "pull-left col-md-6">
				<span class = "col-lg-6">Blood Bag : <?=$row1['blood_bag_type'];?> </span> 
				<span class = "col-md-6">Segment Number : <?=$row1['segment_number'];?></span>
			
			</div>
			<div class = "pull-right col-md-6">
				<span class = "col-lg-6">Time Started : <?=$row1['time_started'];?> </span> 
				<span class = "col-md-6">Time Ended : <?=$row1['time_ended'];?></span>
			</div>
			
			<div class = "clear-fix col-md-12">
			&nbsp;
			<br/>
			<br/>
			</div>				
			<div class = "col-md-8 pull-left">
				<div class = "col-md-12">Blood Types: <?=$row1['blood_type'];?></div>
			</div>
			<div class = "col-md-4 pull-right">
				<div class = "col-md-8">Hematocrit: <?=$row1['hematocrit'];?></div>
			</div>
			
			<div class = "clear-fix col-md-12">
			&nbsp;
			
			</div>	
			<div class = "col-md-6 pull-left">
				<div class = "col-md-12">Expiry: <?=$row1['expiry'];?></div>
			</div>
			<!--
			<div class = "col-md-6 pull-right">
				<div class = "col-md-8">Heart &amp; Lungs: <?=$row1['heart_lungs'];?></div>
			</div>
			<div class = "clear-fix col-md-12">
			&nbsp;	
			<br/>
			<br/>
			</div>
			<div class = "col-md-6 pull-left">
				<div class = "col-md-12">Remarks: <?=$row1['remarks'];?></div>
				<div class = "col-md-12">volume: <?=$row1['volume'];?></div>
			</div>
			<div class = "col-md-6 pull-left">
				<div class = "col-md-12">Medical Officer: <span style = "text-decoration:underline;"><?=$row1['medical_officer'];?></span></div>
			</div>
			<div class = "clear-fix col-md-12">
			&nbsp;	
			<br/>
			<br/>
			</div>
			<div class = "col-md-12 pull-left">
				<div class = "col-md-12">Reasons for deferral: <span style = "text-decoration:underline;"><?=$row1['reasons_for_deferral'];?></span></div>
			</div>
			-->
			
			<div class = "space7 col-md-12">
			&nbsp;
			</div>
				<div class = "col-md-8 pull-left">
				<h4>Place Barcode  Sticker of Donation ID No.</h4>
				<textarea class = "form-control" disabled rows="5">
				</textarea>
				</div>
				<div class = "col-md-4 pull-left">
				<h4>&nbsp;</h4>
					<span class ="center" style = "text-decoration:underline; text-align:center;">Officer 1</span>
					<br>
					<span clas = "">Blood Bank Officer</span>
				</textarea>
				</div>				
		</div>
	</div>
	<div class = "row">
		<div class  = "col-lg-12 col-md-12">
		<h4>For Phlebotomist use only</h4>
		<div clas = "col-md-6 pull-left">
			<p>Blood Bag Type : <span style = "text-decoration:underline;"> TYpe C</span></p>
		</div>
		</div>
	</div>
</div>

 </body>
 </html>