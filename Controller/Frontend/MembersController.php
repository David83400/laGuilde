<?php

namespace projet5\Controller\Frontend;

require_once('Model/Frontend/MembersManager.php');

use projet5\Model\Frontend\MembersManager;

class MembersController
{
    function listMembers() {
        $membersManager = new MembersManager;
        $members = $membersManager->getMembers();
        require('Views/Frontend/test.php');
    }
}