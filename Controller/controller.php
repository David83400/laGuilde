<?php

require_once('./Model/MembersManager.php');

function listMembers() {
    $membersManager = new LaGuilde\projet5\Model\MembersManager();
    $members = $membersManager->getMembers();
    
    require('Views/backend/test.php');
}