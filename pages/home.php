<?php include 'subpages/header.html'; ?>

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
			include 'src/functions.php';
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
				<img src="img/wotlk-logo.png" width="85%">
				<h1>Server Stats:</h1>
			</center>
			<?php
			//echo "</br></br></br>";
			if ($wowUp) {
				include 'src/soap.php';				
			}
			//echo "</br></br> ServerUP is: $wowUp";

			?>
			<!-- Column 1 end -->
		</div>
	</div>
</div>

<?php include 'subpages/footer.html'; ?>
</body>
</html>


