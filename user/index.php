<?php include 'login_header.php';?>
<style type="text/css">
    .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    background-color: rgba(177, 67, 33, 0.87);
    }
</style>
<body style = "background: url(../assets/frontend/onepage/img/rcoro.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;">
   <div class="container">
    <div class="text-center">
	<h1 class = "" style ="color:white;">PRC-OMO Blood Bank Record</h1>	
    </div>

        <div>
            <form  method ="POST" action = "login.php"  class="form-signin">               
                <input type="text"  name="username" placeholder="Username"  class="form-control" />
                <input type="password" name="password"  placeholder="Password"  class="form-control" />
        				<select name = "user_type" class = "form-control">				
        					<option value = "Administrator">Administrator</option>
        					<option value = "Medical Technology">Med Tech</option>
        					<option value = "Recruitment Officer">Recruitment Officer</option>
        					<option value = "Phlebotomist">Phlebotomist</option>
        				</select>
        				<br/>
                <button name  = "login" class="btn text-center btn-block btn-success">Sign in</button>
            </form>			
        </div>
    <div class="text-center">       
    </div>
</div>	 
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/login.js"></script>
</body>  
</html>
