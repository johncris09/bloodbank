<div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Add User</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "add_user.php" enctype ="multipart/form-data">
												<div class="form-group">
													<label>Username</label>
													<input  class="form-control" name = "username" Placeholder = "Create a username.." required = "true"/>
													<p class="help-block">This username account is used for your log in </p>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type = "password" class="form-control" id = "password1" name = "password" placeholder="Enter Password" />
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type = "password" class="form-control" id = "password2" name = "" placeholder="Enter Password" /> 
												</div>
												<div class="form-group">
													<label>Firstname</label>
													<input class="form-control" name = "user_first" Placeholder = "Specify your Firstname" required = "true"/> 
												</div> 
												<div class="form-group">
													<label>Middlename</label>
													<input class="form-control" name = "user_middle" Placeholder = "Specify your Firstname" required = "true"/>
												</div>
												<div class="form-group">
													<label>Lastname</label>
													<input class="form-control" name = "user_last" Placeholder = "Specify your Firstname" required = "true"/>
												</div>
												<div class="form-group">
													<label>User Type</label>
													<select class = "form-control" name = "user_type" required>
														<option></option>														
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
                   