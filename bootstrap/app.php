<?php

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Slim\App;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

require dirname(__DIR__).'/vendor/autoload.php';

$capsule = new Capsule();
$capsule->addConnection(require dirname(__DIR__).'/config/database.php');
$capsule->setEventDispatcher(new Dispatcher(new Container()));
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container = new Container(require dirname(__DIR__).'/config/app.php');

$container['view'] = function (Container $container) {
    $view = new Twig(dirname(__DIR__).'/resources/views', [
        'cache' => dirname(__DIR__).'/storage/views',
    ]);

    $router = $container->get('router');
    $uri = Uri::createFromEnvironment(new Environment($_SERVER));
    $view->addExtension(new TwigExtension($router, $uri));

    return $view;
};

$app = new App($container);
$app->group('', require dirname(__DIR__).'/routes/web.php');

return $app;
