<?php
include 'session.php';
include 'header.php';
?>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
		<?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php //include 'sidebar.php';?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content" class="col-md-12" style="width:100%;height: 500px!important">
             
            <div class="inner" style="min-height: 700px;">
                
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box green-haze">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-globe"></i><h2>Blood Donor Questionnaire</h2>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="reload" data-original-title="" title="">
                                    </a>
                                    <a href="javascript:;" class="remove" data-original-title="" title="">
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="form-group form-md-line-input col-md-1">
                                        <label class="col-md-2 control-label" for="form_control_1"></label>
                                        <div class="col-md-10">
                                             <a href="approve.php?id=<?php $id=$_REQUEST['id']; echo $id;?>" class="btn btn-success" type="submit" name="approve"> Approve </a>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input col-md-1">
                                        <label class="col-md-2 control-label" for="form_control_1"></label>
                                        <div class="col-md-10">
                                             <a href="reject.php?id=<?php $id=$_REQUEST['id']; echo $id;?>" class="btn btn-danger" type="submit" name="decline"> Decline </a>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input col-md-1">
                                        <label class="col-md-2 control-label" for="form_control_1"></label>
                                        <div class="col-md-10">
                                             <a href="home.php" class="btn btn-primary"> Back </a>
                                        </div>
                                    </div>
                                </div>
                                
                        
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="" role="grid" aria-describedby="sample_2_info">
                                <tbody>
                                <input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">

<?php
    include('../../includes/dbcon.php'); 
    $id=$_REQUEST['id'];
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
                                         Answer
                                    </th>
                                </tr>

<?php
        $query1=mysqli_query($con,"select * from question natural join answer natural join survey where category_id='$cid' and survey_id='$id' and survey_status='Pending'")or die(mysqli_error($con));
        
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
                <!-- END PAGE CONTENT-->

                    </div>

                </div>
                  <!--END BLOCK SECTION -->
                <hr />
               

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

        
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
