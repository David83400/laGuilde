<?php

namespace projet5\Controller;

require_once('Controller/Frontend/MembersController.php');

use projet5\Controller\Frontend\MembersController;

class Router
{
    private $members;

    public function __construct()
    {
        $this->members = new MembersController;
    }

    public function routerRequest()
    {
        try {
            if(isset($_GET['action'])) {
                if($_GET['action'] == 'listMembers') {
                    $this->members->listMembers();
                }
            } else {
                $this->members->listMembers();
            }
        } catch(Exception $e) {
            $errorMessage = $e->getMessage();
            require('Views/errorView.php');
        }
    }
}
