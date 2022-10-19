<?php
 include 'session.php';
 include 'header.php';
 include 'dbcon.php';
 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap"style = "background: url(../assets/rcoro1.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;">
	<!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->
        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->
        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner" >
                <div class="row" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                    <div class="col-lg-12">
                        <h2>User Information</h2>
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Data For User List
						</div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>User Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from user ORDER BY user_id ASC")or die(mysqli_error($con));
										while ($row=mysqli_fetch_array($query1)){
											$id=$row['user_id'];
											
									?>  
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['user_first']. " " .$row['user_middle']. " " .$row['user_last'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td class = "center">*****</td>
                                            <td class="center"><?php echo $row['user_type'];?></td>
                                            <td class="center">
												<a href="#editUser<?=$id;?>" class="btn btn-success" data-toggle = "modal" data-target="#editUser<?=$id;?>"><i class = "fa fa-pencil"></i> Edit</a>
                                                <a href="#deleteUser<?=$id;?>" class="btn btn-danger" data-toggle = "modal" data-target="#deleteUser<?=$id;?>"><i class = "fa fa-trashd"></i> Delete</a>
											</td>
                                        </tr>

                                        <div class="modal fade" id="editUser<?=$id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Edit User</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "edit_user.php" enctype ="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Username</label>                                                    
                                                    <input class="form-control" name = "username" Placeholder = "Create a username.." required = "true" value = "<?=$row['username'];?>"/>
                                                    <input type = "hidden" name = "user_id" value = "<?=$row['user_id'];?>">                                                   
                                                    <p class="help-block">This username account is used for your log in </p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" id = "password" name = "password" placeholder="Enter Password" type = "password"  value = "<?=$row['password'];?>" />
                                                </div>                                               
                                                <div class="form-group">
                                                    <label>Firstname</label>
                                                    <input class="form-control" name = "user_first" Placeholder = "Specify your Firstname" required = "true" value = "<?=$row['user_first'];?>"/> 
                                                </div> 
                                                <div class="form-group">
                                                    <label>Middlename</label>
                                                    <input class="form-control" name = "user_middle" Placeholder = "Specify your Midllename" required = "true" value = "<?=$row['user_middle'];?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Lastname</label>
                                                    <input class="form-control" name = "user_last" Placeholder = "Specify your Last name" required = "true" value = "<?=$row['user_last'];?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>User Type</label>
                                                    <select class = "form-control" name = "user_type" required>
                                                        <option disabled visited><?=$row['user_type']?></option>                                                       
                                                        <option value = "Administrator">Administrator</option>
                                                        <option value = "Medical Technology">Med Tech</option>
                                                        <option value = "Recruitment Officer">Recruitment Officer</option>
														 <option value = "Phlebotomist">Phlebotomist</option>
														 
                                                    </select>
                                                    
                                                </div>
                                                
                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "save_user" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                     </div>
                   
										<?php }?>									
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well well-small" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <button class = "btn btn-success btn-block" data-toggle="modal" data-target="#uiModal"><i class = "icon-plus"></i> Add User</button>
            </div>
           <?php include 'add_user_modal.php';?> 
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
	<?php include 'script.php';?>
    <script>
       (function() {
    var password1 = document.getElementById('password1');
    var password2 = document.getElementById('password2');
    var form = document.getElementById('passwordForm');
    
    var checkPasswordValidity = function() {
        if (password1.value != password2.value) {
            password1.setCustomValidity('Passwords must match.');
            updateErrorMessage();
        } else {
            password1.setCustomValidity('');
        }        
    };
    
    var updateErrorMessage = function() {
        form.getElementsByClassName('error')[0].innerHTML = password1.validationMessage;
    };
    
    password1.addEventListener('change', checkPasswordValidity, false);
    password2.addEventListener('change', checkPasswordValidity, false);
    
    form.addEventListener('submit', function(event) {
        if (form.classList) form.classList.add('submitted');
        checkPasswordValidity();
        if (!this.checkValidity()) {
            event.preventDefault();
            updateErrorMessage();
            password1.focus();  
        }
    }, false);
}());
    </script>
</body>
    <!-- END BODY-->
    
</html>
