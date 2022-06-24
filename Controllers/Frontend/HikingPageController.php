<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;

class HikingPageController extends Controller
{
    public function display()
    {
        $this->render('Frontend/hikingPage');
    }
}
