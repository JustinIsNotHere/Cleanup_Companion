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
	global $Candywrappers;
	global $Caprings;
	global $Fishingline;
	global $Lures;
	global $Nets;
	global $Containers;
	global $Flosspicks;
	global $Syringes;
	global $Pstraws;
	global $Holders;
	global $Toys;
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
#	global $Othermisc11;
#	global $Othermisc11a;
#	global $Othermisc12;
#	global $Othermisc12a;
#	global $Othermisc13;
#	global $Othermisc13a;
#	global $Othermisc14;
#	global $Othermisc14a;
#	global $Othermisc15;
#	global $Othermisc15a;
#	global $Othermisc16;
#	global $Othermisc16a;
#	global $Othermisc17;
#	global $Othermisc17a;
#	global $Othermisc18;
#	global $Othermisc18a;
#	global $Othermisc19;
#	global $Othermisc19a;
#	global $Othermisc20;
#	global $Othermisc20a;
#	global $Othermisc21;
#	global $Othermisc21a;
#	global $Othermisc22;
#	global $Othermisc22a;
#	global $Othermisc23;
#	global $Othermisc23a;
#	global $Othermisc24;
#	global $Othermisc24a;
#	global $Othermisc25;
#	global $Othermisc25a;
#	global $Othermisc26;
#	global $Othermisc26a;
#	global $Othermisc27;
#	global $Othermisc27a;
#	global $Othermisc28;
#	global $Othermisc28a;
#	global $Othermisc29;
#	global $Othermisc29a;
#	global $Othermisc30;
#	global $Othermisc30a;
	
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
	$candywrappers = $_POST['candywrappers'];
	$caprings = $_POST['caprings'];
	$fishingline = $_POST['fishingline'];
	$Lures = $_POST['lures'];
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
	$foil = $_POST['foil'];
	$nails = $_POST['wire'];
	$wire = $_POST['nails'];
	$poptabs = $_POST['poptabs'];
	$foamcup = $_POST['foamcups'];
	$foampacking = $_POST['foampacking'];
	$foampieces = $_POST['foampieces'];
	
	$foamplates = $_POST['foamplates'];
	$foamcontainers = $_POST['foamcontainers'];
	$trays = $_POST['trays'];
	$cardboard = $_POST['cardboard'];
	$papercups = $_POST['cups'];
	$newspaper = $_POST['newspaper'];
	$paperbags = $_POST['paperbags'];
	$receipts = $_POST['receipts'];
	
	$paperplates = $_POST['paperplates'];
	$magazines = $_POST['magazines'];
	$paperpieces = $_POST['paperpieces'];
	$paperstraws = $_POST['paperstraws'];
	$napkins= $_POST['napkins'];
	$clothing= $_POST['clothing'];
	$shoes= $_POST['shoes'];
	$towels= $_POST['towels'];
	$sticks= $_POST['sticks'];
	$wood= $_POST['wood'];
	
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
#	$Othermisc11 = $_POST['customtext11'];
#	$Othermisc11a = $_POST['customtext11a'];
#	$Othermisc12 = $_POST['customtext12'];
#	$Othermisc12a = $_POST['customtext12a'];
#	$Othermisc13 = $_POST['customtext13'];
#	$Othermisc13a = $_POST['customtext13a'];
#	$Othermisc14 = $_POST['customtext14'];
#	$Othermisc14a = $_POST['customtext14a'];
#	$Othermisc15 = $_POST['customtext15'];
#	$Othermisc15a = $_POST['customtext15a'];
#	$Othermisc16 = $_POST['customtext16'];
#	$Othermisc16a = $_POST['customtext16a'];
#	$Othermisc17 = $_POST['customtext17'];
#	$Othermisc17a = $_POST['customtext17a'];
#	$Othermisc18 = $_POST['customtext18'];
#	$Othermisc18a = $_POST['customtext18a'];
#	$Othermisc19 = $_POST['customtext19'];
#	$Othermisc19a = $_POST['customtext19a'];
#	$Othermisc20 = $_POST['customtext20'];
#	$Othermisc20a = $_POST['customtext20a'];
#	$Othermisc21 = $_POST['customtext21'];
#	$Othermisc21a = $_POST['customtext21a'];
#	$Othermisc22 = $_POST['customtext22'];
#	$Othermisc22a = $_POST['customtext22a'];
#	$Othermisc23 = $_POST['customtext23'];
#	$Othermisc23a = $_POST['customtext23a'];
#	$Othermisc24 = $_POST['customtext24'];
#	$Othermisc24a = $_POST['customtext24a'];
#	$Othermisc25 = $_POST['customtext25'];
#	$Othermisc25a = $_POST['customtext25a'];
#	$Othermisc26 = $_POST['customtext26'];
#	$Othermisc26a = $_POST['customtext26a'];
#	$Othermisc27 = $_POST['customtext27'];
#	$Othermisc27a = $_POST['customtext27a'];
#	$Othermisc28 = $_POST['customtext28'];
#	$Othermisc28a = $_POST['customtext28a'];
#	$Othermisc29 = $_POST['customtext29'];
#	$Othermisc29a = $_POST['customtext29a'];
#	$Othermisc30 = $_POST['customtext30'];
#	$Othermisc30a = $_POST['customtext30a'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {

		$stmt = $conn->prepare("Enter into the form if applicable (name, email, hometown, zipcode, date, states, sitename, sitecity, sitecounty, cleanuptype, waterbottles, bottlecaps, lids, cigarettes, ecigarettes, plasticutensils, plasticbags, lighter, hairties, pen, ribbon, candywrappers, caprings, fishingline, lures, nets, containers, flosspicks, syringes, pstraws, holders, toys, batteries, metalbottlecaps, metalcans, fishhooks, foil, wire, nails, poptabs, foamcups, foampacking, foampieces, foamplates, foamcontainers, trays, cardboard, cups, newspaper, paperbags, receipts, paperplates, magazines, paperstraws, napkins, clothing, shoes, towels, sticks, wood, balloon, tire, gloves, glassbottle, glass
		customtext1,customtext1a,customtext2,customtext2a,customtext3,customtext3a,customtext4,customtext4a,customtext5,customtext5a,customtext6,customtext6a,customtext7,customtext7a,customtext8,customtext8a,customtext9,customtext9a,customtext10,customtext10a,

		
		)
		
		values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)");
		#Add the code below in the prepare command
		# customtext11,customtext11a,customtext12,customtext12a,customtext13,customtext13a,customtext14,customtext14a,customtext15,customtext15a,customtext16,customtext16a,customtext17,customtext17a,customtext18,customtext18a,customtext19,customtext19a,customtext20,customtext20a,customtext21,customtext21a,customtext22,customtext22a,customtext23,customtext23a,customtext24,customtext24a,customtext25,customtext25a,customtext26,customtext26a,customtext27,customtext27a,customtext28,customtext28a,customtext29,customtext29a,customtext30,customtext30a,
		$stmt->bind_param("sssssi", $Name, $Email, $Hometown, $Zip, $Date, $states, $Sitename, $Sitecounty, 
		$Cleanuptype, $Waterbottles, $Bottlecaps, $Lids, $Cigarettes, $Ecigarettes, $Plasticutensils, 
		$Plasticbags, $Lighter, $Hairties, $Pen, $Ribbon, $Candywrappers, $Caprings, 
		$Fishingline, $Lures, $Nets, $Containers, $Flosspicks, $Syringes, $Pstraws, $holders, $toys, 
		$Batteries, $Metalbottlecaps, $Metalcans, $Fishhooks, $Foil, $Wire, $Nails, 
		$Poptabs, $Foamcups, $Foampacking, $Foampieces, $Foamplates, $Foamcontainers, 
		$Trays, $Cardboard, $Cups, $Newspaper, $Paperbags, $Receipts, $Paperplates,
		$Magazines, $Paperpieces, $Paperstraws, $Napkins, $Clothing, $Shoes, $Towels, $Sticks, 
		$wood, $Othermisc1, $Othermisc1a, $Balloon, $Tire, $Gloves, $Glassbottle, $Glass);
		$stmt = $conn->prepare("Enter into the form if applicable (name,email,htown,zip,date,states,sitename,sitecounty,cleanuptype,waterbottles,bottlecaps,lids,cigarettes,ecigarettes,plasticutensils,plasticbags,lighter,hairties,pen,ribbon,candywrappers,caprings,fishingline,Lures,nets,containers,flosspicks,syringes,pstraws,holders,toys,batteries,metalbottlecaps,netalcans,fishhooks,foil,wire,nails,poptabs,foamcups,foampacking,foampieces,foamplates,foamcontainers,trays,cardboard,cups,newspaper,paperbags,receipts,paperplates,magazines,paperpieces,paperstraws,napkins,clothing,shoes,towels,sticks,wood,balloon,tire,gloves,glassbottle,glass,customtext1,customtext1a,customtext2,customtext2a,customtext3,customtext3a,customtext4,customtext4a,customtext5,customtext5a,customtext6,customtext6a,customtext7,customtext7a,customtext8,customtext8a,customtext9,customtext9a,customtext10,customtext10a,customtext11,customtext11a,customtext12,customtext12a,customtext13,customtext13a,customtext14,customtext14a,customtext15,customtext15a,customtext16,customtext16a,customtext17,customtext17a,customtext18,customtext18a,customtext19,customtext19a,customtext20,customtext20a,customtext21,customtext21a,customtext22,customtext22a,customtext23,customtext23a,customtext24,customtext24a,customtext25,customtext25a,customtext26,customtext26a,customtext27,customtext27a,customtext28,customtext28a,customtext29,customtext29a,customtext30,customtext30a) 
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		
		#$stmt->bind_param("sssssi", $Name, $Email, $Htown, $Zip, $Date, $States, $Sitename, $Sitecounty, $Cleanuptype, $Waterbottles, $Bottlecaps, $Lids, $Cigarettes, $Ecigarettes, $Plasticutensils, $Plasticbags, $Lighter, $Hairties, $Pen, $Ribbon, $Candywrappers, $Caprings, $Fishingline, $Lures, $Nets, $Containers, $Flosspicks, $Syringes, $Pstraws, $Holders, $Toys, $Batteries, $Metalbottlecaps, $Metalcans, $Fishhooks, $Foil, $Wire, $Nails, $Poptabs, $Foamcups, $Foampacking, $Foampieces, $Foamplates, $Foamcontainers, $Trays, $Cardboard, $Cups, $Newspaper, $Paperbags, $Receipts, $Paperplates,$Magazines, $Paperpieces, $Paperstraws, $Napkins, $Clothing, $Shoes, $Towels, $Sticks, $Wood, $Balloon, $Tire, $Gloves, $Glassbottle, $Glass, $Othermisc1,$Othermisc1a,$Othermisc2,$Othermisc2a,$Othermisc3,$Othermisc3a,$Othermisc4,$Othermisc4a,$Othermisc5,$Othermisc5a,$Othermisc6,$Othermisc6a,$Othermisc7,$Othermisc7a,$Othermisc8,$Othermisc8a,$Othermisc9,$Othermisc9a,$Othermisc10,$Othermisc10a, $Othermisc11, $Othermisc11a,$Othermisc12,$Othermisc12a,$Othermisc13,$Othermisc13a,$Othermisc14,$Othermisc14a,$Othermisc15,$Othermisc15a,$Othermisc16,$Othermisc16a,$Othermisc17,$Othermisc17a,$Othermisc18,$Othermisc18a,$Othermisc19,$Othermisc19a,$Othermisc20,$Othermisc20a,$Othermisc21,$Othermisc21a,$Othermisc22,$Othermisc22a,$Othermisc23,$Othermisc23a,$Othermisc24,$Othermisc24a,$Othermisc25,$Othermisc25a,$Othermisc26,$Othermisc26a,$Othermisc27,$Othermisc27a,$Othermisc28,$Othermisc28a,$Othermisc29,$Othermisc29a,$Othermisc30,$Othermisc30a);
		
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