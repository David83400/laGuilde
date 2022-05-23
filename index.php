<?php
require_once('Controller/controller.php');

try {
    if(isset($_GET['action'])) {
        if($_GET['action'] == 'listMembers') {
            listMembers();
        }
    } else {
        listMembers();
    }
} catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('Views/errorView.php');
}