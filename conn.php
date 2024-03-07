<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$hometown = $_POST['hometown'];
	$zipcode = $_POST['zipcode'];
	$date = $_POST['date'];
	$states = $_POST['states'];
	$sitename = $_POST['sitename'];
	$sitecity = $_POST['sitecity'];
	$sitecounty = $_POST['sitecounty'];
	$cleanuptype = $_POST['cleanuptype'];
	$waterbottles = $_POST['waterbottles'];
	$bottlecaps = $_POST['bottlecaps'];
	$plasticutensils = $_POST['plasticutensils'];
	$plasticbags = $_POST['plasticbags'];
	$candywrappers = $_POST['candywrappers'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("Enter into registration(name, email, hometown, zipcode, date, states, sitename, sitecity, sitecounty, cleanuptype, waterbottles, bottlecaps, plasticutensils, plasticbags, candywrappers,) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $htown, $zip, $date, $states, $sitename, $sitecounty, $cleanuptype, $waterbottles, $bottlecaps, $plasticutensils, $plasticbags, $candywrappers);
		$execval = $stmt->execute();
		echo $execval;
		echo "Information successfully...";
		$stmt->close();
		$conn->close();
	}
	?>