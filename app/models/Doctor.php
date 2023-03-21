<?php
require_once(APPROOT.'libraries/Database.php');

class Doctor {
    public $id;
    private $db;
    private $table;
    public function __construct() {
        $this->table = "Doctor";
        $this->db = new Database();
        $this->db->getConnection();
    }
    public function create($data) {
        $sql = "INSERT INTO " . $this->table . " (name, email, password, specialist, gender) VALUES ('".$data['name'] . "', '".$data['email'] . "', '".$data['password']."', '".$data['specialist'] . "', '".$data['gender']  ."')";
        try { 
            $this->db->query($sql);
            $this->db->execute();
            $this->id = $this->db->_connection->lastInsertId();
            echo $this->id;
            echo "\n";
            return true;
        } catch (Exception $exception) {
            return false;
        };
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM " . $this->table . " WHERE email ='" . $email . "' and password ='" . $password . "'";
        $this->db->query($sql);
        return $this->db->single();
    }
    public function findDoctorbyEmail($email) {
        $sql = "SELECT * FROM " . $this->table . " WHERE email = '" . $email . "'";
        $this->db->query($sql);
        return $this->db->single();
    }
    public function findDoctorbyId($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id =" . $id;
        $this->db->query($sql);
        return $this->db->single();
    }
    
}

