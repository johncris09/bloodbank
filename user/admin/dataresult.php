<?php
include('session.php');
include('dbcon.php');
$date=date('Y-m-d');
$result = mysqli_query($con,"select blood_type,COUNT(*) as count from physical_exam where remarks='Accepted' and expiry>='$date' GROUP BY blood_type ORDER BY blood_type ASC");
	
$rows = array();
while($r = mysqli_fetch_array($result)) {
		$row[0] = "Type ".$r[0];	
	    $row[1] = $r[1];
	    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>

