
<?php include 'header.php';?>

<?php

 if(isset($_REQUEST['exam_id']))
    {
   $exam_id=$_REQUEST['exam_id'];
    }
      else
     {
    $exam_id=$_POST['exam_id'];
    }
 ?>
 <body>
<div class = "container">
	<div class = "row">	
		<div class = "col-lg-12 col-md-12">
			<?php include 'dbcon.php';
			$query1=mysqli_query($con,"select * from physical_exam WHERE exam_id = '$exam_id'")or die(mysqli_error());
			$row1=mysqli_fetch_assoc($query1);			
		?>
		<h4>FOR BLOOD BANK USE ONLY</h4>
			<div class = "pull-left col-md-6">
				<span class = "col-lg-6">Body Weight : <?=$row1['weight'];?> </span> 
				<span class = "col-md-6">Blood Pressure : <?=$row1['blood_pressure'];?></span>
			
			</div>
			<div class = "pull-right col-md-6">
				<span class = "col-lg-6">Pulse rate : <?=$row1['pulse_rate'];?> </span> 
				<span class = "col-md-6">Temperature : <?=$row1['temp'];?>&deg;</span>
			</div>
			
			<div class = "clear-fix col-md-12">
			&nbsp;
			<br/>
			<br/>
			</div>				
			<div class = "col-md-8 pull-left">
				<div class = "col-md-12">General Appearance: <?=$row1['gen_appearance'];?></div>
			</div>
			<div class = "col-md-4 pull-right">
				<div class = "col-md-8">Skin: <?=$row1['skin'];?></div>
			</div>
			
			<div class = "clear-fix col-md-12">
			&nbsp;
			
			</div>	
			<div class = "col-md-6 pull-left">
				<div class = "col-md-12">Heent: <?=$row1['heent'];?></div>
			</div>
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
			<p>Blood Bag Type : <span style = "text-decoration:underline;"> Single</span></p>
		</div>
		</div>
	</div>
</div>

 </body>
 </html>