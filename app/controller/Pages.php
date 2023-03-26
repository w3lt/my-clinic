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
            /*
            $data = [
            "name" => 'Khang',
            "email" => 'khang@insa-cvl.fr',
            "phone" => '0123456789',
            "health_condition" => 'bi gay giai doan cuoi vo phuong cuu chua'
            ];
            $this->model->addPatient($data);
            */
            var_dump($this->model->getPatients());
        }
        $this->render('/Pages/index', $data = []);
    }
    public function about()
    {
        $this->render('/Pages/about', $data = []);
    }
}
?>