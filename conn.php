<?php

$host = 'localhost'; 
$username = 'gleavitt11'; 
$password = 'Ozzie@18345.'; 
$database = 'CleanupCompanion'; // Your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

#test#2
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
	$Lures = $_POST['lures'];
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

