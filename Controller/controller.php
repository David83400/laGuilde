<?php

require('./Model/model.php');

function listMembers() {
    $req = getMembers();
    
    require('./Views/frontend/test.php');
}