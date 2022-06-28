<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;

class ProfilController extends Controller
{
    public function displayProfil(int $id)
    {
        $membersModel = new MembersModel;

        $members = $membersModel->find($id);

        $this->render('Frontend/profil', ['members' => $members]);
    }
}
