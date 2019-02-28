<?php include 'subpages/header.html'; ?>

<body>
<?php include 'src/check-session.php'; ?>
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
			<?php include 'src/sidebar.php' ?>
			<!-- Column 1 end -->
		</div>
	</div>
</div>

<?php include 'subpages/footer.html'; ?>
</body>
</html>
