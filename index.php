<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$container = $app->getContainer();
$container['indexController'] = function ($container) {
    
    return $indexController;
};
$app->get('/', function($reg, $res, $args){
    $indexController = $this->get('indexController');
    return $res;
});
    



$app->run();
