<?php

require 'vendor/autoload.php';

include 'settings/environment-var.php';
include 'src/functions.php';

//use \Psr\Http\Message\ServerRequestInterface as Request;
//use \Psr\Http\Message\ResponseInterface as Response;

//use Slim\Http\Request;
//use Slim\Http\Response;


// instantiate the App object
$app = new \Slim\App;
$container = $app->getContainer();


$container['view'] = function ($container) {
    $templates = constant("ROOTFOLDER") . '/templates';
    return new \Slim\Views\PhpRenderer(constant("ROOTFOLDER") );
};


// Add route callbacks
$app->get('/', function ($request, $response, $args) {
  global $serverName, $serverIP, $mangosPort, $realmPort_1, $minecraftPort_1;
    $Mangos_status = "<font color=#CC0000>The MaNGOS server is down!</font> </br>";
    $Elwynn_Forest_status = "<font color=#CC0000>The Elwynn Forest realm is down!</font> </br>";
    $Minecraft_status = "<font color=#CC0000>The MineCraft Server is down!</font> </br>";
    $SSH_status = "<font color=#CC0000>SSH port is Closed</font> </br>";

    if (stest($serverIP, $mangosPort)) { //Realm Handler
      $Mangos_status = "The MaNGOS server is up!";
    } 

    if (stest($serverIP, $realmPort_1)) { //Realm World
      $Elwynn_Forest_status = "The Elwynn Forest realm is up!";
    }

    if (stest($serverIP, $minecraftPort_1)) { //Minecraft Server #1
      $Minecraft_status = "The MineCraft Server is up!";
    }

    if (stest($serverIP, 65022)) { //SSH port
      $SSH_status = "SSH port is Open";
    } 

    $stats = wow_server_stats();
    return $this->view->render($response
      , './pages/home.php' 
      , [ 'hello' => 'Hello World' 
      , 'stats' => $stats 
      , 'Mangos_status' => $Mangos_status
      , 'Elwynn_status' => $Elwynn_Forest_status
      , 'Minecraft_status' => $Minecraft_status
      , 'SSH_status' => $SSH_status
      ] );
  });

// Run application
$app->run();

?>
