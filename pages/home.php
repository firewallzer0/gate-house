<?php include 'subpages/header.html'; ?>

<body>
<div class="colmask rightmenu">
  <div class="colleft">
    <div class="col1">

      <!-- Column 2 start -->
      <div id="ads">
      </div>
        <!-- ?php include 'src/sidebar.php' ?> -->
        <img src="img/wotlk-logo.png" width="400px" height="198px" >
        <br />
        <?php 
          if ( 'CMaNGOS' == substr($stats , 0 , 7) ) {
            $onlineCount = substr($stats, 
              strpos($stats,"Online players:")
              , 27);
            echo "<span class=\"statitem\">" . $onlineCount  . "</span><br />";
            }
            $uptime = substr($stats, 
              strpos($stats,"Server uptime:")
            );
            echo "<span class=\"statitem\">" . $uptime  . "</span><br />";
            //echo "<span>" . $stats  . "</span><br />";
        ?>
      <!-- Column 2 end -->
    </div>
    <div class="col2">
      <!-- Column 1 start -->
      <!--php include 'src/sidebar.php' ?> -->
      <h1>
        <?php //include 'src/probe.php'; 
            echo "<span class=\"statitem\">" . $Mangos_status  . "</span><br />";
            echo "<span class=\"statitem\">" . $Elwynn_status  . "</span><br />";
            echo "<span class=\"statitem\">" . $Minecraft_status  . "</span><br />";
            echo "<span class=\"statitem\">" . $SSH_status  . "</span><br />";
        ?>
      </h1>
      <!-- Column 1 end -->
    </div>
  </div>
</div>

<?php include 'subpages/footer.html'; ?>
</body>
</html>
