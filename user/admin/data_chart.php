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

	'16_20',

	'21_30',

	'31_40',

	'41_50',

	'51_60',

	'61_65'
);



$json = array();



for ($i = 0; $i <= count($ranges) - 1; $i++) {



	$range = explode('_', $ranges[$i]);



	if(isset($_GET['mo'])){



$mo_y = date("Y",strtotime($_GET['mo']));

$mo_m = date("m",strtotime($_GET['mo']));	

	$gender = $conn->query("SELECT

								*,

								SUM(CASE WHEN `donor_gender` = 'male' THEN 1 ELSE 0 END) as male_count,

								SUM(CASE WHEN `donor_gender` = 'female' THEN 1 ELSE 0 END) as female_count

								FROM `donor` WHERE `donor_age` BETWEEN {$range[0]} AND {$range[1]}

								 AND MONTH(date_created) = ' $mo_m ' AND YEAR(date_created) = ' $mo_y '  ");

	}else{

	$gender = $conn->query("SELECT

								*,

								SUM(CASE WHEN `donor_gender` = 'male' THEN 1 ELSE 0 END) as male_count,

								SUM(CASE WHEN `donor_gender` = 'female' THEN 1 ELSE 0 END) as female_count

								FROM `donor` WHERE `donor_age` BETWEEN {$range[0]} AND {$range[1]}");

	}



	$name = implode(' - ', $range);



	if ($gender && $gender->num_rows > 0)

	{

		while($row = $gender->fetch_assoc()) {

			$json[] = array(

				'male' => (int) $row['male_count'],

				'female' => (int) $row['female_count'],

				'name' => $name

			);

		}

	}

	else

	{

		$json[] = array(

			'male' => 0,

			'female' => 0,

			'name' => $name

		);

	}

}



header('Content-Type: application/json');

echo json_encode($json);



$conn->close();