<?php



$servername = "localhost";

$username = "bloodbank";

$password = "";

$dbname = "bloodbank";



$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}



if(isset($_GET['mo'])){



$mo_y = date("Y",strtotime($_GET['mo']));

$mo_m = date("m",strtotime($_GET['mo']));



	$city = $conn->query("SELECT `donor_city`, COUNT(`donor_city`) as donor_count FROM `donor` WHERE MONTH(date_created) = ' $mo_m ' AND YEAR(date_created) = ' $mo_y ' GROUP BY `donor_city`");





}else{

	$city = $conn->query("SELECT `donor_city`, COUNT(`donor_city`) as donor_count FROM `donor` GROUP BY `donor_city`");

}





$json = array();



if ($city && $city->num_rows > 0)

{

	while($row = $city->fetch_assoc()) {

		$json[] = array(

			'city' => $row['donor_city'],

			'value' => (int) $row['donor_count']

		);

	}

}



header('Content-Type: application/json');

echo json_encode($json);



$conn->close();