<?php
class Pages extends Controller
{
    public function index()
    {
        if (!isLoggedIn()) {
            redirect('doctors/login');
        } else {
            echo "Login success, redirecting......";
        }
    }
    public function about()
    {
        $this->render('/Pages/about', $data = []);
    }
}
?>