<?php

namespace Projet5\Models\Frontend;

use Projet5\Models\Manager;

class MembersEmailModel extends Manager
{
    protected $id;
    protected $email;
    protected $member_id;

    public function __construct()
    {
        $this->table = 'members_email';
    }

    /**
     * Set the member session
     * @return void
     */
    public function setSession()
    {
        $_SESSION['memberEmail'] = [
            'email' => $this->email
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of member_id
     */
    public function getMember_id()
    {
        return $this->member_id;
    }

    /**
     * Set the value of member_id
     *
     * @return  self
     */
    public function setMember_id($member_id)
    {
        $this->member_id = $member_id;

        return $this;
    }
}
