<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>
  </head>
  <body style = "background: url(assets/frontend/onepage/img/rcoro.png) 65% 0% / cover;background-size: cover; background-repeat: no-repeat;; margin-left:370px;">
<div class="panel panel-success" style="margin:20px; width: 750px;">
	<div class="panel-heading" style = "background-color:#5c97bd;">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body" style = "background-color:grey;">
    <form action = "register.php" method = "POST" enctype="multipart/form-data">
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">Firstname</label>
            <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" name = "first" id="first" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="email">Middlename</label>
            <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" id="middle" name = "mi" placeholder="">
        </div>

        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Lastname</label>
            <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" name = "last" id="mobile" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Birthday</label>
            <input type="date" class="form-control input-sm" style = "width:300px;" name = "bday" id="bday" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Age</label>
            <!-- <input type="text" maxlength = "3" class="form-control input-sm age" name = "age" id="age" placeholder=""> --> 
            <select name = "age" style = "width:300px;height:30px;" class ="name-heent form-control" required="">               
                <option style = "display:none;">Select Your Age</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
                <option>44</option>
                <option>45</option>
                <option>46</option>
                <option>47</option>
                <option>48</option>
                <option>49</option>
                <option>50</option>
            </select>
            <label class = "findings" style="display:none; margin-top:10px;" required="">
                <div style = "color:black;font-size:18px;">Parent Consent</div>
                <input type="file" name="image" >
            </label>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Gender</label>
           	<select class="form-control input-sm age" style = "width:300px;" name = "gender" required="">
           		<option disabled visited selected = "">Select You Gender</option>
           		<option style = "text-transform:capitalize;">Male</option>
           		<option style = "text-transform:capitalize;">Female</option>
           	</select>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Contact Number</label>
            <input type="text" maxlength = "13" style = "width:300px;" class="form-control input-sm" name = "contact" id="contact" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Telephone Number</label>
            <input type="text" class="form-control input-sm" style = "width:300px;"  maxlength = "7" name = "telephone" id="tel" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Occupation</label>
            <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" name = "donor_occupation" id="occupation" placeholder="" required="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Nationality</label>
           	 <select class="form-control input-sm" style = "width:300px;" id="nationality" name = "nationality" required="">
				<option disabled visited selected ="">Select Your Nationality</option>
				<?php													
					include('includes/dbcon.php');
					$query1=mysqli_query($con,"select * from nationality order by nationality")or die(mysqli_error());
					 while($row2=mysqli_fetch_array($query1)){
						?>
					<option><?php echo $row2['nationality'];?></option>
				<?php }?>
	      </select>
        </div>
         <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Prefered Mailing Address</label>
           	 <select class="form-control input-sm" style = "width:300px;" name = "preferred" id="preferred" required="">
				<option disable visited selected = "">Choose Your Preffered Mailing Address</option>
					<option>Home</option>
					<option>Office</option>
	      </select>
        </div>     


	<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Address</label>
	      <textarea style = "text-transform:capitalize;width:300px;" class="form-control input-sm" id="address" rows="3" name="address" required=""></textarea>
	  </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">City / Municipality</label>
			 <select class="form-control input-sm" style = "width:300px;" name = "city" id="city" required="">
				<option disabled visited selected="">Choose Your City / Municipality</option>
				<?php		
					include('includes/dbcon.php');
					$query2=mysqli_query($con,"select * from city order by city_name")or die(mysqli_error());
						while($row=mysqli_fetch_array($query2)){
					?>
				<option><?php echo $row['city_name'];?></option>
				<?php }?>
	     	 </select>
	</div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">Province</label>
            <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" value="Misamis Occidental" readonly  name  = "province" id="province" placeholder="" required="">
     </div>
     
     <div class="form-group col-md-6 col-sm-6">
            <label for="state">Email</label>
            <input type="email" class="form-control input-sm" style = "width:300px;"  name  = "email" id="email" placeholder="" required="true">
     </div>
       <div class="form-group col-md-6 col-sm-6">
            <label for="state">Password</label>
            <input type="password" class="form-control input-sm" style = "width:300px;" name = "password" id="password" placeholder="" required="true">
     </div>
     <div class="form-group col-md-6 col-sm-6">
            <label for="state">Confirm Password</label>
            <input type="password" class="form-control input-sm" style = "width:300px;" id="confirm_password" onchange = "val_cpass()" placeholder="" required="true">
        <div class = "alert alert-danger" id = "cpass_msg" style = "display:none;width:300px; height:40px;text-align:center;"></div>
     </div>
 	<div class="form-group col-md-6 col-sm-6">
        <label for="mobile">Donor Type</label>
        <input type="text" style = "text-transform:capitalize;width:300px;" class="form-control input-sm" value="Volunteer" readonly   name = "type" id="donor" placeholder="" required=""> 
    </div>
	
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-12 col-sm-12">
		<input type="submit" class="btn btn-primary btn-block"  id = "btn_save" style = "width:200px; margin-left:205px;" value="Submit"/>
	</div>
</div>
</form>
</div>
<script>
     $(document).ready(function(){
        $('.name-heent').change(function(){
            $selected_value=$('.name-heent option:selected').val();
            if($('.name-heent option:selected').val() <=  '17' ){
                $('.findings').show();
                $('.findings input').attr('required',true);
            }
            else{
               $('.findings').slideUp();
               $('.findings input').attr('required',false);
            }
        });
    });
</script>
<script>
	$('.datepicker').datepicker({
    	format: 'mm/dd/yyyy'
    	
	});
	/*var password1 = document.getElementById('password1');
	var password2 = document.getElementById('password2');
	var checkPasswordValidity = function() {	
    if (password1.value != password2.value) {
        password1.setCustomValidity('Passwords must match.');
    } else {
        password1.setCustomValidity('');
    }        
	};
	password1.addEventListener('change', checkPasswordValidity, false);
	password2.addEventListener('change', checkPasswordValidity, false);

	$(document).ready(function () {
  //called when key is pressed in textbox
  $(".age").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});*/


</script>
<script>
function val_cpass() {
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();

    if(password != confirm_password) {
        $("#cpass_msg").show();
        $("#cpass_msg").html("Confirm Password not Match!");
        $("#btn_save").hide();
    }
    else{
        $("#cpass_msg").hide();
        $("#btn_save").show();
    }
}
</script>
</body>
</html>