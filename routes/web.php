<?php

return function ($app) {
    /** @var \Slim\App $app */
    $app->get('/', 'App\Http\Controllers\HomeController:index');
    $app->get('/product', 'App\Http\Controllers\ProductController:getProductId');
};
