<?php
require 'vendor/autoload.php';

//use \Psr\Http\Message\ServerRequestInterface as Request;
//use \Psr\Http\Message\ResponseInterface as Response;

//use Slim\Http\Request;
//use Slim\Http\Response;


// instantiate the App object
$app = new \Slim\App;
$container = $app->getContainer();

$container['view'] = function ($container) {
    $templates = '/srv/gate-house/templates';
    return new \Slim\Views\PhpRenderer('/srv/gate-house');
//    return new Slim\Views\Twig($templates, compact('cache'));
};

//$loader = new Twig_Loader_Filesystem('/srv/gate-house/templates');
//$twig = new Twig_Environment($loader, array( 'debug' => true ));

// Add route callbacks
$app->get('/', function ($request, $response, $args) {
    //global $twig;
    //return $twig->render('home.twig', array( 'test_message' => '<p>--Switchfoot <\\p>' ));
    return $this->view->render($response, 'pages/home.php' , [ 'arguments' => 'Hello World' ] );
  });

// Run application
$app->run();

?>
