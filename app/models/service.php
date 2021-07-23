<?php
class Service
{
    private $db;

    ## define the constructor
    public function __construct()
    {
        $this->db = new Database();
    }

    ## define add contact request to the database
    public function getfir($data)
    {
        $this->db->query('SELECT * FROM view_fir WHERE name = :name AND email = :email AND fir_number = :fir_number');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':fir_number', $data['fir_number']);
        $row = $this->db->single();
        return $row;
    }
    ## define getdatabyid
    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM view_fir WHERE id=:id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
    ## define setchallan
    public function setchallan($data)
    {
        $this->db->query('INSERT INTO traffic_challan(vehicle_no,chasis_no,email_id,mobile_no,woner_name) VALUES(:vehicle_no,:chasis_no,:email_id,:mobile_no,:woner_name)');
        $this->db->bind(':vehicle_no', $data['vehicle_no']);
        $this->db->bind(':chasis_no', $data['chasis_no']);
        $this->db->bind(':email_id', $data['email_id']);
        $this->db->bind(':mobile_no', $data['mobile_no']);
        $this->db->bind(':woner_name', $data['woner_name']);
        if ($this->db->exec()) {
            return true;
        } else {
            return false;
        }
    }

    ## define puja permission
    public function pujaPermission($data)
    {
        $this->db->query('INSERT INTO puja_permission(club_name,address,mobile_no) VALUES(:club_name,:address,:mobile_no)');
        $this->db->bind(':club_name', $data['club_name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':mobile_no', $data['mobile_no']);
        if ($this->db->exec()) {
            return true;
        } else {
            return false;
        }
    }
}
