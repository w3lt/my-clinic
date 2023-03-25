<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->loadModel('Patient');
    }
    public function index()
    {
        if (!isLoggedIn()) {
            redirect('locantion:index.php?url=doctors/login');
        } else {
            echo "Login success, redirecting......";
        }
        echo "The Main Page";
    }
    public function about()
    {
        $this->render('/Pages/about', $data = []);
    }
}
?>