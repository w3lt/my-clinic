<?php
class Patient {
    public $id;
    private $db;
    private $table;
        
    public function __construct() {
        $this->table = "Patient";
        $this->db = new Database();
        $this->db->getConnection();
    }
    public function addPatient($data) {
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
        // showPatient($id);
        // deletePatient($id);
        // updatePatient($date);
        // getPatients();
}
?>