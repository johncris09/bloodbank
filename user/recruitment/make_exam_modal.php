<div class="modal fade" id="exam<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Donors Data</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "add_donor_exam.php" enctype ="multipart/form-data">
												<div class="form-group">
												<input type = "text" name = "donor_id" value = "<?php echo $id;?>">
													<label>Weight</label>
													<input class="form-inline form-control" name = "weight" Placeholder = "kgs." required = "true"/>												
												</div>												
												<div class="form-group">
													<label>Blood Pressure</label>
													<input class="form-control" name = "blood_pressure" Placeholder = "Blood Pressure (___/___)" required = "true"/>
												</div> 
												<div class="form-group">
													<label>Pulse Rate</label>
													<input class="form-control" name = "pulse_rate" Placeholder = "Pulse Rate / Minute" required = "true"/>
												</div>
												<div class="form-group">
													<label>Temperature</label>
													<input class="form-control" name = "temp" Placeholder = "Temperature in degree celsius" required = "true"/>
												</div>
												<div class="form-group">
													<label>General Appearance</label>
													<textarea class="form-control" name = "gen_appearance" Placeholder = "Describe Donors General Appearance" required = "true"/></textarea>
												</div>
												<div class="form-group">
													<label>Skin</label>
													<textarea class="form-control" name = "skin" Placeholder = "Describe Donors Skin Appearance" required = "true"/></textarea>
												</div>
												<div class="form-group">
													<label>HEENT</label>
													<textarea class="form-control" name = "heent" Placeholder = "HEENT" required = "true"/></textarea
												</div>
												<div class="form-group">
													<label>Heart/Lungs</label>
													<input class="form-control" name = "heart_lungs" Placeholder = "Heart and Lungs" required = "true"/>
												</div>													
												<div class="form-group">
													<label>Remarks</label>
													<select name = "remarks" class = "form-control">
														<option></option>
														<option>Accepted</option>
														<option>Temporary Deffered</option>
														<option>Permanently Deffered</option>
													</select>
												</div>
												<div class="form-group">
													<label>Volume</label>
													<input type  = "text" class="form-control" name = "volume" Placeholder = "Blood Volume" required = "true"/>
												</div>	
												<input name = "medical_officer" type = "hidden" value = "<?php echo $user_row['user_first']. " " .$user_row['user_last'];?>">
												<div class="form-group">
													<label>Reasons for Deferral</label>
													<input  class="form-control" name = "reasons_for_deferral" Placeholder = "Reason for Deferral"/>
												</div>									
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "save_exam" class="btn btn-primary">Save changes</button>
                                        </div>
									</form>
                                    </div>
                                </div>
                     </div>
                    </div>
                    
                   