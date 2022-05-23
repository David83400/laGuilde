<?php
namespace LaGuilde\projet5\Model;

abstract class Manager {
    protected function dbConnect() {
        $db = new \PDO('mysql:host=localhost;dbname=laGuilde;charset=utf8', 'root', '');
        return $db;
    }
}
