<?php include 'header.php';?>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<script src="jscript/jquery.min.js"></script>

<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class = "menu-always-on-top" style = "background: url(assets/frontend/onepage/img/rcoro.png) 0% 0% / cover;background-size: cover;background-repeat: no-repeat;">
 
	<?php include 'mobile_nav.php';?>
 
	<?php include 'slider.php';?>
	
	<?php include 'calendar.php';?>
 
  <div class="about-block content content-center" id="about">
    <div class="container"style = "background-color:#fcf4eb;">
		

      <h2><strong>History of RedCross</strong></h2>
      <h4>THE BIRTH OF AN IDEA</h4>
     <p>The Red Cross idea was born in 1859, when Jean Henry Dunant, a young Swiss businessman, came upon the scene of a bloody battle in Solferino, Italy, between the armies of imperial Austria and the Franco-Sardinian alliance. Some 40,000 men lay dead or dying on the battlefield and the wounded were lacking medical attention.

Dunant organized local people to bind the soldiers' wounds and to feed and comfort them. On his return, he called for the creation of national relief societies to assist those wounded in war, and pointed the way to the future Geneva Conventions. 

"Would there not be some means, during a period of peace and calm, of forming relief societies whose object would be to have the wounded cared for in time of war by enthusiastic, devoted volunteers, fully qualified for the task?" he wrote.

The Red Cross was born in 1863 when five Geneva men, including Dunant, set up the International Committee for Relief to the Wounded, later to become the International Committee of the Red Cross. Its emblem was a red cross on a white background: the inverse of the Swiss flag. The following year, 12 governments adopted the first Geneva Convention; a milestone in the history of humanity, offering care for the wounded, and defining medical services as "neutral" on the battlefield.</p>
    </div>
  </div>
  
	<?php include 'panel_menu.php';?>
 
  <?php include 'steps.php';?>
  <div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
      <h2>If you want to be a donor <strong>hit the button below</strong></h2>
      <em><a href = "login.html" class = "btn btn-success">Log in</a> <a href = "signup.php" class = "btn btn-primary">Sign up</a></em>
    </div>
  </div>
 
	<?php 
  include 'team_block.php';
  ?>
  <!-- Team block END -->
  <!-- Portfolio block BEGIN -->
  <?php include 'gallery.php';?>

  <!-- BEGIN FOOTER -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <!-- BEGIN COPYRIGHT -->
        <div class="col-md-12 col-sm-12">
          <div style= "text-align: center;" class="copyright">2022 © Web-Based Bag Of Hope.</div>
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN SOCIAL ICONS -->
        <!-- <div class="col-md-6 col-sm-6 pull-right">
          <ul class="social-icons">
            <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
            <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
            <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
            <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
            <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
            <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
            <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
            <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
          </ul>
        </div> -->
        <!-- END SOCIAL ICONS -->
      </div>
    </div>
  </div>
  <!-- END FOOTER -->
  <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>
  
  <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Core plugins END (For ALL pages) -->
  <!-- BEGIN RevolutionSlider -->
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <script src="assets/frontend/onepage/scripts/revo-ini.js" type="text/javascript"></script> 
  <script src="assets/frontend/onepage/scripts/layout.js" type="text/javascript"></script>
  <!-- END RevolutionSlider -->
  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
  <script src="assets/global/plugins/jquery.easing.js"></script>
  <script src="assets/global/plugins/jquery.parallax.js"></script>
  <script src="assets/global/plugins/jquery.scrollTo.min.js"></script>
  <script src="assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <script src="moment.min.js"></script>
	<script src="fullcalendar.js"></script>
  <!-- Core plugins END (required only for current page) -->
  <!-- Global js BEGIN -->

  
 
  
  <!-- Global js END -->
</body>
</html>