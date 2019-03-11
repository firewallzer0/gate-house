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


//Get the homepage
$app->get('/', function ($request, $response, $args) {
  global $serverName, $serverIP, $mangosPort, $realmPort_1, $minecraftPort_1;
    $Mangos_status = "<span class=\"statitem-disabled\">" . "The MaNGOS server is down!" . "</span>";
    $Elwynn_Forest_status = "<span class=\"statitem-disabled\">" . "The Elwynn Forest realm is down!" . "</span>";
    $Minecraft_status = "<span class=\"statitem-disabled\">" . "The MineCraft Server is down!" . "</span>";
    $SSH_status = "<span class=\"statitem-disabled\">" . "SSH port is Closed" . "</span>";

    if (stest($serverIP, $mangosPort)) { //Realm Handler
    //if (false) {
      $Mangos_status = "<span class=\"statitem\">" . "The MaNGOS server is up!" . "</span>";
    } 

    if (stest($serverIP, $realmPort_1)) { //Realm World
      $Elwynn_Forest_status = "<span class=\"statitem\">" . "The Elwynn Forest realm is up!" . "</span>";
    }

    if (stest($serverIP, $minecraftPort_1)) { //Minecraft Server #1
      $Minecraft_status = "<span class=\"statitem\">" . "The MineCraft Server is up!" . "</span>";
    }

    if (stest($serverIP, 65022)) { //SSH port
      $SSH_status = "<span class=\"statitem\">" . "SSH port is Open" . "</span>";
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


//TODO: 
//output: returns stats data in json
$app->get('/stats', function ($request, $response, $args) {
});

//TODO:
//output: loads the login page
$app->get('/login', function ($request, $response, $args) {
});

//TODO: 
//output: loads the change password form
$app->get('/change-password-form', function ($request, $response, $args) {
});

//TODO: 
//output: processes the change password data and command
$app->get('/update-password', function ($request, $response, $args) {
});


// Run application
$app->run();
?>
