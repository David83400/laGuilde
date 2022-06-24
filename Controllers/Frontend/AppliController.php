<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;

class AppliController extends Controller
{
    public function display()
    {
        $this->render('Frontend/appli');
    }
}
