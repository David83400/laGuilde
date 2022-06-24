<?php

namespace Projet5\Models;

use Projet5\Core\Database;

/**
 * Manage calls to db
 *
 * @author  David Roche <davidroche83400@gmail.com
 *
 */
class Manager extends Database
{
    protected $table;

    private $getDb;

    public function findAll()
    {
        $request = $this->executeRequest('SELECT * FROM ' . $this->table);
        return $request->fetchAll();
    }

    public function findBy(array $options)
    {
        $ranges = [];
        $values = [];

        foreach ($options as $range => $value) {
            $ranges[] = $range . '= ?';
            $values[] = $value;
        }

        // On transforme le tableau ranges en une chaine de caractères
        $rangesList = implode(' AND ', $ranges);

        return $this->executeRequest('SELECT * FROM ' . $this->table . ' WHERE ' . $rangesList, $values)->fetchAll();
    }

    public function find(int $id)
    {
        return $this->executeRequest('SELECT * FROM ' . $this->table . ' WHERE id=' . $id)->fetch();
    }

    /**
     * Récupère un member à partir de son pseudo
     *
     * @param string $pseudo
     * @return mixed
     */
    public function findOneByPseudo(string $pseudo)
    {
        return $this->executeRequest('SELECT * FROM ' . $this->table . ' WHERE pseudo=?', [$pseudo])->fetch();
    }

    /**
     * Récupère un member à partir de son email
     *
     * @param string $email
     * @return mixed
     */
    public function findOneByEmail(string $email)
    {
        return $this->executeRequest('SELECT * FROM ' . $this->table . ' WHERE email=?', [$email])->fetch();
    }

    public function create()
    {
        $ranges = [];
        $questionMark = [];
        $values = [];

        foreach ($this as $range => $value) {
            if ($value !== null && $range != 'getDb' && $range != 'table') {
                $ranges[] = $range;
                $questionMark[] = '?';
                $values[] = $value;
            }
        }

        // On transforme les tableaux ranges et questionMark en une chaine de caractères
        $rangesList = implode(', ', $ranges);
        $questionMarkList = implode(', ', $questionMark);

        return $this->executeRequest('INSERT INTO ' . $this->table . ' (' . $rangesList .
            ') VALUES(' . $questionMarkList . ')', $values);
    }

    public function update()
    {
        $ranges = [];
        $values = [];

        foreach ($this as $range => $value) {
            if ($value !== null && $range != 'getDb' && $range != 'table') {
                $ranges[] = $range . '= ?';
                $values[] = $value;
            }
        }
        $values[] = $this->id;

        // On transforme le tableau ranges en une chaine de caractères
        $rangesList = implode(', ', $ranges);

        return $this->executeRequest('UPDATE ' . $this->table . ' SET ' . $rangesList .
            ' WHERE id = ?', $values);
    }

    public function delete(int $id)
    {
        return $this->executeRequest('DELETE FROM ' . $this->table . ' WHERE id = ?', [$id]);
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            // On récupère le nom du setter correspondant à la clé (key)
            // pseudo -> setPseudo
            $setter = 'set' . ucfirst($key);

            if (method_exists($this, $setter)) {
                // On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }

    protected function executeRequest(string $sql, array $params = null)
    {
        $this->getDb = Database::getInstance();

        if ($params == null) {
            $result = $this->getDb->query($sql);
        } else {
            $result = $this->getDb->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }
}
