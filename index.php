<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Server Status</title>
	
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
</head>
<body>

<div id="header">
	<h1>Header</h1>

</div>
<div class="colmask rightmenu">
	<div class="colleft">
		<div class="col1">
			<!-- Column 1 start -->
			<?php include 'soap.php' ?>
		</div>
		<div class="col2">
			<!-- Column 2 start -->
			<div id="ads">
			</div>
			<h1>
			<?php 
			//phpinfo();

			$serverName = "vischa.ddns.net";
			$serverIP = gethostbyname($serverName);
			$mangosPort = 3724; //Realm Handler
			$realmPort_1 = 8085; //Realm World
			$minecraftPort_1 = 25565; //Minecraft Server #1

			function stest($ip, $portt) {
				$fp = @fsockopen($ip, $portt, $errno, $errstr, 0.1);
				if (!$fp) {
					//print "Error: $errstr </br> Error #: $errno </br>"; //Troubleshooting line
					return false;
				} else {
					fclose($fp);
					return true;
				}
			}


			if (stest($serverIP, $mangosPort)) { //Realm Handler
				echo "<font color=#008800>The MaNGOS server is up!</font> </br>";
			} else {
				echo "<font color=#CC0000>The MaNGOS server is down!</font> </br>";
			}

			if (stest($serverIP, $realmPort_1)) { //Realm World
				echo "<font color=#008800>The Elwynn Forest realm is up!</font> </br>";
			} else {
				echo "<font color=#CC0000>The Elwynn Forest realm is down!</font> </br>";
			}

			if (stest($serverIP, $minecraftPort_1)) { //Minecraft Server #1
				echo "<font color=#008800>The MineCraft Server is up!</font> </br>";
			} else {
				echo "<font color=#CC0000>The MineCraft Server is down!</font> </br>";
			}


			?>
			</h1>
			<!-- Column 2 end -->
		</div>
	</div>
</div>
<div id="footer">
	<h1>FOOTER!!!!</h1>
</div>

</body>
</html>
