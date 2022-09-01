<?php

namespace Projet5\Models\Frontend;

use Projet5\Models\Manager;

class ContactMessagesModel extends Manager
{
    protected $contact_title;
    protected $contact_message;
    protected $message_date;
    protected $visitor_id;

    public function __construct()
    {
        $this->table = 'contact_messages';
    }

    /**
     * Get the value of contact_title
     */
    public function getContact_title()
    {
        return $this->contact_title;
    }

    /**
     * Set the value of contact_title
     *
     * @return  self
     */
    public function setContact_title($contact_title)
    {
        $this->contact_title = $contact_title;

        return $this;
    }

    /**
     * Get the value of contact_message
     */
    public function getContact_message()
    {
        return $this->contact_message;
    }

    /**
     * Set the value of contact_message
     *
     * @return  self
     */
    public function setContact_message($contact_message)
    {
        $this->contact_message = $contact_message;

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
     * Get the value of visitor_id
     */
    public function getVisitor_id()
    {
        return $this->visitor_id;
    }

    /**
     * Set the value of visitor_id
     *
     * @return  self
     */
    public function setVisitor_id($visitor_id)
    {
        $this->visitor_id = $visitor_id;

        return $this;
    }
}
