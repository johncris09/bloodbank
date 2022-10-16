<?php 
include 'session.php';
include 'dbcon.php';


	$query = mysqli_query($con,"select COUNT(*) as count, program from survey natural join program where survey_status='1' group by program_id
") or die(mysqli_error($con));

	$category = array();
	//$category['name'];

	$series1 = array();
	//$series1['name'] = '';

	while($r = mysqli_fetch_array($query)) {
		
	    //$count=$r['total'];
	    $category['name'][] =$r['program'];
	    $series1['name'][] =$r['program'];
	    $series1['data'][] = $r['count'];

}

$result = array();
array_push($result,$category);
array_push($result,$series1);
//array_push($result,$series2);

print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
//session_destroy(year);
?> 
