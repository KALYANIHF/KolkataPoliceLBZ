<?php
class Contact
{
    private $db;

    ## define the constructor
    public function __construct()
    {
        $this->db = new Database();
    }

    ## define add contact request to the database
    public function addContactRequest($data)
    {
        $this->db->query('INSERT INTO contact(name,email,reason) VALUES(:name,:email,:reason)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':reason', $data['reason']);
        if ($this->db->exec()) {
            return true;
        } else {
            return false;
        }
    }
}
