<?php

	global $name;
	global $email;
	global $hometown;
	global $zipcode;
	global $date;
	global $states;
	global $sitename;
	global $sitecity;
	global $sitecounty;
	global $cleanuptype;
	global $waterbottles;
	global $bottlecaps;
	global $lids;
	global $cigarettes;
	global $ecigarettes;
	global $plasticutensils;
	global $plasticbags;
	global $lighter;
	global $hairties;
	global $pen;
	global $ribbom;
	global $otherplastic;
	global $candywrappers;
	global $caprings;
	global $fishingline;
	global $bait;
	global $nets;
	global $containers;
	global $flosspicks;
	global $syringes;
	global $pstraws;
	global $holders;
	global $toys;
	#possible add custom amount?
	global $batteries;
	global $metalbottlecaps;
	global $metalcans;
	global $fishhooks;
	global $othermetal;
	global $cardboard;
	global $papercups;

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
	$lids = $_POST['lids'];
	$cigarettes = $_POST['cigarettes'];
	$ecigarettes = $_POST['ecigarettes'];
	$plasticutensils = $_POST['plasticutensils'];
	$plasticbags = $_POST['plasticbags'];
	$lighter = $_POST['lighter'];
	$hairties = $_POST['hairties'];
	$pen = $_POST['pen'];
	$ribbon = $_POST['ribbon'];
	$otherplastic = $_POST['otherplastic'];
	$candywrappers = $_POST['candywrappers'];
	$caprings = $_POST['caprings'];
	$fishingline = $_POST['fishingline'];
	$bait = $_POST['bait'];
	$nets = $_POST['nets'];
	$containers= $_POST['containers'];
	$flosspicks= $_POST['flosspicks'];
	$syringes= $_POST['syringes'];
	$pstraws= $_POST['pstraws'];
	$holders = $_POST['holders'];
	$toys= $_POST['toys'];
	$batteries = $_POST['batteries'];
	$metalbottlecaps= $_POST['metalbottlecaps'];
	$metalcans= $_POST['metalcans'];
	$fishhooks= $_POST['fishhooks'];
	$othermetal= $_POST['othermetal'];
	$cardboard= $_POST['cardboard'];
	$papercups= $_POST['papercups'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("Enter into the form if applicable (name, email, hometown, zipcode, date, states, sitename, sitecity, sitecounty, cleanuptype, waterbottles, bottlecaps, lids, cigarettes, ecigarettes, plasticutensils, plasticbags, lighter, hairties, pen, ribbon, otherplastic, candywrappers, caprings, fishingline, bait, nets, containers, flosspicks, syringes, pstraws, holders, toys, batteries, metalbottlecaps, metalcans, fishhooks, othermetal, cardboard, papercups) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $htown, $zip, $date, $states, $sitename, $sitecounty, $cleanuptype, $waterbottles, $bottlecaps, $lids, $cigarettes, $ecigarettes, $plasticutensils, $plasticbags, $lighter, $hairties, $pen, $ribbon, $otherplastic, $candywrappers, $caprings, $fishingline, $bait, $nets, $containers, $flosspicks, $syringes, $pstraws, $holders, $toys, $batteries, $metalbottlecaps, $metalcans, $fishhooks, $othermetal, $cardboard, $papercups);
		$execval = $stmt->execute();
		echo $execval;
		echo "Information successfully...";

		$sql = "CREATsE DATABASE myDB";
	if ($conn->query($sql) === TRUE) {
  		echo "Database created successfully";
	} else {
  		echo "Error creating database: " . $conn->error;
	}

		$stmt->close();
		$conn->close();
	}