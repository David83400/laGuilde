<?php
namespace projet5\Model\Frontend;

require_once('Model/Manager.php');

use projet5\Model\Manager;

class MembersManager extends Manager
{
    public function getMembers() {
    $db = $this->dbConnect();
    $req = $db->query('SELECT *, DATE_FORMAT(inscription_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation
                        FROM members ORDER BY date_creation DESC LIMIT 0, 5');
    return $req;
    }
}