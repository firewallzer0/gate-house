<?php include 'subpages/header.html'; ?>

<body>

<div id="header">
	<center>
		<!--<h2>menu maybe?</h2> -->
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
			include 'src/probe.php';
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
			if ($wowUp) {
				echo "<center><font color=#008800>MaNGOS Server is Online</font> </center></br>";
				include 'src/soap.php';

			} else {
					echo "<font color=#CC0000>MaNGOS Server is Offline</font> </br>";
				}
			?>
			<!-- Column 1 end -->
		</div>
	</div>
</div>

<?php include 'subpages/footer.html'; ?>
</body>
</html>
