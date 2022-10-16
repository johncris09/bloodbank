<div class="modal fade" id="survey<?php echo $sid;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Donors Data</h4>
                                        </div>
                                        <div class="modal-body">
                                    		                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <tbody>
                                <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">

<?php
    include('../../includes/dbcon.php'); 

    $query=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
                $cid=$row['category_id'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo $row['category'];?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         YES
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         NO
                                    </th>
                                </tr>

<?php
        $query1=mysqli_query($con,"select * from question where category_id='$cid'")or die(mysqli_error($con));
        
            while($row1=mysqli_fetch_array($query1))
            {
                $qid=$row1['question_id'];
            
?>      <input type="hidden" name="qid[]" value="<?php echo $qid;?>">
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                         <?php echo $i;?>
                                    </td>
                                    <td>
                                         <?php echo $row1['question'];?>
                                    </td>
                                    <td>
                                        
                                        <div class="md-radio">
                                            <input type="radio" id="<?php echo $qid;?>1" name="answer<?php echo $qid;?>" class="md-radiobtn" value="yes" checked>
                                            <label for="<?php echo $qid;?>1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            </label>
                                        </div>
                                        
                                    </td>
                                    <td>
                                    
                                        <div class="md-radio">
                                            <input type="radio" id="<?php echo $qid;?>2" name="answer<?php echo $qid;?>" class="md-radiobtn" value="no">
                                            <label for="<?php echo $qid;?>2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            </label>
                                        </div>
                                         
                                    </td>
                                </tr>                                   
<?php $i++;}}?>
                                
                                
                                </tbody>
                                </table>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button name = "save_exam" class="btn btn-primary">Save changes</button>
                                        </div>
									
                                    </div>
                                </div>
                     </div>
                   