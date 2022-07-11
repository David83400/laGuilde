<?php

namespace Projet5\Controllers;

use Projet5\Controllers\Controller;

class ErrorController extends Controller
{
    /**
     * Display the error page
     *
     * @return void
     */
    public function display($errorMessage)
    {
        $this->render('errorView', ['errorMessage' => $errorMessage]);
    }
}
