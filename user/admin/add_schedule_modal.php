<div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Add Schedule</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "add_schedule.php" enctype ="multipart/form-data">
													<div class="form-group">
														<label>Date Started</label>													
															<input type="date" class="form-control" name = "date_start" id="dp2"  value = "<?=date("Y-m-d")?>" readonly/>										
													</div>										
													<div class="form-group">
														<label>Date Ended</label>													
															<input type="date" class="form-control" name = "date_end"  id="dp1" />										
													</div>
									
												 <div class="form-group">
														<label>Time Started</label>														
															<div class="input-group bootstrap-timepicker">
																<input class="form-control timepicker-default" name = "time_start" type ="text"  value = "<?php 
																date_default_timezone_set("Asia/Manila");
																echo date("h:i A")?>" readonly/>
																	<span class="input-group-addon add-on"><i class="icon-time"></i></span>														
															</div>
												</div>
												 <div class="form-group">
														<label>Time Ended</label>														
															<div class="input-group bootstrap-timepicker">
																<input type="time" class="form-control timepicker-default" name = "time_end" />
																	<span class="input-group-addon add-on"><i class="icon-time"></i></span>														
															</div>
												</div>
												<div class="form-group">
													<label>User full name</label>
													<select class = "form-control" name = "user_id" required>
														<option></option>
														  <?php 
														  include 'dbcon.php';
															$result = mysqli_query($con,"SELECT * FROM user"); 
															while ($row = mysqli_fetch_array($result)){
																$user_id = $row['user_id'];
																$user_first = $row['user_first'];
																$user_middle = $row['user_middle'];
																$user_last = $row['user_last'];																
															?>
															<option value = "<?php echo $row['user_id'];?>"><?php echo $row['user_first']. " " .$row['user_middle']. " " .$row['user_last'];?></option>
															<?php }?>											
													</select>													
												</div>
												
									
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "save_schedule" class="btn btn-primary">Save changes</button>
                                        </div>
									</form>
                                    </div>
                                </div>
                     </div>
                   