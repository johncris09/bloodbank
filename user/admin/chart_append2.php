

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

        $.get("http://localhost/bloodbank/user/admin/data_chart.php<?php echo ?> ?mo= <? $_GET['dc'] ?>", function(response){

            bar.dataProvider = response;

            bar.validateData();
        });
      }

      function showChart()
      {
        var chart = AmCharts.makeChart("chartDiv", {
          "type": "pie",
          "theme": "light",
          "valueField": "value",
          "titleField": "city",
          "outlineAlpha": 0.4,
          "depth3D": 15,
          "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
          "angle": 30,
          "title": "Total number of Donor According to Agency",
          "export": {
            "enabled": true
          }
        });

        $.get("http://localhost/bloodbank/user/admin/chart_data2.php<?php echo ?> ?mo= <? $_GET['dc'] ?>", function(response){

            chart.dataProvider = response;

            chart.validateData();
        });
      }

      showBar();
      showChart();

    }(jQuery));

  </script>