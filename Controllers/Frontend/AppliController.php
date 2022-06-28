<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;

class AppliController extends Controller
{
    public function homePage()
    {
        $this->render('Frontend/appli/homePage');
    }

    public function hikingPage()
    {
        $this->render('Frontend/appli/hikingPage');
    }
}
