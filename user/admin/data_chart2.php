<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ranges = array(
	'22_HIV/AIDS Virus',
	'23_Hepatitis',
	'24_Malaria',
	'25_Sexuality Transmissible Infections',
	'26_Leukemia',
	'27_Problem in Heart & Lungs',
	'28_Blood disease'
);

$json = array();

for ($i = 0; $i <= count($ranges) - 1; $i++) {

	$range = explode('_', $ranges[$i]);

	if(isset($_GET['mo'])){

$mo_y = date("Y",strtotime($_GET['mo']));
$mo_m = date("m",strtotime($_GET['mo']));	
	$gender = $conn->query("SELECT
								COUNT(*) as ans
								FROM `answer` WHERE `question_id` = $range[0] AND answer = 'yes'
								AND MONTH(date_created) = ' $mo_m ' AND YEAR(date_created) = ' $mo_y ' ");
	}else{
	$gender = $conn->query("SELECT
								COUNT(*) as ans
								FROM `answer` WHERE `question_id` = $range[0] AND answer = 'yes'");
	}

	$name = $range[1];
	if ($gender && $gender->num_rows > 0)
	{
		while($row = $gender->fetch_assoc()) {
			$json[] = array(
				'disease' => (int) $row['ans'],
				'name' => $name
			);
		}
	}
	else
	{
		$json[] = array(
			'disease' => 0,
			'name' => $name
		);
	}
}

header('Content-Type: application/json');
echo json_encode($json);

$conn->close();