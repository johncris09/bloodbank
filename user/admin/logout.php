<?php include('session.php');?>

<!DOCTYPE html>

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="dist/js/jquery.min.js"><\/script>')</script>

</head>

<body>

<div style="width:100%;text-align:center;vertical-align:bottom">

		<div class = ""><img src = "../../images/loading.gif"></div>

<?php



	session_destroy();

	

 echo '<meta http-equiv="refresh" content="2;url=../index.php">';

 

 echo'<span class="itext">Logging out please wait!...</span>';

?>

</div>

</body>

</html>

