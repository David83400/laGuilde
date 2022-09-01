<?php

namespace Projet5\Models\Frontend;

use Projet5\Models\Manager;

class AssistanceMessagesModel extends Manager
{
    protected $id;
    protected $message_object;
    protected $assistance_title;
    protected $assistance_message;
    protected $message_date;
    protected $member_id;

    public function __construct()
    {
        $this->table = 'assistance_messages';
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
     * Get the value of message_object
     */
    public function getMessage_object()
    {
        return $this->message_object;
    }

    /**
     * Set the value of message_object
     *
     * @return  self
     */
    public function setMessage_object($message_object)
    {
        $this->message_object = $message_object;

        return $this;
    }

    /**
     * Get the value of assistance_title
     */
    public function getAssistance_title()
    {
        return $this->assistance_title;
    }

    /**
     * Set the value of assistance_title
     *
     * @return  self
     */
    public function setAssistance_title($assistance_title)
    {
        $this->assistance_title = $assistance_title;

        return $this;
    }

    /**
     * Get the value of assistance_message
     */
    public function getAssistance_message()
    {
        return $this->assistance_message;
    }

    /**
     * Set the value of assistance_message
     *
     * @return  self
     */
    public function setAssistance_message($assistance_message)
    {
        $this->assistance_message = $assistance_message;

        return $this;
    }

    /**
     * Get the value of message_date
     */
    public function getMessage_date()
    {
        return date_create($this->message_date, timezone_open("Europe/Paris"));
    }

    /**
     * Set the value of message_date
     *
     * @return  self
     */
    public function setMessage_date($message_date)
    {
        $message_date = date_create($message_date, timezone_open("Europe/Paris"));

        $this->message_date = date_format($message_date, 'Y-d-m H:i:s');

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
