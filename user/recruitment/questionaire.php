<?php
    $querys=mysqli_query($con,"select * from donation natural join survey where donor_id ='$donor_id' order by survey_date desc")or die(mysqli_error($con));
            $i=1;
            while($rows=mysqli_fetch_array($querys))
            {
                $did=$rows['donation_id'];    
                if ($rows['survey_status']=="Accepted")
                {
                    $label="success";
                }
                if ($rows['survey_status']=="Rejected")
                {
                    $label="danger";
                }
                if ($rows['survey_status']=="Pending")
                {
                    $label="warning";
                }
            
?>  
                    <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $rows['survey_id'];?>" class=""><?php echo date("M d, Y",strtotime($rows['survey_date']));?></a>
                                            <span class="pull-right label label-<?php echo $label;?>"><?php echo $rows['survey_status'];?></span>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $rows['survey_id'];?>" class="panel-collapse collapse" style="height: auto;">
                                        <div class="panel-body">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <tbody>
                           

<?php

    $queryc=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
            $i=1;
            while($rowc=mysqli_fetch_array($queryc))
            {
                $cid=$rowc['category_id'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2">
                                         <?php echo $rowc['category'];?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         Answer
                                    </th>
                                </tr>

<?php
        $query1=mysqli_query($con,"select * from question natural join answer natural join survey where category_id='$cid' and donation_id='$did'")or die(mysqli_error($con));
        
            while($row1=mysqli_fetch_array($query1))
            {

            
?>      <input type="hidden" name="qid[]" value="<?php echo $qid;?>">
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                         <?php echo $i;?>
                                    </td>
                                    <td>
                                         <?php echo $row1['question'];?>
                                    </td>
                                    <td>
                                         <?php echo $row1['answer'];?>
                                    </td>
                                </tr>                                   
<?php $i++;}}?>
                                
                                
                                </tbody>
                                </table>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
<?php $i++;}?>
                                