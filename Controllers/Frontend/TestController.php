<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;

class TestController extends Controller
{
    public function display()
    {
        $membersModel = new MembersModel;

        $members = $membersModel->findAll();

        $this->render('Frontend/test', ['members' => $members]);
    }
}
