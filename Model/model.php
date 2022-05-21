<?php

function getMembers() {
    $db = dbConnect();
    $req = $db->query('SELECT *, DATE_FORMAT(inscriptionDate, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation
                        FROM members ORDER BY date_creation DESC LIMIT 0, 5');
    return $req;
}

function dbConnect() {
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=laGuilde;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}