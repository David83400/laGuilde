<?php
namespace LaGuilde\projet5\Model;

require_once('Model/Manager.php');

class MembersManager extends Manager {
    public function getMembers() {
    $db = $this->dbConnect();
    $req = $db->query('SELECT *, DATE_FORMAT(inscriptionDate, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation
                        FROM members ORDER BY date_creation DESC LIMIT 0, 5');
    return $req;
    }
}