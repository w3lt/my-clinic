<?php
class Patient
{
    public $id;
    private $db;
    private $table;
    protected $idDoctor;

    public function __construct()
    {
        $this->table = "patient";
        $this->db = new Database();
        $this->db->getConnection();
        $this->idDoctor = $_SESSION['doctor_id'];
    }
    public function addPatient($data)
    {
        $sql = "INSERT INTO " . $this->table . " (doctor_id, name, email, phone, health_condition) VALUES (" . $this->idDoctor . ",'" . $data['name'] . "', '" . $data['email'] . "', " . $data['phone'] . ", '" . $data['health_condition'] . "')";
        try {
            $this->db->query($sql);
            $this->db->execute();
            return true;
        } catch (Exception $exception) {
            return false;
        }
        ;
    }
    public function deletePatient($id)
    {
        echo "Deleting....";
        $sql = "DELETE FROM " . $this->table . " WHERE id = " . $id;
        try {
            $this->db->query($sql);
            $this->db->execute();
            return true;
        } catch (Exception $exception) {
            return false;
        }
        ;
    }
    public function showPatient($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;
        try {
            $this->db->query($sql);
            return $this->db->single();
        } catch (Exception $exception) {
            return false;
        }
        ;
    }
    public function updatePatient($data)
    {
        return false;
    }
    public function getPatients()
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE doctor_id = " . $this->idDoctor;
        try {
            $this->db->query($sql);
            return $this->db->resultSet();
        } catch (Exception $exception) {
            return false;
        }
        ;
    }
}
?>