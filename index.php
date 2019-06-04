<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$container = $app->getContainer();
$app->get('/hello[/{name}]', function ( $request,  $response) {
    // $name = $request->getAttribute('id');
    // $response->write( $name);
    echo "string";
    // return $response;

});
// $container['logger'] = function($c) {
//     $logger = new \Monolog\Logger('my_logger');
//     $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
//     $logger->pushHandler($file_handler);
//     return $logger;
// };
$app->run();
