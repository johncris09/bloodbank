<div class="modal fade" id="exam<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Donors Data</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "update_exam.php" enctype ="multipart/form-data">
												<div class="form-group">
												<input type = "hidden" name = "exam_id" value = "<?php echo $id;?>">
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
													<input class="form-control" name = "segment_number" Placeholder = "" required = "true"/>
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
													<textarea class="form-control" name = "blood_type" Placeholder = "blood type" required = "true"/></textarea>
												</div>
												<div class="form-group">
													<input type = "hidden" value = "<?php echo $user_row['user_first']. ' ' .$user_row['user_last'];?>" name = "screened_by">												
												</div>
												<div class="form-group">
													<label>Hematocrit</label>
													<input type  = "text" class="form-control" name = "volume" Placeholder = "hematocrit" required = "true"/>
												</div>						
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "update_exam" class="btn btn-primary">Save changes</button>
                                        </div>
									</form>
                                    </div>
                                </div>
                     </div>
                   