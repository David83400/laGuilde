<?php

namespace Projet5\Controllers;

abstract class Controller
{
    public function render(
        string $file,
        array $data = [],
        string $template = 'Frontend/template',
        string $header = 'Frontend/header',
        string $navbar = 'Frontend/navbar',
        string $footer = 'Frontend/footer'
    ) {
        // On extrait le contenu de $data
        extract($data);

        ob_start();

        // On créé le chemin vers la vue
        require_once 'Views/' . $file . '.php';

        $content = ob_get_clean();

        require_once 'Views/' . $header . '.php';
        require_once 'Views/' . $navbar . '.php';
        require_once 'Views/' . $template . '.php';
        require_once 'Views/' . $footer . '.php';
    }
}
