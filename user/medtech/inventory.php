<?php
include 'session.php';
include 'header.php';
?>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap"style = "background: url(../assets/rcoro1.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;" >
        

        <!-- HEADER SECTION -->
		<?php include 'nav_top.php';?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php include 'sidebar.php';?>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Inventory</h2>
          <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Blood Inventory
            </div>
                        <div class="panel-body"style = "background-color:#00ACC1">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"style = "background-color:lightgrey">
                                    <thead>
                                        <tr>
                                            <th>Donor Full name</th>
                                            <th>Blood Type Donated</th>
                                            <th>Date Donated</th>
                                            <th>Blood Bag Type</th>
                                            <th>Segment Number</th>
                                            <th>Segment Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                  <?php 
                    
                    date_default_timezone_set("Asia/Manila"); 
                    $date = date("Y-m-d");
                   $expiring = date("Y-m-d",strtotime($date. " + 3 days"));                                                  
   $query1=mysqli_query($con,"select * FROM blood_exam LEFT JOIN donation ON donation.donation_id = blood_exam.donation_id LEFT JOIN donor ON donor.donor_id = donation.donor_id WHERE blood_exam.expiry = blood_exam.expiry")or die(mysqli_error($con));
                       while ($row=mysqli_fetch_array($query1)){                                           
 ?>  
                       <tr class="odd gradeX">
                           <td><?php echo $row['donor_first']. " ".$row['donor_last']." ".$row['donor_last'];?></td>
                           <td><?php echo $row['blood_type'];?></td>
                           <td><?php echo $row['donation_date'];?></td>
                           <td><?php echo $row['blood_bag_type'];?></td>
                           <td><?php echo $row['segment_number'];?></td>                                   
                          <td> <?php echo date("l, F d, Y", strtotime($row['expiry']. '+ 3 days')); ?></td>
                                        </tr> 
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

         <!-- RIGHT STRIP  SECTION -->
        <div id="right" style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
            <?php
    date_default_timezone_set("Asia/Manila"); 
    $date = date("Y-m-d");
    $avail=mysqli_query($con,"select COUNT(*) as blood from blood_exam where expiry > '$date'")or die(mysqli_error($con));
            $rowa=mysqli_fetch_array($avail);
?>                     
            <div class="well text-center"style = "background-image:linear-gradient(red, #BDBDBD, #E0E0E0);">
                <a class="quick-btn" href="available_blood.php">
                    <i class="icon-tint icon-5x text-blue"></i>
                        <span> Available </span>
                        <span class="label label-success icon-2x" style="margin-right: -20px">
                        <?php echo $rowa['blood'];?></span>
                </a>
            </div>


 <?php     
    $date = date("Y-m-d");
    $expiring2 = date("Y-m-d",strtotime($date. " + 3 days")); 
    $querycount2=mysqli_query($con,"select COUNT(*) as count2 from blood_exam LEFT JOIN donation ON donation.donation_id = blood_exam.donation_id LEFT JOIN donor ON donor.donor_id = donation.donor_id WHERE expiry <= '$expiring2'")or die(mysqli_error($con));
        $rowcount2=mysqli_fetch_array($querycount2);
?>         


            <div class="well text-center">
                <a class="quick-btn" href="#">
                    <i class="icon-tint icon-5x text-blue"></i>
                        <span> Expired in 3 Days </span>
                        <span class="label label-warning icon-2x" style="margin-right: -20px">
                        <?php                         

                        echo $rowcount2['count2'];


                        ?></span>
                </a>
            </div>

<?php     
    $date = date("Y-m-d");
    $expiring = date("Y-m-d",strtotime($date. "")); 
    $querycount=mysqli_query($con,"select COUNT(*) as count from blood_exam LEFT JOIN donation ON donation.donation_id = blood_exam.donation_id LEFT JOIN donor ON donor.donor_id = donation.donor_id WHERE blood_exam.expiry <= '$date'")or die(mysqli_error($con));
        $rowcount=mysqli_fetch_array($querycount);
?>         
            <div class="well text-center">
                <a class="quick-btn" href="expired_blood.php">
                    <i class="icon-tint icon-5x text-orange"></i>
                        <span> Expired Blood </span>
                        <span class="label label-danger icon-2x" style="margin-right: -20px">
                        <?php echo $rowcount['count'];?></span>
                </a>
            </div>
            
        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
    <p>&copy;  MedTech &nbsp;2022 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <?php include('script.php');?>
   
    <!-- END PAGE LEVEL SCRIPTS -->

     <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'graph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    spacingBottom: 50,
                    spacingLeft: 35
                },
                title: {
                    text: '',
                    style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '26px' }
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '14px', fontSize: '14px' },
                            connectorColor: '#000000',
                            formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: '',
                    data: []
                }]
            }
            
            $.getJSON("dataresult.php", function(json) {
                options.series[0].data = json;
                chart = new Highcharts.Chart(options);
            });
            
            
            
        });   
        </script>
        <script type="text/javascript">
    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graphprogram',
                  type: 'column',
                  marginRight: 20,
                  marginBottom: 25
              },
              title: {
                  text: '',
                  x: -20 //center
              },
              subtitle: {
                  text: '',
                  x: -10
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  
                  title: {
                      text: 'Total Monthly Sales'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 0)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: 0,
                  y: 100,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data.php", function(json) {
      options.xAxis.categories = json[0]['name'];
            options.series[0] = json[1];
            //options.series[1] = json[2];
            
            
            
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
      <script src="../assets/js/highcharts.js"></script>
        <script src="../assets/js/exporting.js"></script>

</body>

    <!-- END BODY -->
</html>