<?php
 include 'session.php';
 include 'header.php';
 ?>

    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        <?php include 'sidebar.php';?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="width: 120%">
                <div class="row">
                    <form method="post" action="update.php">
                    <div class="col-md-12">
                        <h2>Donor Information</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="form-group col-md-6">
                                <h3>Daily Donors</h3>
                            </div>

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Contact #</th>
                                            <th>Program Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   
                                        $today=date('Y-m-d');
                                       
                                        $query1=mysqli_query($con,"select * from donation natural join donor natural join program natural join survey  where survey_status<>'Pending' and donation_date='$today'")or die(mysqli_error($con));
                                        while ($row=mysqli_fetch_array($query1)){
                                            $id=$row['donation_id'];
                                            $sid=$row['survey_id'];                                       

                                    ?>  
                                        <tr class="odd gradeX">
                                            <td><input type="checkbox" value="<?php echo $row['donor_id'];?>" name="donor_id[]"></td>  
                                            <td style = "text-transform:capitalize;"><?php echo $row['donor_first'];?></td>  
                                            <td style = "text-transform:capitalize;"><?php echo $row['donor_middle'];?></td>  
                                            <td style = "text-transform:capitalize;"><?php echo $row['donor_last'];?></td>  
                                            <td style = "text-transform:capitalize;"><?php echo $row['donor_contact'];?></td>  
                                        
                                            <td><?php echo $row['program'];?></td>  
                                            <td class="center">
                                                <a href="print.php?id=<?php echo $id;?>" class="btn btn-primary"><i class = "fa fa-pencil"></i>View Donation Record</a>
                                            </td>
                                        </tr> 
                                        </form>
                                        <?php include 'make_exam_modal.php';?>
                                        <?php }?>                                   
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>


                    </div>
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
          

    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <?php include('footer.php');?>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <!-- END GLOBAL SCRIPTS -->
    <?php include 'script.php';?>
</body>
    <!-- END BODY-->
    
</html>
