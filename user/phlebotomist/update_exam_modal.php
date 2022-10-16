<div class="modal fade" id="exam<?php echo $did;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Donors Data</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "update_exam.php" enctype ="multipart/form-data">
												<div class="form-group">
												<input type = "hidden" name = "did" value = "<?php echo $did;?>">
												<input type = "hidden" name = "eid" value = "<?php echo $eid;?>">
													<label>Blood Bag</label>
													<select name = "blood_bag_type" class = "form-control">
														<option></option>
														<option>Single</option>
														<option>Double</option>
														<option>Triple</option>
													</select>
												</div>												
												<div class="form-group">
													<label>Segment Number</label>

													<?php 		

															$query = mysqli_query($con, "select * FROM blood_exam LEFT JOIN donation on donation.donation_id = blood_exam.donation_id");
																$row=mysqli_fetch_array($query);
															 	$rowcount=mysqli_num_rows($query);
															 	if($rowcount ==1){
															 		$rowcount = $row['segment_number']+0;
															 		}	
													?>
													<input class="form-control" name = "segment_number" value = "000<?= $rowcount+1;?>" Placeholder = "" required = "true" />
												</div> 
												<div class="form-group">
													<label>Time Started</label>
													<input type = "time" class="form-control" name = "time_started" Placeholder = "" required = "true"/>
												</div>
												<div class="form-group">
													<label>Time Ended</label>
													<input type = "time" class="form-control" name = "time_ended" Placeholder = "" required = "true"/>
												</div>
												<input type = "hidden" value = "<?php echo $user_row['user_first']. ' ' .$user_row['user_last'];?>" name = "phlebotomist">
												<div class="form-group">
													<label>Blood Type</label>
													<select class = "form-control" name = "blood_type">
														<option disabled></option>
														<option >A+</option>
														<option >A-</option>
														<option >AB+</option>
														<option >AB-</option>
														<option >B+</option>
														<option >B-</option>
														<option >O+</option>
														<option >O-</option>
													</select>
												</div>
												<div class="form-group">
													<input type = "hidden" value = "<?php echo $user_row['user_first']. ' ' .$user_row['user_last'];?>" name = "screened_by">												
												</div>
												<div class="form-group">
													<label>Hematocrit</label>
													<select class = "form-control" name = "hematocrit">
														
														<?php 
														for($x=0.01;$x<=0.20;$x=$x+0.01)
															{
																echo "<option>$x</option>";
															}
															 ?>
																									
															
													</select>
												</div>	
												<div class="form-group">
													<label>Expiry</label>
													<?php 
														$date = date('Y-m-d');
														$expiring = date("Y-m-d",strtotime($date. " + 42 days")); 	 
													?>
													<input type  = "text" class="form-control" name = "expiry" id = "datepicker" Placeholder = "hematocrit" required = "true" value = "<?=$expiring;?>"/>

												</div>		
												<input type = "hidden" name = "donation_status" value = "Done">		
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "update_exam" class="btn btn-primary">Save changes</button>
                                        </div>
									</form>
                                    </div>
                                </div>
                     </div>
                   