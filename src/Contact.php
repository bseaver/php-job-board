<?php
    class Contact
    {
        private $contact_name;
        private $address;
        private $phone_number;

        function __construct($contact_name, $address, $phone_number)
        {
            $this->setName($contact_name);
            $this->setAddress($address);
            $this->setPhoneNumber($phone_number);
        }

        function setName($new_name)
        {
            $this->contact_name = $new_name;
        }

        function getName()
        {
            return $this->contact_name;
        }

        function setAddress($new_address)
        {
            $this->address = $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setPhoneNumber($new_phone_number)
        {
            $this->phone_number = $new_phone_number;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

    }

?>
