<div class="modal fade" id="uiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Add City</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method = "POST" action = "add_city.php" enctype ="multipart/form-data">
												<div class="form-group">
													<label>Nationality</label>
													<input class="form-control" name = "city_name" Placeholder = "Create a username.." required = "true"/>													
												</div>
                                                <div class="form-group">
                                                    <label>Zip Code</label>
                                                    <input class="form-control" name = "zipcode" Placeholder = "Create a username.." required = "true"/>                                                    
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
                   