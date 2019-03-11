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
            echo "<span class=\"wowinfo\">" . $onlineCount  . "</span><br />";
            }
            $uptime = substr($stats, 
              strpos($stats,"Server uptime:")
            );
        ?>
            <span class="wowinfo"><?php echo $uptime ?></span><br />
            <table class="stats-table"><tbody> 
              <tr> <td>
                <?php echo $Mangos_status; ?>
              </td></tr>
              <tr> <td>
                <?php echo $Elwynn_status; ?>
              </td></tr>
              <tr> <td>
                <?php echo $Minecraft_status; ?>
              </td></tr>
              <tr> <td>
                <?php echo $SSH_status; ?>
              </td></tr>
            </tbody></table>
      <!-- Column 2 end -->
    </div>
    <div class="col2">
      <!-- Column 1 start -->
      <!--php include 'src/sidebar.php' ?> -->
      <h1>
        <span class="under-construction">Login form here: Coming Soon(tm)</span>
        <!--?php //include 'src/probe.php'; ?-->
      </h1>
      <!-- Column 1 end -->
    </div>
  </div>
</div>

<?php include 'subpages/footer.html'; ?>
</body>
</html>
