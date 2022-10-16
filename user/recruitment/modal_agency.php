<div class="modal fade" id="buttonedModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H1">Add Agency</h4>
                                        </div>
                                        <div class="modal-body">
                                    <form role="form" method="post" action="agency_save.php">
                                        <div class="form-group">
                                            <label>Agency Name</label>
                                            <input class="form-control" name="name" required>
                                            <p class="help-block">Name of Agency</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Agency Address</label>
                                            <input class="form-control" name="agency_address" required>
                                            <p class="help-block">Address Of Agency Locates</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Agency Contact Number</label>
                                            <input class="form-control" name="agency_contact_number" required>
                                            <p class="help-block">Mobile/Phone Number</p>
                                        </div>
                                         <div class="form-group">
                                            <label>Agency Contact Person</label>
                                            <input class="form-control" name="agency_contact_person" required>
                                            <p class="help-block">Person In Charged</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Positionb</label>
                                            <input class="form-control" name="agency_contact_person_position" required>
                                            <p class="help-block">Positon of Contact Person</p>
                                        </div>
                                           
                                       </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>
