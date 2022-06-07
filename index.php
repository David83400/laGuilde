<?php

use projet5\Autoloader;

require_once 'Autoloader.php';
Autoloader::register();

use projet5\Controller\Router;

$router = new Router;
$router->routerRequest();
