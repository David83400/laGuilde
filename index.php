<?php
require('Controller/controller.php');

if(isset($_GET['action'])) {
    if($_GET['action'] == 'listMembers') {
        listMembers();
    }
} else {
    listMembers();
}