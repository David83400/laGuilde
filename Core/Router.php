<?php

namespace Projet5\Core;

use Projet5\Controllers\Frontend\HomeController;

class Router
{
    public function routerRequest()
    {
        // On démarre la session
        session_start();
        // On récupère l'url
        $uri = $_SERVER['REQUEST_URI'];

        // On vérifie que uri n'est pas vide et qu'elle se termine par un /
        if (!empty($uri) && $uri != '/' && $uri[-1] === '/') {
            // On enlève le slash
            $uri = substr($uri, 0, -1);
            var_dump($uri);

            // On envoie un code de redirection permanente 
            http_response_code(301);
            // On redirige vers l'url sans le /
            header('location: ' . $uri);
            exit;
        }

        // On gère les paramètres d'url
        // p=controlleur/methode/paramètres
        // On sépare les paramètres dans un tableau
        // On utilise l'opérateur de coalescence nul pour définir par défaut la valeur sur une chaîne vide si la valeur est null
        $params = explode('/', $_GET['p'] ?? '');

        if ($params[0] != '') {
            // On a au moins un paramètre
            // On récupère le nom du controlleur à instancier (1er paramètre)
            // On met une majuscule en première lettre, on ajoute le namespace complet et "Controller après"
            $controller = '\\Projet5\\Controllers\\Frontend\\' . ucfirst(array_shift($params)) . 'Controller';
            $controller = new $controller();

            $action = (isset($params[0])) ? array_shift($params) : 'display';

            if (method_exists($controller, $action)) {
                // Si il reste des paramètres, on les passe à la mèthode
                (isset($params[0])) ? call_user_func_array([$controller, $action], $params) : $controller->$action();
            } else {
                http_response_code(404);
                echo 'La page demandée n\'existe pas';
            }
        } else {
            //On n'a pas de pramètre, on instancie le controlleur par défaut
            $controller = new HomeController;
            $controller->display();
        }
    }
}
