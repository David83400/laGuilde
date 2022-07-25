<?php

namespace Projet5\Controllers;

abstract class Controller
{
    private $file;
    private $title;

    /**
     * Generate and display views
     *
     * @param string $file
     * @param array $data
     * @param string $template
     * @return void
     */
    public function render(string $file, array $data = [], string $template = 'Frontend/template')
    {
        $content = $this->generateFile($file, $data);
        $header = $this->generateFile('Frontend/header', $data);
        $navbar = $this->generateFile('Frontend/navbar', $data);
        $session = $this->generateFile('session', $data);
        $footer = $this->generateFile('Frontend/footer', $data);
        $view = $this->generateFile($template, array(
            'title' => $this->title,
            'header' => $header,
            'navbar' => $navbar,
            'session' => $session,
            'content' => $content,
            'footer' => $footer
        ));

        echo $view;
    }

    private function generateFile(string $file, array $data = [])
    {
        $this->file = ROOT . '/Views/' . $file . '.php';

        if (file_exists($this->file)) {
            extract($data);
            ob_start();
            require $this->file;
            return ob_get_clean();
        } else {
            throw new \Exception('le fichier ' . $file . ' est introuvable');
        }
    }
}
