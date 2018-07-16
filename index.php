<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Server Status</title>
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
	<meta name="description" content = "Nerd hub for nerds xoxoxo">
	<meta name="keywords" content="wow,gamenight,nerds,minecraft,davis,vischa,nerdboi">
	<meta name="author" content="Love, Chen hehehe">
</head>
<body>

<div id="header">
	<center>
		<h2>menu maybe?</h2>
	</center>
</div>
<div class="colmask rightmenu">
	<div class="colleft">
		<div class="col1">
		
			<!-- Column 2 start -->
			<div id="ads">
			</div>
			<h1>
			<?php 
			//phpinfo();
			include 'functions.php';
			$serverName = "vischa.ddns.net";
			$serverIP = gethostbyname($serverName);
			$mangosPort = 3724; //Realm Handler
			$realmPort_1 = 8085; //Realm World
			$minecraftPort_1 = 25565; //Minecraft Server #1

			if (stest($serverIP, $mangosPort)) { //Realm Handler
				echo "<font color=#008800>The MaNGOS server is up!</font> </br>";
			} else {
				echo "<font color=#CC0000>The MaNGOS server is down!</font> </br>";
			}

			if (stest($serverIP, $realmPort_1)) { //Realm World
				echo "<font color=#008800>The Elwynn Forest realm is up!</font> </br>";
				$wowUp = true;
			} else {
				echo "<font color=#CC0000>The Elwynn Forest realm is down!</font> </br>";
				$wowUp = false;
			}

			if (stest($serverIP, $minecraftPort_1)) { //Minecraft Server #1
				echo "<font color=#008800>The MineCraft Server is up! </font> </br>";
			} else {
				echo "<font color=#CC0000>The MineCraft Server is down!</font> </br>";
			}
			
			if (stest($serverIP, 65022)) { //SSH port
				echo "<font color=#008800>SSH port is Open </font> </br>";
			} else {
				echo "<font color=#CC0000>SSH port is Closed</font> </br>";
			}
			?>
			</h1>
			<!-- Column 2 end -->
		</div>
		<div class="col2">
			<!-- Column 1 start -->
			<center>
				<img src="img\wotlk-logo.png" width="85%">
				<h1>Server Stats:</h1>
			</center>
			<?php
			//echo "</br></br></br>";
			if ($wowUp) {
				include 'soap.php';				
			}
			//echo "</br></br> ServerUP is: $wowUp";

			?>
			<!-- Column 1 end -->
		</div>
	</div>
</div>
<div id="footer">
	<center>
		Last updated 2018-07-13
	</center>
</div>

</body>
</html>
