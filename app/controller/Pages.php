<?php
class Pages extends Controller
{
    public function __construct()
    {
        //$this->loadModel('Patient');
    }
    public function index()
    {
        if (!isLoggedIn()) {
            redirect('doctors/login');
        } else {
            $this->loadModel('Patient');
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $patientInfo = [
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "phone" => $_POST['phone'],
                    "health_condition" => $_POST['health_condition']
                ];
                $this->model->addPatient($patientInfo);
            }
            $data = $this->model->getPatients();
        }
        $this->render('/Pages/index', compact('data'));
    }
    public function about()
    {
        $this->render('/Pages/about', $data = []);
    }
    public function delete($id)
    {
        $this->loadModel('Patient');
        if ($this->model->deletePatient($id)) {
            redirect('/pages/index');
        }
    }
}
?>