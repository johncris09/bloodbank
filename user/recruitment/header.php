<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Bag Of Hope</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      
    <![endif]-->
     <link href="../assets/css/jquery-ui.css" rel="stylesheet" />
      <link rel="stylesheet" href="../assets/plugins/uniform/themes/default/css/uniform.default.css" />
      <link rel="stylesheet" href="../assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
      <link rel="stylesheet" href="../assets/plugins/chosen/chosen.min.css" />
      <link rel="stylesheet" href="../assets/plugins/colorpicker/css/colorpicker.css" />
      <link rel="stylesheet" href="../assets/plugins/tagsinput/jquery.tagsinput.css" />
      <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker-bs3.css" />
      <link rel="stylesheet" href="../assets/plugins/datepicker/css/datepicker.css" />
      <link rel="stylesheet" href="../assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
      <link rel="stylesheet" href="../assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
      <link href='fullcalendar.min.css' rel='stylesheet' />
      <link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />      
      <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    
    
    <style>
        .inner{
            min-height:auto !important;
        }
    </style>

    <script>
             $(document).ready(function() {      
           var calendar = $('#calendar').fullCalendar({
             header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,agendaWeek,agendaDay,listWeek'
            },      
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventLimit: false,
              events: {
                  url: 'calendar_data.php',
                  type: 'POST', // Send post data
                  error: function() {
                      alert('There was an error while fetching events.');
                  }
              }
          });
      });
    </script>
</head>
