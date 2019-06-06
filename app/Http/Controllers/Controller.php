<?php

namespace App\Http\Controllers;

use Slim\Container;
use Slim\Views\Twig;

abstract class Controller
{
    /**
     * @var Twig
     */
    public $view;

    public $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
    }

    public function get($id) {
        return $this->container->get($id);
    }

    public function render($template, $data = [])
    {
        return $this->view->render(
            $this->container->get('response'),
            str_replace('.', '/', $template).'.twig',
            $data
        );
    }
}
