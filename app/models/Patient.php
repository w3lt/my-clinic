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
        $sql = "INSERT INTO " . $this->table . " (name, email, password, specialist, gender) VALUES ('" . $data['name'] . "', '" . $data['email'] . "', '" . $data['password'] . "', '" . $data['specialist'] . "', '" . $data['gender'] . "')";
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
        return false;
    }
    public function deletePatient($id)
    {
        return false;
    }
    public function updatePatient($data)
    {
        return false;
    }
    public function getPatients()
    {
        $data = [];
        return $data;
    }
}
?>