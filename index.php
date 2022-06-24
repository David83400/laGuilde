<?php

use Projet5\Autoloader;
use Projet5\Core\Router;

require_once 'Autoloader.php';
Autoloader::register();

//require_once 'Controller/Router.php';
$router = new Router;
$router->routerRequest();
