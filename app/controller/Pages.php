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
            redirect('locantion:index.php?url=doctors/login');
        } else {
            $this->loadModel('Patient');
        }
        $this->render('/Pages/index', $data = []);
    }
    public function about()
    {
        $this->render('/Pages/about', $data = []);
    }
}
?>