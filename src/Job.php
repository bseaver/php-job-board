<?php
class Job
{
    private $title;
    private $description;
    private $contact;

    function __construct($new_title, $new_description, $new_contact)
    {
        $this->setTitle($new_title);
        $this->setDescription($new_description);
        $this->setContact($new_contact);
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setDescription($new_description)
    {
        $this->description = $new_description;
    }

    function getContact()
    {
        return $this->contact;
    }

    function setContact($new_contact)
    {
        $this->contact = $new_contact;
    }
}

?>
