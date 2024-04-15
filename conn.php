<?php

	#defined the global vars, which will be used in the mysql db.
	global $Name;
	global $Email;
	global $Hometown;
	global $Zipcode;
	global $Date;
	global $States;
	global $Sitename;
	global $Sitecity;
	global $Sitecounty;
	global $Cleanuptype;
	global $Waterbottles;
	global $Bottlecaps;
	global $Lids;
	global $Cigarettes;
	global $Ecigarettes;
	global $Plasticutensils;
	global $Plasticbags;
	global $Lighter;
	global $Hairties;
	global $Pen;
	global $Ribbon;

	global $Otherplastic10a;

	global $Candywrappers;
	global $Caprings;
	global $Fishingline;
	global $Bait;
	global $Nets;
	global $Containers;
	global $Flosspicks;
	global $Syringes;
	global $Pstraws;
	global $Holders;
	global $Toys;
	#possible add custom amount?
	global $Batteries;
	global $Metalbottlecaps;
	global $Metalcans;
	global $Fishhooks;

	global $Foil;
	global $Nails;
	global $Wire;
	global $Poptabs;
	global $Foamcup;
	global $Foampacking;
	global $Foampieces;
	global $Foamplates;
	global $Foamcontainers;
	global $Trays;
	global $Cardboard;
	global $Cups;
	global $Newspaper;
	global $Paperbags;
	global $Receipts;

	
	global $Paperplates;
	global $Magazines;
	global $Paperpieces;
	global $Paperstraws;
	global $Napkins;
	global $Clothing;
	global $Shoes;
	global $Towels;
	global $Sticks;
	global $Wood;
	
	global $Othermisc1;
	global $Othermisc1a;
	global $Othermisc2;
	global $Othermisc2a;
	global $Othermisc3;
	global $Othermisc3a;
	global $Othermisc4;
	global $Othermisc4a;
	global $Othermisc5;
	global $Othermisc5a;
	global $Othermisc6;
	global $Othermisc6a;
	global $Othermisc7;
	global $Othermisc7a;
	global $Othermisc8;
	global $Othermisc8a;
	global $Othermisc9;
	global $Othermisc9a;
	global $Othermisc10;
	global $Othermisc10a;	
	global $Otherpaper11;
	global $Otherpaper11a;
	global $Otherpaper12;
	global $Otherpaper12a;
	global $Otherpaper13;
	global $Otherpaper13a;
	global $Otherpaper14;
	global $Otherpaper14a;
	global $Otherpaper15;
	global $Otherpaper15a;
	global $Otherpaper16;
	global $Otherpaper16a;
	global $Otherpaper17;
	global $Otherpaper17a;
	global $Otherpaper18;
	global $Otherpaper18a;
	global $Otherpaper19;
	global $Otherpaper19a;
	global $Otherpaper20;
	global $Otherpaper20a;	
	global $Otherpaper21;
	global $Otherpaper21a;
	global $Otherpaper22;
	global $Otherpaper22a;
	global $Otherpaper23;
	global $Otherpaper23a;
	global $Otherpaper24;
	global $Otherpaper24a;
	global $Otherpaper25;
	global $Otherpaper25a;
	global $Otherpaper26;
	global $Otherpaper26a;
	global $Otherpaper27;
	global $Otherpaper27a;
	global $Otherpaper28;
	global $Otherpaper28a;
	global $Otherpaper29;
	global $Otherpaper29a;
	global $Otherpaper30;
	global $Otherpaper30a;

	global $Balloon;
	global $Tire;
	global $Gloves;
	global $Glassbottle;
	global $Glass;


	#This stretch takes ALL variables and makes the global variables equal to the amounts entered on the form by matching id. 
	#For ease of adding variables, all IDs should have identical names.
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Hometown = $_POST['hometown'];
	$Zipcode = $_POST['zipcode'];
	$Date = $_POST['date'];
	$States = $_POST['states'];
	$Sitename = $_POST['sitename'];
	$Sitecity = $_POST['sitecity'];
	$Sitecounty = $_POST['sitecounty'];
	$Cleanuptype = $_POST['cleanuptype'];
	$Waterbottles = $_POST['waterbottles'];
	$Bottlecaps = $_POST['bottlecaps'];
	$Lids = $_POST['lids'];
	$Cigarettes = $_POST['cigarettes'];
	$Ecigarettes = $_POST['ecigarettes'];
	$Plasticutensils = $_POST['plasticutensils'];
	$Plasticbags = $_POST['plasticbags'];
	$Lighter = $_POST['lighter'];
	$Hairties = $_POST['hairties'];
	$Pen = $_POST['pen'];
	$Ribbon = $_POST['ribbon'];
	
	$Candywrappers = $_POST['candywrappers'];
	$Caprings = $_POST['caprings'];
	$Fishingline = $_POST['fishingline'];
	$Bait = $_POST['bait'];
	$Nets = $_POST['nets'];
	$Containers= $_POST['containers'];
	$Flosspicks= $_POST['flosspicks'];
	$Syringes= $_POST['syringes'];
	$Pstraws= $_POST['pstraws'];
	$Holders = $_POST['holders'];
	$Toys= $_POST['toys'];
	$Batteries = $_POST['batteries'];
	$Metalbottlecaps= $_POST['metalbottlecaps'];
	$Metalcans= $_POST['metalcans'];
	$Fishhooks= $_POST['fishhooks'];

	$Foil = $_POST['foil'];
	$Nails = $_POST['wire'];
	$Wire = $_POST['nails'];
	$Poptabs = $_POST['poptabs'];
	$Foamcup = $_POST['foamcups'];
	$Foampacking = $_POST['foampacking'];
	$Foampieces = $_POST['foampieces'];
	$Foamplates = $_POST['foamplates'];
	$Foamcontainers = $_POST['foamcontainers'];
	$Trays = $_POST['trays'];
	$Cardboard = $_POST['cardboard'];
	$Papercups = $_POST['cups'];
	$Newspaper = $_POST['newspaper'];
	$Paperbags = $_POST['paperbags'];
	$Receipts = $_POST['receipts'];
	
	$Paperplates = $_POST['paperplates'];
	$Magazines = $_POST['magazines'];
	$Paperpieces = $_POST['paperpieces'];
	$Paperstraws = $_POST['paperstraws'];
	$Napkins= $_POST['napkins'];
	$Clothing= $_POST['clothing'];
	$Shoes= $_POST['shoes'];
	$Towels= $_POST['towels'];
	$Sticks= $_POST['sticks'];
	$Wood= $_POST['wood'];
	
	$Balloon= $_POST['balloon'];
	$Tire= $_POST['tire'];
	$Gloves= $_POST['gloves'];
	$Glassbottle= $_POST['glassbottle'];
	$Glass= $_POST['glass'];
	
	$Othermisc1 = $_POST['customtext1'];
	$Othermisc1a = $_POST['customtext1a'];
	$Othermisc2 = $_POST['customtext2'];
	$Othermisc2a = $_POST['customtext2a'];
	$Othermisc3 = $_POST['customtext3'];
	$Othermisc3a = $_POST['customtext3a'];
	$Othermisc4 = $_POST['customtext4'];
	$Othermisc4a = $_POST['customtext4a'];
	$Othermisc5 = $_POST['customtext5'];
	$Othermisc5a = $_POST['customtext5a'];
	$Othermisc6 = $_POST['customtext6'];
	$Othermisc6a = $_POST['customtext6a'];
	$Othermisc7 = $_POST['customtext7'];
	$Othermisc7a = $_POST['customtext7a'];
	$Othermisc8 = $_POST['customtext8'];
	$Othermisc8a = $_POST['customtext8a'];
	$Othermisc9 = $_POST['customtext9'];
	$Othermisc9a = $_POST['customtext9a'];
	$Othermisc10 = $_POST['customtext10'];
	$Othermisc10a = $_POST['customtext10a'];
	$Othermisc11 = $_POST['customtext11'];
	$Othermisc11a = $_POST['customtext11a'];
	$Othermisc12 = $_POST['customtext12'];
	$Othermisc12a = $_POST['customtext12a'];
	$Othermisc13 = $_POST['customtext13'];
	$Othermisc13a = $_POST['customtext13a'];
	$Othermisc14 = $_POST['customtext14'];
	$Othermisc14a = $_POST['customtext14a'];
	$Othermisc15 = $_POST['customtext15'];
	$Othermisc15a = $_POST['customtext15a'];
	$Othermisc16 = $_POST['customtext16'];
	$Othermisc16a = $_POST['customtext16a'];
	$Othermisc17 = $_POST['customtext17'];
	$Othermisc17a = $_POST['customtext17a'];
	$Othermisc18 = $_POST['customtext18'];
	$Othermisc18a = $_POST['customtext18a'];
	$Othermisc19 = $_POST['customtext19'];
	$Othermisc19a = $_POST['customtext19a'];
	$Othermisc20 = $_POST['customtext20'];
	$Othermisc20a = $_POST['customtext20a'];
	$Othermisc21 = $_POST['customtext21'];
	$Othermisc21a = $_POST['customtext21a'];
	$Othermisc22 = $_POST['customtext22'];
	$Othermisc22a = $_POST['customtext22a'];
	$Othermisc23 = $_POST['customtext23'];
	$Othermisc23a = $_POST['customtext23a'];
	$Othermisc24 = $_POST['customtext24'];
	$Othermisc24a = $_POST['customtext24a'];
	$Othermisc25 = $_POST['customtext25'];
	$Othermisc25a = $_POST['customtext25a'];
	$Othermisc26 = $_POST['customtext26'];
	$Othermisc26a = $_POST['customtext26a'];
	$Othermisc27 = $_POST['customtext27'];
	$Othermisc27a = $_POST['customtext27a'];
	$Othermisc28 = $_POST['customtext28'];
	$Othermisc28a = $_POST['customtext28a'];
	$Othermisc29 = $_POST['customtext29'];
	$Othermisc29a = $_POST['customtext29a'];
	$Othermisc30 = $_POST['customtext30'];
	$Othermisc30a = $_POST['customtext30a'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("Enter into the form if applicable (name, email, hometown, zipcode, date, 
		states, sitename, sitecity, sitecounty, cleanuptype, waterbottles, bottlecaps, lids, cigarettes, 
		ecigarettes, plasticutensils, plasticbags, lighter, hairties, pen, ribbon, customtext1, candywrappers, 
		caprings, fishingline, bait, nets, containers, flosspicks, syringes, pstraws, holders, toys, batteries, 
		metalbottlecaps, metalcans, fishhooks, customtext2, foil, wire, nails, poptabs, foamcups, foampacking, 
		foampieces, customtext3, foamplates, foamcontainers, trays, cardboard, cups, newspaper, paperbags, 
		receipts, customtext4, paperplates, magazines, paperstraws, napkins, clothing, shoes, towels, sticks, wood, 
		customtext5, balloon, tire, gloves, glassbottle, glass) 
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)");
		
		$stmt->bind_param("sssssi", $Name, $Email, $Htown, $Zip, $Date, $States, $Sitename, $Sitecounty, 
		$Cleanuptype, $Waterbottles, $Bottlecaps, $Lids, $Cigarettes, $Ecigarettes, $Plasticutensils, 
		$Plasticbags, $Lighter, $Hairties, $Pen, $Ribbon, $Candywrappers, $Caprings, 
		$Fishingline, $Bait, $Nets, $Containers, $Flosspicks, $Syringes, $Pstraws, $Holders, $Toys, 
		$Batteries, $Metalbottlecaps, $Metalcans, $Fishhooks, $Foil, $Wire, $Nails, 
		$Poptabs, $Foamcups, $Foampacking, $Foampieces, $Foamplates, $Foamcontainers, 
		$Trays, $Cardboard, $Cups, $Newspaper, $Paperbags, $Receipts, $Paperplates,
		$Magazines, $Paperpieces, $Paperstraws, $Napkins, $Clothing, $Shoes, $Towels, $Sticks, 
		$Wood, $Balloon, $Tire, $Gloves, $Glassbottle, $Glass, $Othermisc1,$Othermisc1a,
		$Othermisc2,$Othermisc2a,$Othermisc3,$Othermisc3a,$Othermisc4,$Othermisc4a,
		$Othermisc5,$Othermisc5a,$Othermisc6,$Othermisc6a,$Othermisc7,$Othermisc7a,
		$Othermisc8,$Othermisc8a,$Othermisc9,$Othermisc9a,$Othermisc10,$Othermisc10a, 
		$Otherpaper11, $Otherpaper11a,$Otherpaper12,$Otherpaper12a,$Otherpaper13,$Otherpaper13a,
		$Otherpaper14,$Otherpaper14a,$Otherpaper15,$Otherpaper15a,$Otherpaper16,$Otherpaper16a,
		$Otherpaper17,$Otherpaper17a,$Otherpaper18,$Otherpaper18a,$Otherpaper19,$Otherpaper19a,
		$Otherpaper20,$Otherpaper20a, $Otherpaper21,$Otherpaper21a,$Otherpaper22,$Otherpaper22a,
		$Otherpaper23,$Otherpaper23a,$Otherpaper24,$Otherpaper24a,$Otherpaper25,$Otherpaper25a,
		$Otherpaper26,$Otherpaper26a,$Otherpaper27,$Otherpaper27a,$Otherpaper28,$Otherpaper28a,
		$Otherpaper29,$Otherpaper29a,$Otherpaper30,$Otherpaper30a);
		
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
	