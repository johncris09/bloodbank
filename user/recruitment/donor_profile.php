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

            <div class="inner">
                <div class="row"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                       <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donor Information
                        </div>
                        <div class="panel-body" style = "background-image:linear-gradient( white, #BDBDBD, #E0E0E0, white);">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Donor's Profile</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Questionnaire</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Donation History</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Booking History</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            PERSONAL DATA
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-bordered sortableTable responsive-table">
<?php  
    $donor_id=$_REQUEST['id'];  
    $query=mysqli_query($con,"select * from donor natural join city where donor_id='$donor_id'")or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
?>  
                                                <tbody>


                                                    <tr>
                                                        <td>First Name</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_first'];?></th>
                                                        <td>Middle Name</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_middle'];?></th>
                                                        <td>Last Name</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_last'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <th><?php echo date("M d, Y",strtotime($row['donor_bday']));?></th>
                                                        <td>Age</td>
                                                        <th>
                                                            <?php 
                                                               $age = date_create($row['donor_bday'])->diff(date_create('today'))->y;
                                                               echo $age;
                                                            ?> 
                                                        </th>
                                                        <td>Gender</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_gender'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Civil Status</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_civil'];?></th>
                                                        <td>Contact Number</td>
                                                        <th><?php echo $row['donor_contact'];?></th>
                                                        <td>Email Address</td>
                                                        <th><?php echo $row['donor_email'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality</td>
                                                        <th style = "text-transform:capitalize;"><?php echo $row['donor_nationality'];?></th>
                                                        <td>Occupation</td>
                                                        <th colspan="3" style = "text-transform:capitalize;"><?php echo $row['donor_occupation'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Home Address</td>
                                                        <th colspan="3" style = "text-transform:capitalize;"><?php echo $row['donor_address'].", ".$row['donor_city'];?></th>
                                                        <td>Zip Code</td>
                                                        <th><?php echo $row['donor_zipcode'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Office Address</td>
                                                        <th colspan="3" style = "text-transform:capitalize;"><?php echo $row['donor_office_address'];?></th>
                                                        <td>Zip Code</td>
                                                        <th><?php echo $row['donor_office_zipcode'];?></th>
                                                    </tr>
                                                    <tr>
                                                        <td>Type of Donor</td>
                                                        <th colspan="3" style = "text-transform:capitalize;"><?php echo $row['donor_type'];?></th>
                                                    </tr>
                                                    <tr>
<?php   
    $querycount=mysqli_query($con,"select COUNT(*) as count from donation")or die(mysqli_error($con));
        $rowcount=mysqli_fetch_array($querycount);
?>                                                      
                                                    
<?php   
    $query2=mysqli_query($con,"select donation_date from donation")or die(mysqli_error($con));
        $row2=mysqli_fetch_array($query2);
?>                                                                                                          
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            Personal Data
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
    
                                      <?php include('questionaire.php');?>  
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                      <?php include('history.php');?>     
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <?php include('booking.php');?>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 


                    
                </div>
                <hr>
            </div>
        </div>
       <!--END PAGE CONTENT -->
          <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-tint icon-5x text-red"></i>
                        <span> # of Donation/s</span>
                        <span class="label label-danger icon-2x" style="margin-right: -20px">
                        <?php echo $rowcount['count'];?></span>
                </a>
            </div>
            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-calendar icon-4x text-green"></i><br><br>
                       Last Date of Donation <br><?php echo date("M d, Y",strtotime($row2['donation_date']));?>
                </a>
            </div>
        </div>
         <!-- END RIGHT STRIP  SECTION -->

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
