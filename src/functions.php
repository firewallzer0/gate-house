<?php
$serverName = "vischa.ddns.net";
$serverIP = gethostbyname($serverName);
$mangosPort = 3724; //Realm Handler
$realmPort_1 = 8085; //Realm World
$minecraftPort_1 = 25565; //Minecraft Server #1

//Socket Test function
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

//Retrieve WOW Server Stats
function wow_server_stats() {
  global $serverName, $serverIP, $mangosPort, $realmPort_1, $minecraftPort_1;
  if (stest($serverIP, $realmPort_1)) { //Realm World
    echo "<font color=#008800>The Elwynn Forest realm is up!</font> </br>";
    $username = 'SOAPUSER';
    $password = 'SOAPPASSWORD';
    $host = "localhost";
    $soapport = 7878;
    $command = "server info";
    $client = new SoapClient(NULL,
    array(
      "location" => "http://$host:$soapport/",
      "uri" => "urn:MaNGOS",
      "style" => SOAP_RPC,
      'login' => $username,
      'password' => $password
    ));
    try {
      $result = $client->executeCommand(new SoapParam($command, "command"));
    }
    catch (Exception $e)
    {
      echo "Command failed! Reason:<br />\n";
      echo $e->getMessage();
    }
    return $result;
  } else {
    return "<font color=#CC0000>The Elwynn Forest realm is down!</font> </br>";
  }
}

?>
