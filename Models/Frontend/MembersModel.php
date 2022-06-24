<?php

namespace Projet5\Models\Frontend;

use Projet5\Models\Manager;

class MembersModel extends Manager
{
    protected $id;
    protected $pseudo;
    protected $password;
    protected $is_admin;
    protected $inscription_date;

    public function __construct()
    {

        $this->table = 'members';
    }

    /**
     * Method to create member session
     *
     * @return void
     */
    public function setSession()
    {
        $_SESSION['member'] = [
            'id' => $this->id,
            'pseudo' => $this->pseudo,
            'is-admin' => $this->is_admin,
            'inscription_date' => $this->inscription_date
        ];
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of is_admin
     */
    public function getIs_admin()
    {
        return $this->is_admin;
    }

    /**
     * Set the value of is_admin
     *
     * @return  self
     */
    public function setIs_admin($is_admin)
    {
        $this->is_admin = $is_admin;

        return $this;
    }

    /**
     * Get the value of inscription_date
     */
    public function getInscription_date()
    {
        return $this->inscription_date;
    }

    /**
     * Set the value of inscription_date
     *
     * @return  self
     */
    public function setInscription_date($inscription_date)
    {
        $this->inscription_date = $inscription_date;

        return $this;
    }
}
