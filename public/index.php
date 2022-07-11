<?php

use Projet5\Autoloader;
use Projet5\Core\Router;

// On définit une constante contenant le dossier racine
define('ROOT', dirname(__DIR__));

require_once ROOT . '/Autoloader.php';
Autoloader::register();

$router = new Router;
$router->routerRequest();
