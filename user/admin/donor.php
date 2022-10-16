<!DOCTYPE html>
<html>
<head>
	<title>Donor Bar by XBatallion</title>

	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<style>
		#chart {
			width: 100%;
			height: 500px;
		}
	</style>
</head>
<body>
	<div id="chart"></div>

	<script type="text/javascript">

		(function($){

			var chart = AmCharts.makeChart("chart", {
			    "theme": "light",
			    "type": "serial",
			    "valueAxes": [{
			        "stackType": "3d",
			        "unit": "%",
			        "position": "left",
			        "title": "XBatallion Ranges Male / Female",
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
			    "angle": 30,
			    "categoryField": "name",
			    "categoryAxis": {
			        "gridPosition": "start"
			    },
				"export": {
					"enabled": true
				}
			});

			$.get("http://localhost/bloodbank/user/admin/data_chart.php", function(response){

			    chart.dataProvider = response;

			    chart.validateData();
			});

		}(jQuery));

	</script>
</body>
</html>