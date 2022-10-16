<?php
include 'session.php';
include 'header.php';
?>
<style>
  #chartDiv, #barDiv,#barDiv1 {
      width: 100%;
      height: 500px;
    }
</style>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
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
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 id = 'wew'> Admin Dashboard </h1>
                    </div>
                </div>
                  <hr />
                  <div class="row">
                    <div class="col-md-12">
                      <div class='col-sm-6'></div>
                  <div class="form-group-horizontal">

                  <label class="control-label col-sm-2" style="text-align:right" for="mobile">Month of: </label>
                  <div class="col-sm-3">
                    <input type="month" class="form-control" id="date_created" onchange="change_bar()" value="<?php if(isset($_GET['mo'])){ echo $_GET['mo'];} ?>" />
                    </div>
                    <div class="col-sm-1"><a class="btn btn-info" id="btn_gen">Generate</a></div>
                  </div>
                  </div>
                  </div>
                  <br>
                 <!--BLOCK SECTION -->
                 <!-- <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="#">
                                <i class="icon-check icon-2x"></i>
                                <span> Products</span>
                                <span class="label label-danger">2</span>
                            </a>

                            <a class="quick-btn" href="#">
                                <i class="icon-envelope icon-2x"></i>
                                <span>Messages</span>
                                <span class="label label-success">456</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-signal icon-2x"></i>
                                <span>Profit</span>
                                <span class="label label-warning">+25</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-external-link icon-2x"></i>
                                <span>value</span>
                                <span class="label btn-metis-2">3.14159265</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-lemon icon-2x"></i>
                                <span>tasks</span>
                                <span class="label btn-metis-4">107</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="icon-bolt icon-2x"></i>
                                <span>Tickets</span>
                                <span class="label label-default">20</span>
                            </a>

                            
                            
                        </div>

                    </div>

                </div> -->
                  <!--END BLOCK SECTION -->
               
                   <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donor Percentage as of today by gender and age range
                            </div>  
                            <div class = "panel panel-body">  
                                    <center><h3><?php if(isset($_GET['mo'])){ echo 'Month of:'.date("F, Y",strtotime($_GET['mo']));} ?></h3></center>
                                     <div id="barDiv" class="col-md-12"></div>
                           </div>
                           
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Total number of Donor According to Agency
                            </div>  
                            <div class = "panel panel-body"> 
                            <center><h3><?php if(isset($_GET['mo'])){ echo 'Month of:'.date("F, Y",strtotime($_GET['mo']));} ?></h3></center> 
                                     <div id="chartDiv" class = "col-lg-12"></div>
                           </div>
                           
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donor Percentage of Diseases
                            </div>  
                            <div class = "panel panel-body">  
                                    <center><h3><?php if(isset($_GET['mo'])){ echo 'Month of:'.date("F, Y",strtotime($_GET['mo']));} ?></h3></center>
                                     <div id="barDiv1" class="col-md-12"></div>
                           </div>
                           
                        </div>
                    </div>
                     <!-- <div class="col-lg-4">

                        <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-tint"></i>
                                Blood Inventory
                            <div class="btn-group pull-right">
                                <button type="button" data-toggle="dropdown">
                                    <i class="icon-chevron-down"></i>
                                </button>
                            </div>
                            </div>

                            <div class="panel-body">
                                <?php  /* 
            include 'dbcon.php';                                
            $date=date('Y-m-d');
                    $query1=mysqli_query($con,"select *,COUNT(*) as count from physical_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC")or die(mysqli_error($con));
                           while ($row=mysqli_fetch_array($query1)){*/
                                            
                                    ?>                  
                    <li><?php
                    /* echo $row['blood_type'];?> &nbsp; : <span><?php echo $row['count'];*/
                    ?></span></li>
<?php 
/*}*/
?> 
                            </div> -->

                            <!-- <div class="panel-footer">
                                <div class="input-group">
                                    <input id="Text1" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-warning btn-sm" id="Button1">
                                            Send
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div> -->


                    </div>
                </div>
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
               <!--  <div class="row">
                    <div class="col-lg-12">

                        <div class="chat-panel panel panel-success">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                                Statistics Per Program
                            
                            </div>

                            <div class="panel-body">
                                <div id="graphprogram"></div>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                

                

                

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
       <!--  <div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
<?php   
            /*include 'dbcon.php';                                
            $date=date('Y-m-d');
                    $query1=mysqli_query($con,"select *,COUNT(*) as count from physical_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC")or die(mysqli_error($con));
                           while ($row=mysqli_fetch_array($query1)){
                                            */
                                    ?>                  
                    <li><?php 
                    /*echo $row['blood_type'];?> &nbsp; : <span><?php echo $row['count'];*/

                    ?></span></li>
<?php 

/*}*/

?>   
                </ul>
            </div> -->
           <!--  <div class="well well-small">
                <button class="btn btn-block"> Help </button>
                <button class="btn btn-primary btn-block"> Tickets</button>
                <button class="btn btn-info btn-block"> New </button>
                <button class="btn btn-success btn-block"> Users </button>
                <button class="btn btn-danger btn-block"> Profit </button>
                <button class="btn btn-warning btn-block"> Sales </button>
                <button class="btn btn-inverse btn-block"> Stock </button>
            </div> -->
            <!-- <div class="well well-small">
                <span>Profit</span><span class="pull-right"><small>20%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                </div>
                <span>Sales</span><span class="pull-right"><small>40%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                </div>
                <span>Pending</span><span class="pull-right"><small>60%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                </div>
                <span>Summary</span><span class="pull-right"><small>80%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                </div>
            </div> -->
          
            
         

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
    <?php include('script.php');?>
   <script type="text/javascript">

    (function($){

      function showBar()
      {
        var bar = AmCharts.makeChart("barDiv", {
            "theme": "light",
            "type": "serial",
            "valueAxes": [{
                "stackType": "3d",
                "unit": "%",
                "position": "left",
                "title": "Percentage of Donor  Male / Female from age range.",
            }],
            "startDuration": 0,
            "graphs": [{
                "balloonText": "Male [[category]] ( [[value]] )</b>",
                "fillAlphas": 0.9,
                "lineAlpha": 0.2,
                "title": "male",
                "type": "column",
                "valueField": "male"
            }, {
                "balloonText": "Female [[category]] ( [[value]] )</b>",
                "fillAlphas": 0.9,
                "lineAlpha": 0.2,
                "title": "female",
                "type": "column",
                "valueField": "female"
            }],
            "plotAreaFillAlphas": 0.1,
            "depth3D": 60,
            "angle": 60,
            "title":"Ages from",
            "categoryField": "name",
            "categoryAxis": {
                "gridPosition": "start"
            },
          "export": {
            "enabled": true
          }
        });

        $.get("./data_chart.php?<?php if(isset($_GET['mo'])){  echo 'mo='.$_GET['mo']; } ?>", function(response){

            bar.dataProvider = response;

            bar.validateData();
        });
      }
      function showBar1()
      {
        var bar = AmCharts.makeChart("barDiv1", {
            "theme": "light",
            "type": "serial",
            "valueAxes": [{
                "stackType": "3d",
                "unit": "%",
                "position": "left",
                "title": "Number of Donor Diseases",
            }],
            "startDuration": 0,
            "graphs": [{
                "balloonText": "Disease [[category]] ( [[value]] )</b>",
                "fillAlphas": 0.9,
                "lineAlpha": 0.2,
                "title": "Disease",
                "type": "column",
                "valueField": "disease"
            }],
            "plotAreaFillAlphas": 0.1,
            "depth3D": 60,
            "angle": 60,
            "title":"Ages from",
            "categoryField": "name",
            "categoryAxis": {
                "gridPosition": "start"
            },
          "export": {
            "enabled": true
          }
        });

        $.get("./data_chart2.php?<?php if(isset($_GET['mo'])){  echo 'mo='.$_GET['mo']; } ?>", function(response){

            bar.dataProvider = response;

            bar.validateData();
        });
      }
    //   function showChart()
    //   {
    //     var chart = AmCharts.makeChart("chartDiv", {
    //       "type": "pie",
    //       "theme": "light",
    //       "valueField": "value",
    //       "titleField": "city",
    //       "outlineAlpha": 0.4,
    //       "depth3D": 15,
    //       "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    //       "angle": 30,
    //       "title": "Total number of Donor According to Agency",
    //       "export": {
    //         "enabled": true
    //       }
    //     });

    //     $.get("./chart_data2.php?<?php if(isset($_GET['mo'])){  echo 'mo='.$_GET['mo']; } ?>", function(response){

    //         chart.dataProvider = response;

    //         chart.validateData();
    //     });
    //   }      
      showBar();
    //   showChart();
      showBar1();

    }(jQuery));

  </script>

   
    <!-- END PAGE LEVEL SCRIPTS -->

        <script type="text/javascript">
 /*   $(document).ready(function() {
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
      });*/
    </script>
      <script src="../assets/js/highcharts.js"></script>
        <script src="../assets/js/exporting.js"></script>
        <script type="text/javascript">
        function change_bar(){
           var dc = $('#date_created').val();
           
            $('#btn_gen').attr('href','home.php?mo='+dc);
            
        }
        </script>

</body>

    <!-- END BODY -->
</html>
